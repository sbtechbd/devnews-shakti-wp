<?php get_header(); ?>
<?php global $themesbazar; ?> 
	
	<!-- Section 05 (top three div) #################################--> 	
	
		<div class="row">		
			<div class="col-md-8">
			
			  <div class="leadnews">
     

                        <?php if(have_posts()) : ?>
	    
		 <?php while(have_posts()) : the_post(); ?>
		             
					 <div class="sin-image"> 
		 
                       <?php the_post_thumbnail(); ?>
				     </div>
					   
					   <?php 
                           $caption = get_post(get_post_thumbnail_id())->post_excerpt;
                                if ($caption): ?>
                                         <div class="caption"><?php echo $caption ?> </div>
                                <?php endif; ?> 
					   
                       <h3 class="heading_01" style="font-size:25px;"><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h3>
					   <ol class="breadcrumb">
        <li><?php echo $themesbazar['update'];?> <?php the_time('F, j, Y, g:i a'); ?></li>
        <li class="active"><?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?> <?php echo $themesbazar['count'];?></li>
        </ol>
                       <p><?php the_content();?> </p> 


					   <?php endwhile;?>
	                    <?php endif;?>
                  </div>
				  
				  
				  	
		</div>
			
			
			<div class="col-md-4">
				
				<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo $themesbazar['popular']; ?></a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $themesbazar['last']; ?> </a></li>
					</ul>

					<!-- Tab panes -->
				
					<div class="tab-content mar">
						<div role="tabpanel" class="tab-pane active" id="home">
						
												<?php
					             query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
					           if (have_posts()) : while (have_posts()) : the_post();
					               ?>
							<div class="images_title">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
								<h4 class="heading_02"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
							</div>
						
							    <?php endwhile; endif; ?>
					          <?php wp_reset_query(); ?>
						</div>
					
					
						<div role="tabpanel" class="tab-pane" id="profile">	
                         
					<?php 
			            $catlast = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => $themesbazar['lastpost'],
				  
                     ));
                        while ($catlast->have_posts()) : $catlast ->the_post();
			   
			     ?>
						
							<div class="images_title">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</div>
							
				          <?php endwhile; ?>
						</div>
					</div>
				
			</div>
		</div>
	<!-- Section 06 (footer) #################################-->
	
<?php get_footer(); ?>
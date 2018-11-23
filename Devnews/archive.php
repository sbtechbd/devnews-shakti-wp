<?php get_header(); ?>
<?php global $themesbazar; ?>  
	
	<!-- Section 05 (top three div) #################################--> 	
	
		<div class="row">
			<div class="col-md-8">
			  <?php if(have_posts()) : ?>
                     <?php
             
                     while(have_posts()) : the_post();?>
                      <?php $word = $themesbazar['word-archive']; ?>
				<div class="archive_details">
					<div class="archive_img"><?php the_post_thumbnail(); ?></div>
					<h3 class="heading_01"><a href="<?php the_permalink(); ?>"><?php the_title();?></h3>
					<p><?php echo excerpt($word); ?> <span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span></p> 
				</div>
				
				<?php endwhile; ?>
                    <?php endif; ?>
					
					<div class="row">
                    <div class="col-md-12">
                    
                    <?php wp_bootstrap_pagination(); ?>

                                  </div></div>
				
			</div>
			<div class="col-md-4">
					<!-- Nav tabs --------------------------------->
				<div class="main_nav">
					<ul class="nav nav-tabs" role="tablist">
					  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo $themesbazar['last']; ?> </a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $themesbazar['popular']; ?></a></li>
						
					</ul>

					<!-- Tab panes -->
				
					<div class="tab-content">
					
					
					
					
					    <div role="tabpanel" class="tab-pane" id="profile">	
                         
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
					
						<div role="tabpanel" class="tab-pane active" id="home">

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
				<!-- Nav tabs Close --------------------------------->
					
					
				</div>
			
			
		</div>
	<!-- Section 06 (footer) #################################-->
	
			<?php get_footer(); ?>
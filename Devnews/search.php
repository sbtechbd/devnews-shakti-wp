<?php get_header(); ?>
<?php global $themesbazar; ?> 
	
	<!-- Section 05 (top three div) #################################--> 	
	
		<div class="row">		
			<div class="col-md-8">
			
			  
			  <?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

   
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        	<div class="archive_details">
					<div class="archive_img"><?php the_post_thumbnail(); ?></div>
					<h3 class="heading_01"><a href="<?php the_permalink(); ?>"><?php the_title();?></h3>
					<p><?php echo excerpt($word); ?> <span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span></p> 
				</div>   
    <?php endwhile; ?>

    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
			  
			  
			  
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
				<?php dynamic_sidebar('single_widget'); ?>
			</div>
		</div>
	<!-- Section 06 (footer) #################################-->
	
<?php get_footer(); ?>
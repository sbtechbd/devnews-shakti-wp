<?php get_header(); ?>
		
	<!-- Section 04 (top three div) #################################--> 	
			<!--cat 1 start -->
		<div class="row">
			<div class="col-md-4">
			<?php global $themesbazar;
    $catone = get_the_category_by_id($themesbazar['cat-one']);
    $catone_link = get_category_link($themesbazar['cat-one']);

                         $cat01 = new WP_Query(array(
                       'post_type' => 'post',
                   'posts_per_page' => 1,
                   'category_name' => $catone,
                     ));
                   while ($cat01->have_posts()) : $cat01 ->the_post(); ?>

			
				<div class="leadnews">	
				
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
					<h3 class="heading_01"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php echo excerpt($themesbazar['excerpt-cat-one']);?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span></p> 
				</div>
				
				<?php endwhile; ?>
			</div>
			<!--cat 1 end -->
			<!--cat tab star -->
			
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
			<!--cat tab end -->
			<div class="col-md-4">
				<div class="big_images">
					<?php dynamic_sidebar('sidebar'); ?>
				</div>
			
			</div>
		</div>
			
			
	<!-- Section 05 (top two div) #################################--> 			
			
		<div class="row">
		 <!--cat 2 start -->
			<div class="col-md-8">
				<div class="row">
				
				<?php 
					$cattwo = get_the_category_by_id($themesbazar['cat-two']);
                   $cattwo_link = get_category_link($themesbazar['cat-two']);
				   
				   $cat02 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => $themesbazar['how-cat-two'],
                   'category_name' => $cattwo,
                     ));
                   while ($cat02->have_posts()) : $cat02 ->the_post();
					?>	
					<div class="col-md-4">
						<div class="exclusive">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<h3 class="heading_03"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div>
					
					
					<?php endwhile; ?>
					
				</div>					
			</div>
			<!--cat 2 end -->
			<div class="col-md-4">
				<div class="big_images">
					<?php dynamic_sidebar('sidebartwo'); ?>
				</div>
				
			</div>
		</div>	
	<!-- Section 06 (top add heare) #################################--> 
	
		<div class="row ads">
			<div class="col-md-6">

					<?php dynamic_sidebar('widget_area_01');?>

			</div>
			<div class="col-md-6">

					<?php dynamic_sidebar('widget_area_02');?>

			</div>
		</div>	
			
	<!-- Section 07 (top two div) #################################--> 		
			
			
		<div class="row">
		
		 <!--cat 3 start -->
			<div class="col-md-8">
			       
				   <?php 
			$catthree = get_the_category_by_id($themesbazar['cat-three']);
            $catthree_link = get_category_link($themesbazar['cat-three']);
			
			?>
				   
				<h4 class="catagory_title"><a href="<?php echo esc_url($catthree_link);?>"><i class="fa fa-bars"></i> <?php echo $catthree; ?> </a></h4>
				<div class="row">
				<div class="col-md-6">
				      <?php 
			          $cat03 = new WP_Query(array(
                       'post_type' => 'post',
                      'posts_per_page' => 1,
				       'offset' =>0,
                       'category_name' => $catthree,
					   ));
                    while($cat03 ->have_posts()) : $cat03 ->the_post();
			   
			     ?>
					<div class="leadnews">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h3 class="heading_01"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo excerpt($themesbazar['excerpt-cat-three']);?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span></p>
					</div>
					<?php endwhile; ?>
					
				</div>
				<div class="col-md-6">
				
				  <?php 
			          $cat03 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => $themesbazar['how-cat-three'],
				   'offset' =>1,
                   'category_name' => $catthree,
                     ));
                   while ($cat03 ->have_posts()) : $cat03 ->the_post();
			   
			     ?>
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
                   <?php endwhile; ?>					
				</div>
				 <div class="morenews"><a href="<?php echo esc_url($catthree_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
			</div>
			 <!--cat 3 end -->
			 
			 <!--cat 4 start -->
			</div>
			<div class="col-md-4">
				<div class="internetional">
				  
				  <?php 
			$catfour = get_the_category_by_id($themesbazar['cat-four']);
            $catfour_link = get_category_link($themesbazar['cat-four']);
			
			?>
				  
					<h4 class="catagory_title"><a href="<?php echo esc_url($catfour_link);?>"><i class="fa fa-bars"></i> <?php echo $catfour; ?></a></h4>
					 <?php 
			          $cat04 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => $themesbazar['how-cat-four'],
                   'category_name' => $catfour,
                     ));
                   while ($cat04 ->have_posts()) : $cat04 ->the_post();
			   
			     ?>
					
					<div class="images_title">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h4 class="heading_02"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					 <div class="morenews"><a href="<?php echo esc_url($catfour_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>

				</div>
				
				<!--cat 4 end  -->
			</div>
		</div>	
			
	<!-- Section 08 (top two add-here) #################################--> 			
			
		<div class="row ads">
			<div class="col-md-6">
				<?php dynamic_sidebar('widget_area_03');?>
			</div>
			<div class="col-md-6">
				<?php dynamic_sidebar('widget_area_04');?>
			</div>
		</div>
			
		<div class="row ads">
			<div class="col-md-12">
				<?php dynamic_sidebar('widget_area_05');?>	
			</div>
		</div>	
			
	<!-- Section 09 (top two div) #################################--> 		
			
		<div class="row">
		   <!--cat 5 start  -->
			<div class="col-md-8">
			
			 <?php 
			$catfive = get_the_category_by_id($themesbazar['cat-five']);
            $catfive_link = get_category_link($themesbazar['cat-five']);
			
			?>
				<h4 class="catagory_title"> <a href="<?php echo esc_url($catfive_link);?>"><i class="fa fa-bars"></i> <?php echo $catfive; ?></a></h4>
				<div class="row">
					<div class="col-md-6">	
					
					 <?php 
			          $cat05 = new WP_Query(array(
                     'post_type' => 'post',
                     'posts_per_page' => 1,
				     'offset' =>0,
                     'category_name' => $catfive,
                     ));
                   while ($cat05 ->have_posts()) : $cat05 ->the_post();
			   
			     ?>
						<div class="leadnews">					
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<h3 class="heading_01"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo excerpt($themesbazar['excerpt-cat-five']);?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span></p>
						</div>
						
						<?php endwhile; ?>
					</div>			
					<div class="col-md-6">
					
					    <?php 
			                    $cat05 = new WP_Query(array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
				                'offset' =>1,
                                'category_name' => $catfive,
                                       ));
                                while ($cat05 ->have_posts()) : $cat05 ->the_post();  ?>
						
							<div class="images_title">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</div>
							
						  <?php endwhile; ?>
						  
						  <?php 
						        $cat05 = new WP_Query(array(
							   'post_type' => 'post',
							   'posts_per_page' => $themesbazar['how-cat-five'],
							   'offset' =>3,
							   'category_name' => $catfive,
								 ));
							   while ($cat05 ->have_posts()) : $cat05 ->the_post();
			   
			                     ?>
							<div class="heading_title">
								<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</div>
							<?php endwhile; ?>
							 <div class="morenews"><a href="<?php echo esc_url($catfive_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
					</div>
				</div>
			</div>
			<!--cat 5 end  -->
			<!--cat 6 start  -->
			<div class="col-md-4">
			
			 <?php 
			$catsix = get_the_category_by_id($themesbazar['cat-six']);
            $catsix_link = get_category_link($themesbazar['cat-six']);
			
			?>
				<h4 class="catagory_title"> <a href="<?php echo esc_url($catsix_link);?>"><i class="fa fa-bars"></i> <?php  echo $catsix; ?></a></h4>
				
				  <?php $cat06 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => 1,
				   'offset' =>0,
                   'category_name' => $catsix,
                     ));
                   while ($cat06 ->have_posts()) : $cat06 ->the_post();
			   
			     ?>
				
				<div class="leadnews">					
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div>
				<?php endwhile; ?>
				  <?php 
			          $cat06 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => $themesbazar['how-cat-six'],
				   'offset' =>1,
                   'category_name' => $catsix,
                     ));
                   while ($cat06 ->have_posts()) : $cat06 ->the_post();
			   
			     ?>
				<div class="heading_title">
					<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div>
				
				<?php endwhile; ?>
				
				 <div class="morenews"><a href="<?php echo esc_url($catsix_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
				
			</div>
			<!--cat 6 end  -->
		</div>	
		
	<!-- Section 10 (top add here) #################################--> 	
		<div class="row ads">
		<div class="col-md-6">
			<?php dynamic_sidebar('widget_area_06');?>
		</div>
		<div class="col-md-6">
			<?php dynamic_sidebar('widget_area_07');?>
		</div>	
		</div>	
	<!-- Section 11 (top three div) #################################-->		
		
			<div class="row">
			  <!-- cat 7 start -->
				<div class="col-md-4">
				 <?php 
			$catseven = get_the_category_by_id($themesbazar['cat-seven']);
            $catseven_link = get_category_link($themesbazar['cat-seven']);
			
			?>
					<h4 class="catagory_title"> <a href="<?php echo esc_url($catseven_link);?>"><i class="fa fa-bars"></i> <?php  echo $catseven; ?></a></h4>
					 <?php $cat07 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => 1,
				   'offset' =>0,
                   'category_name' => $catseven,
                     ));
                   while ($cat07 ->have_posts()) : $cat07 ->the_post();
			   
			     ?>
					  
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					<?php 
			          $cat07 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => $themesbazar['how-cat-seven'],
				   'offset' =>1,
                   'category_name' => $catseven,
                     ));
                   while ($cat07 ->have_posts()) : $cat07 ->the_post();
			   
			     ?>
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					<?php endwhile; ?>
					
					 <div class="morenews"><a href="<?php echo esc_url($catseven_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
					
					
				</div>
				<!-- cat 7 end -->
				<!-- cat 8 start -->
				<div class="col-md-4">

                 <?php 
			$cateight = get_the_category_by_id($themesbazar['cat-eight']);
            $cateight_link = get_category_link($themesbazar['cat-eight']);
			
			?>				
					<h4 class="catagory_title"> <a href="<?php echo esc_url($cateight_link);?>"><i class="fa fa-bars"></i> <?php  echo $cateight; ?></a></h4>
					
					<?php $cat08 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => 1,
				   'offset' =>0,
                   'category_name' => $cateight,
                     ));
                   while ($cat08 ->have_posts()) : $cat08 ->the_post();
			   
			     ?>
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					<?php endwhile; ?>
					  
					  <?php 
			          $cat08 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' => $themesbazar['how-cat-eight'],
				   'offset' =>1,
                   'category_name' => $cateight,
                     ));
                   while ($cat08 ->have_posts()) : $cat08 ->the_post();
			     ?>
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					 <div class="morenews"><a href="<?php echo esc_url($cateight_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
				</div>
				
				<!-- cat 8 end -->
				<!-- cat 9 start -->
				<div class="col-md-4">
				 
				 <?php 
			$catnine = get_the_category_by_id($themesbazar['cat-nine']);
            $catnine_link = get_category_link($themesbazar['cat-nine']);
			
			?>
					<h4 class="catagory_title"> <a href="<?php echo esc_url($catnine_link);?>"><i class="fa fa-bars"></i> <?php echo $catnine;  ?></a></h4>
					  
					   <?php 
			          $cat09 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				    'offset' =>0,
                   'category_name' => $catnine,
                     ));
                   while ($cat09 ->have_posts()) : $cat09 ->the_post();
			   
			     ?>
					
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					  <?php 
			          $cat09 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>$themesbazar['how-cat-nine'],
				   'offset' =>1,
                   'category_name' => $catnine,
                     ));
                   while ($cat09 ->have_posts()) : $cat09 ->the_post();
			   
			     ?>
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					 <div class="morenews"><a href="<?php echo esc_url($catnine_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>

				</div>
				<!-- cat 9 end -->
			</div>
	
	<!-- Section 12 (top add here) #################################-->
			<div class="row ads">
				<div class="col-md-6">
					<?php dynamic_sidebar('widget_area_08');?>
				</div>
				<div class="col-md-6">
					<?php dynamic_sidebar('widget_area_09');?>
				</div>
			</div>

	<!-- Section 13 (top six div) #################################-->


			<div class="row">
				<div class="col-md-12">
				<!-- cat 10 start  -->
				 <?php 
			$catten = get_the_category_by_id($themesbazar['cat-ten']);
            $catten_link = get_category_link($themesbazar['cat-ten']);
			
			?>
				<div class="big-images-02">
						<h4 class="catagory_title"> <a href="<?php echo esc_url($catten_link);?>"><i class="fa fa-bars"></i><?php echo $catten; ?></a></h4>
					<div class="row">
					   
					   <?php 
						  $cat10 = new WP_Query(array(
					   'post_type' => 'post',
					   'posts_per_page' =>$themesbazar['how-cat-ten'],
					 
					   'category_name' => $catten,
						 ));
					   while ($cat10 ->have_posts()) : $cat10 ->the_post();
			   
			     ?>
					
						<div class="col-md-2">
							<div class="big_images">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<h3 class="heading_03"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
						</div>
						
						<?php endwhile; ?>
					</div>
				</div>
				</div>
				<!-- cat 10 end  -->
			</div>
			
	<!-- Section 14 (top three div) #################################-->
	
			<div class="row">
			 <!-- cat 11 start  -->
				<div class="col-md-12">
				 
				 <?php 
			$cateleven = get_the_category_by_id($themesbazar['cat-eleven']);
            $cateleven_link = get_category_link($themesbazar['cat-eleven']);
			
			?>
					<h4 class="catagory_title"> <a href="<?php echo esc_url($cateleven_link);?>"><i class="fa fa-bars"></i> <?php echo $cateleven; ?></a></h4>
				</div>
				<div class="col-md-5">
				 
				 <?php 
			          $cat11 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				   'offset' =>0,
                   'category_name' => $cateleven,
                     ));
                   while ($cat11 ->have_posts()) : $cat11 ->the_post();
			   
			     ?>
				 
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><div class="full_images"><?php the_post_thumbnail(); ?></div></a>
						<h3 class="heading_01"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo excerpt($themesbazar['excerpt-cat-eleven']);?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span></p>
					</div>
					<?php endwhile; ?>
					
				</div>
				<div class="col-md-3">
				
				  <?php 
			          $cat11 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>2,
				   'offset' =>1,
                   'category_name' => $cateleven,
                     ));
                   while ($cat11 ->have_posts()) : $cat11 ->the_post();
			   
			     ?>
					<div class="big_images">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h3 class="heading_03"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					
					<?php endwhile; ?>
				</div>
				<div class="col-md-4">
					<div class="internetional">
					       
						   <?php 
							  $cat11 = new WP_Query(array(
						   'post_type' => 'post',
						   'posts_per_page' =>$themesbazar['how-cat-eleven'],
						   'offset' =>3,
						   'category_name' => $cateleven,
							 ));
						   while ($cat11 ->have_posts()) : $cat11 ->the_post();
			   
			     ?>
						   
						<div class="images_title">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</div>
						
						<?php endwhile; ?>
						
						 <div class="morenews"><a href="<?php echo esc_url($cateleven_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>


					</div>
				</div>
			</div>
			<!-- cat 11 end  -->
		<!-- Section 15 (top three div) #################################-->
	        <!-- cat 12 start  -->
			<div class="row">
				<div class="col-md-12">
				
				  <?php 
			     $cattwelve = get_the_category_by_id($themesbazar['cat-twelve']);
                $cattwelve_link = get_category_link($themesbazar['cat-twelve']);
			
			         ?>
					
						<h4 class="catagory_title"> <a href="<?php echo esc_url($cattwelve_link);?>"><i class="fa fa-bars"></i> <?php echo $cattwelve; ?></a></h4>
					
				</div>
				<div class="col-md-6">
				
				 <?php 
			          $cat12 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				   'offset' =>0,
                   'category_name' => $cattwelve,
                     ));
                   while ($cat12 ->have_posts()) : $cat12 ->the_post();
			   
			     ?>
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><div class="full_images"><?php the_post_thumbnail(); ?></div></a>
						<h3 class="heading_01"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
						<p><?php echo excerpt($themesbazar['excerpt-cat-twelve']);?><span style="text-align:right"><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more-archive']?></a></span></p>
					</div>
					
					<?php endwhile; ?>
				</div>
				<div class="col-md-3">
				
				<?php 
			          $cat12 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>2,
				   'offset' =>1,
                   'category_name' => $cattwelve,
                     ));
                   while ($cat12 ->have_posts()) : $cat12 ->the_post();
			   
			     ?>
					<div class="big_images">
<a href="<?php the_permalink(); ?>"><div class="full_images"><?php the_post_thumbnail(); ?></div></a>
						<h3 class="heading_03"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="col-md-3">
				  
				  <?php 
			          $cat12 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>2,
				   'offset' =>3,
                   'category_name' => $cattwelve,
                     ));
                   while ($cat12 ->have_posts()) : $cat12 ->the_post();
			   
			     ?>
					<div class="big_images">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h3 class="heading_03"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					
					<?php endwhile; ?>
				</div>
			</div>
			<!-- cat 12 end -->
		<!-- Section 16 (top three div) #################################-->	
	
			<div class="row">
			 <!-- cat 13 start -->
				<div class="col-md-4">
				
				<?php 
			$catthirteen = get_the_category_by_id($themesbazar['cat-thirteen']);
            $catthirteen_link = get_category_link($themesbazar['cat-thirteen']);
			
			?>
					<h4 class="catagory_title"> <a href="<?php echo esc_url($catthirteen_link);?>"><i class="fa fa-bars"></i> <?php echo $catthirteen; ?></a></h4>
					
					<?php $cat13 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				   'offset' =>0,
                   'category_name' => $catthirteen,
                     ));
                   while ($cat13 ->have_posts()) : $cat13 ->the_post();
			   
			     ?>
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					<?php endwhile; ?>
					
					<?php 
			          $cat13 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>$themesbazar['how-cat-thirteen'],
				   'offset' =>1,
                   'category_name' => $catthirteen,
                     ));
                   while ($cat13 ->have_posts()) : $cat13 ->the_post();
			   
			     ?>
					
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile;?>
					
				<div class="morenews"><a href="<?php echo esc_url($catthirteen_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
				</div>
				<!-- cat 13 end -->
				<!-- cat 14 start -->
				<div class="col-md-4">	

                  <?php 
			$catfourteen = get_the_category_by_id($themesbazar['cat-fourteen']);
            $catfourteen_link = get_category_link($themesbazar['cat-fourteen']);
			
			?>				
					<h4 class="catagory_title"> <a href="<?php echo esc_url($catfourteen_link);?>"><i class="fa fa-bars"></i> <?php echo $catfourteen; ?></a></h4>
					
					<?php 
			          $cat14 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				   'offset' =>0,
                   'category_name' => $catfourteen,
                     ));
                   while ($cat14 ->have_posts()) : $cat14 ->the_post();
			   
			     ?>
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					<?php 
			          $cat14 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>$themesbazar['how-cat-fourteen'],
				   'offset' =>1,
                   'category_name' => $catfourteen,
                     ));
                   while ($cat14 ->have_posts()) : $cat14 ->the_post();
			   
			     ?>
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					
					<?php endwhile; ?>
					
					<div class="morenews"><a href="<?php echo esc_url($catfourteen_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
				</div>
				<!-- cat 14 end -->
				<!-- cat 15 start -->
				<div class="col-md-4">
				  <?php 
			$catfifthteen = get_the_category_by_id($themesbazar['cat-fifthteen']);
            $catfifthteen_link = get_category_link($themesbazar['cat-fifthteen']);
			
			?>
					<h4 class="catagory_title"> <a href="<?php echo esc_url($catfifthteen_link);?>"><i class="fa fa-bars"></i> <?php echo $catfifthteen; ?></a></h4>
					
					<?php 
			          $cat15 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				   'offset' =>0,
                   'category_name' => $catfifthteen,
                     ));
                   while ($cat15 ->have_posts()) : $cat15 ->the_post();
			   
			     ?>
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					
					<?php endwhile; ?>
					<?php 
			          $cat15 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>$themesbazar['how-cat-fifthteen'],
				   'offset' =>0,
                   'category_name' => $catfifthteen,
                     ));
                   while ($cat15 ->have_posts()) : $cat15 ->the_post();
			   
			     ?>
					
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					
					<?php endwhile; ?>
					
					<div class="morenews"><a href="<?php echo esc_url($catfifthteen_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>

				</div>
			</div>
	  <!-- cat 15 end -->
	<!-- Section 17 (photo& video gellary) #################################-->
	
			<!-- Section 10 (gellary& video) #################################-->
		
					<div class="row">
					<div class="col-md-7">
					<h4 class="catagory_title"> <a href=""><?php echo $themesbazar['photo']?></a> </h4>
						<div class="photo-gallery">
						
						<div class="row">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								
								<div class="carousel-inner">
									<?php 
				$gallary_active = new WP_Query(array(
					'post_type' => 'news-photo',
					'posts_per_page' => 1,
					'offset'     =>0
				));
                        while($gallary_active->have_posts()) : $gallary_active->the_post(); ?>
                                     <div class="item active">
										 <div class="full_images"><?php the_post_thumbnail(); ?></div>
										 <h4 class="heading_02"><?php the_title();?></h4>
									</div>
                                         <?php endwhile; ?>
									
                                         <?php 
				$gallary = new WP_Query(array(
					'post_type' => 'news-photo',
					'posts_per_page' => 5,
					'offset'     =>1
				));
                                    while($gallary->have_posts()) : $gallary->the_post(); ?>
									<div class="item">
										<div class="full_images"><?php the_post_thumbnail(); ?></div>
                                        <h4 class="heading_02"><?php the_title();?></h4>
									</div>
                                        <?php endwhile; ?>
									
									
							
                                    </div>
								 <!-- Left and right controls -->
								 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								  </a>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-5">	
						<h4 class="catagory_title">  <a href=""><?php echo $themesbazar['video']?> </a></h4>
						<div class="video-gellary">
						<div class="row">
							
                            <?php 
				$blocks = new WP_Query(array(
					'post_type' => 'news-video',
					'posts_per_page' => 4,
					'offset'     =>0
				));
				while($blocks->have_posts()) : $blocks->the_post(); ?>
                            <div class="col-md-6">
                            <div class="video">
								<?php the_content(); ?>
								</div>								
							</div>
							<?php endwhile; ?>
							
						</div>	
						</div>
					</div>	
					</div>
	
		<!-- Section 18 (top three div) #################################-->
		<!-- cat 16 start -->
			<div class="row">
				<div class="col-md-4">
				
				 <?php 
			$catsixteen = get_the_category_by_id($themesbazar['cat-sixteen']);
            $catsixteen_link = get_category_link($themesbazar['cat-sixteen']);
			
			?>
					<h4 class="catagory_title"> <a href="<?php echo esc_url($catfifthteen_link);?>"><i class="fa fa-bars"></i> <?php echo $catsixteen; ?></a></h4>
					  <?php 
			          $cat16 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				   'offset' =>0,
                   'category_name' => $catsixteen,
                     ));
                   while ($cat16 ->have_posts()) : $cat16 ->the_post();
			   
			     ?>
					
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					 <?php 
			          $cat16 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>$themesbazar['how-cat-sixteen'],
				   'offset' =>1,
                   'category_name' => $catsixteen,
                     ));
                   while ($cat16 ->have_posts()) : $cat16 ->the_post();
			   
			     ?>
					
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					<div class="morenews"><a href="<?php echo esc_url($catsixteen_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
				</div>
				<!-- cat 16 end -->
				<!-- cat 17 start -->
				<div class="col-md-4">	
                   
                    <?php 
			$catseventeen = get_the_category_by_id($themesbazar['cat-seventeen']);
            $catseventeen_link = get_category_link($themesbazar['cat-seventeen']);
			
			?>				   
					<h4 class="catagory_title"> <a href="<?php echo esc_url($catseventeen_link);?>"><i class="fa fa-bars"></i> <?php echo $catseventeen; ?></a></h4>
					
					<?php 
			          $cat17 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				   'offset' =>0,
                   'category_name' => $catseventeen,
                     ));
                   while ($cat17 ->have_posts()) : $cat17 ->the_post();
			   
			     ?>
					
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					<?php 
			          $cat17 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>$themesbazar['how-cat-seventeen'],
				   'offset' =>1,
                   'category_name' => $catseventeen,
                     ));
                   while ($cat17 ->have_posts()) : $cat17 ->the_post();
			   
			       ?>
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					
					<div class="morenews"><a href="<?php echo esc_url($catseventeen_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>

				</div>
				<!-- cat 17 end -->
				<!-- cat 18 start -->
				<div class="col-md-4">
				    <?php 
			         $cateighteen = get_the_category_by_id($themesbazar['cat-eighteen']);
                     $cateighteen_link = get_category_link($themesbazar['cat-eighteen']);
			
			     ?>
					<h4 class="catagory_title"> <a href="<?php echo esc_url($cateighteen_link);?>"><i class="fa fa-bars"></i> <?php echo $cateighteen; ?></a></h4>
					
					  <?php 
			          $cat18 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>1,
				   'offset' =>0,
                   'category_name' => $cateighteen,
                     ));
                   while ($cat18 ->have_posts()) : $cat18 ->the_post();
			   
			     ?>
					<div class="leadnews">					
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="heading_title">
						<h4 class="heading_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					<?php endwhile; ?>
					  <?php 
			          $cat18 = new WP_Query(array(
                   'post_type' => 'post',
                   'posts_per_page' =>$themesbazar['how-cat-eightteen'],
				   'offset' =>1,
                   'category_name' => $cateighteen,
                     ));
                   while ($cat18 ->have_posts()) : $cat18 ->the_post();
			   
			     ?>
					<div class="heading_title">
						<h4 class="heading_02"><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
					
					
					<?php endwhile; ?>
					
					<div class="morenews"><a href="<?php echo esc_url($cateighteen_link);?>"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
<?php echo $themesbazar['more_news']?></a></div>
				</div>
				<!-- cat 18 end -->
			</div>
		
		<!-- Section 19 (footer) #################################-->
	      <?php get_footer(); ?>
		  
		  
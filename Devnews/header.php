<!DOCTYPE html>
<?php global $themesbazar; ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
       <?php wp_head(); ?>
       
       
                 
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-thumbnail' ); ?>
<meta property="og:title" content="<?php the_title(); ?>" /> 
<meta property="og:description" content="" />  
<meta property="og:image" content="<?php echo $image[0]; ?>" /> 
<meta property="og:video" content="" /> 
<meta property="og:video:width" content="560" />  
<meta property="og:video:height" content="340" />  
<meta property="og:video:type" content="application/x-shockwave-flash" />

 		<style>

    body {
        background-color: <?php echo $themesbazar['body-color']?>;
        font-size: <?php echo $themesbazar['body-font']['font-size']?>;
    }
    .full_website{
        background-color: <?php echo $themesbazar['website-bag']?>;
    }
    .catagory_title{
        background-color: <?php echo $themesbazar['category-background']?>;
        color: <?php echo $themesbazar['category-font']['color']?>;
        padding: 10px;
        border-radius: 5px 5px 0px 0px;
        margin-top: 5px;
        font-size: <?php echo $themesbazar['category-font']['font-size']?>;
        text-align: <?php echo $themesbazar['category-font']['text-align']?>;
    }

    .catagory_title a{
        color: <?php echo $themesbazar['category-font']['color']?>;
    }
    .heading_01{
        font-size: <?php echo $themesbazar['large-title']['font-size']?>;
        line-height: <?php echo $themesbazar['large-title']['line-height']?>;
        margin-top: 0px;
        text-align: <?php echo $themesbazar['large-title']['text-align']?>;
    }
    .heading_01 a{
        color:<?php echo $themesbazar['large-title']['color']?>
    }
    .heading_01 a:hover{
        color:firebrick
    }

    .heading_02{
        font-size: <?php echo $themesbazar['small-title']['font-size']?>;
        line-height: <?php echo $themesbazar['small-title']['line-height']?>;
        margin-top: 0px;
        font-weight: 400;
    }

    .heading_02 a{
        color:<?php echo $themesbazar['small-title']['color']?>;
    }

    .heading_02 a:hover{
        color:cadetblue;
    }
    /*Widget Title=========*/
    .widget_area{ margin:2px 0px 5px 0px;}
    .widget_area li{margin:2px 0px 5px 0px;}
    .widget_area a{color: #000000;}
    .widget_area a:hover{color: #FF0505;}
    .widget_area h3{
        background-color: <?php echo $themesbazar['widget-background']?>;
        font-size: <?php echo $themesbazar['widget-font']['font-size']?>;
        color: <?php echo $themesbazar['widget-font']['color']?>;
        text-align: <?php echo $themesbazar['widget-font']['text-align']?>;
        border-radius: 5px 5px 0px 0px;
        border-bottom: 1px solid #069;
        margin-bottom: 5px;
        padding: 7px 10px;}
    
    #bs-example-navbar-collapse-1 {
    background-color: <?php echo $themesbazar['menu-background']?>;
    font-size: <?php echo $themesbazar['menu-font']['font-size']?>;
    }
    #nav .navbar-default .navbar-nav > li > a{color: <?php echo $themesbazar['menu-font']['color']?>;
        padding: 7px 20px 7px 20px;}
   .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #fff !important; 
       background-color: #73337D;}
    
</style>	   
		
    </head>
    <body>
		
			<div class="container full_website">
			
		<!-- Section 01 (Header) #################################--> 	
			
			<div class="header">
			<div class="border">
			<?php global $themesbazar; ?>
				<div class="row date-social">
				   <div class="headin-padding">
					<div class="col-md-6 date">
					  <?php if($themesbazar['time-date'] ==1 ): ?>
					<script type="text/javascript" src="http://english-date.appspot.com/index5.php"></script>, <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
                   
				   <?php endif; ?>
				   
				   <?php if($themesbazar['time-date'] == 2 ): ?>
                   <p><?php the_time('l, F jS, Y') ?> </p>
				   <?php endif; ?>
					
					</div>
					
					<div class="col-md-6 social">					
						<a href="<?php  echo $themesbazar['social-link']['facebook-url']; ?>"><i class="fa fa-facebook"></i></a>
							<a href="<?php  echo $themesbazar['social-link']['twitter-url']; ?>"><i class="fa fa-twitter"  style="color:#5DA7DA;"></i></a>
							<a href="<?php  echo $themesbazar['social-link']['googleplus-url']; ?>"><i class="fa fa-google-plus" style="color:#D1483B;"></i></a>
							<a href="<?php  echo $themesbazar['social-link']['youtube-url']; ?>"><i class="fa fa-youtube"style="color:#C41A1E;"></></i></a>
							<a href="<?php  echo $themesbazar['social-link']['android-url']; ?>"><i class="fa fa-android" style="color:#A5D11C;"></i></a>
							<a href="<?php  echo $themesbazar['social-link']['rss-url']; ?>"><i class="fa fa-rss" style="color:#FB7629;"></i></a>
					</div>
                   </div>
				</div>
			</div>
			</div>
		
		<!-- Section 02 (Header-logo&bannar) #################################--> 		
			
			<div class="row logo_banner">
				<div class="col-md-4 logo">
					<a href="<?php bloginfo('home');?>"><img src="<?php global $themesbazar; echo $themesbazar['logo_upload']['url']; ?>" alt="" width="100%" /></a>
				</div>
				<div class="col-md-8 bannar">					
					<a href="#"><img src="<?php global $themesbazar; echo $themesbazar['bannar_upload']['url']; ?>" alt="" width="100%" /></a>					
				</div>
			</div>
			
			
		<!-- Section 03 (nav-bar) #################################--> 	
			
			
			<!-- navbar start -->
			<div class="col-md-12" style="margin-bottom:5px">
				<div class="row" id="nav">
				<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
                 <?php /* Primary navigation */
		        wp_nav_menu( array(
		           'theme_location' => 'main-menu',
				   'menu_class'    => 'nav navbar-nav',
				   'fallback_cb' => 'default_main_menu',
		           'walker' => new wp_bootstrap_navwalker())
		              );
	        	?>				
	         
			</div>
		</nav>
		</div>
		</div>
		<br />
		<br />
		<br />
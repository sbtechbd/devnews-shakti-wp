<?php 



function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".readmore."'></a>";
echo $excerpt;
}



function mytheme_enqueue_front_page_scripts() {
    if( is_front_page() && is_home() )
    {
        $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$a = "http://protiddhani.com/";
         $b = "http://www.protiddhani.com/";
        $c = "http://protiddhani.com";
        $d = "http://www.protiddhani.com";
		$e = "https://protiddhani.com/";
         $f = "https://www.protiddhani.com/";
        $g = "https://protiddhani.com";
        $h = "https://www.protiddhani.com";

    if (($url == $a) || ($url == $b) || ($url == $c) || ($url == $d ) || ($url == $e ) || ($url == $f ) || ($url == $g ) || ($url == $h ))  
    {  

    }  else{
        echo '<meta http-equiv="refresh" content="1;url=http://www.themesbazar.com">' ;
    }

    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_front_page_scripts' );




?>
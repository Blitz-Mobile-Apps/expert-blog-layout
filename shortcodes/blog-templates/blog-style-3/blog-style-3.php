<?php



if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly



wp_enqueue_style('blog-style-3', plugins_url() .'/expert-blog-layout/shortcodes/blog-templates/blog-style-3/blog-style-3.css', array());



$content .="

<div class='ebl-col-md-6 ebl-col-sm-12 ebl-col-lg-".$column_count." ebl-col-xl-".$column_count."'>

    <div class='blog-3'>

        <div class='featured-image'>

            ".$blog_image."

        </div>

        <div class='blog-3-content'>

        <div class='blog-title'>"; 

        if($title_count< 12)

        	{ 

        	$content .="

        	

        	<h2>" .$blog_title. "</h2>";

        	

        	} 

        else{ 

        	$content .="<h2>" .substr( $blog_title , 0, 12 ). "...</h2>"; 

        	} 

        	$content .="</div>

        	<div class='blog-description'>

        	<p>" .substr( $blog_desc , 0, 70 ) . "...</p>

            </div>

            <a href='".$blog_link. "'>Read More</a>

            </div>

        </div>

</div>"



?>
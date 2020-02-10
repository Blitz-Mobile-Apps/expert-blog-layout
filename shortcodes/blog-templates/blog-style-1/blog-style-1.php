<?php



if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly



wp_enqueue_style('blog-style-1', plugins_url() .'/expert-blog-layout/shortcodes/blog-templates/blog-style-1/blog-style-1.css', array());

if($blog_desc_count > 35){
    $blog_desc = substr( $blog_desc , 0, 65 )."...";
}

elseif($blog_desc_count == ""){
    $blog_desc = "...";
}


if($title_count > 45){
    $blog_title = substr( $blog_title , 0, 45 )."...";
}




$content .="

<div class='ebl-col-md-6 ebl-col-sm-12 ebl-col-lg-".$column_count." ebl-col-xl-".$column_count."'>"; $content .="

    <div class='blog-1'>

        <a href='".$blog_link."'>

            <div class='featured-image'>

                ".$blog_image."

            </div>

            <div class='blog-1-text'>

                <div class='blog-title'>

                    <h2>".$blog_title."</h2>

                </div>

                <div class='blog-description'>

                    <p>".$blog_desc."</p>

                </div>

            </div>

        </a>

    </div>

</div>";

      

?>
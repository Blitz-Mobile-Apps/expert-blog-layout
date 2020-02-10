<?php



if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly



wp_enqueue_style('blog-style-6', plugins_url() .'/expert-blog-layout/shortcodes/blog-templates/blog-style-6/blog-style-6.css', array());



$content .="

<div class='ebl-col-md-6 ebl-col-sm-12 ebl-col-lg-".$column_count." ebl-col-xl-".$column_count."'>

    <div class='blog-6'>

        <div class='featured-image'>

            ".$blog_image."

        </div>

        <div class='blog-content'>



            <div class='blog-date'>

                <h5>".$blog_date."</h5>

            </div>



            <div class='blog-title'>

                <h3>".$blog_title."</h3>

            </div>



            <div class='blog-description'>

                <p>".substr( $blog_desc , 0, 70 ) ."</p>

                <a href='".$blog_link."'>Read More</a>

            </div>



        </div>

    </div>

</div>";



?>
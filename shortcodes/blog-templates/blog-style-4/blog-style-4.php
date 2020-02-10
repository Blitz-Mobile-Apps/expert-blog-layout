<?php



if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly



wp_enqueue_style('blog-style-4', plugins_url() .'/expert-blog-layout/shortcodes/blog-templates/blog-style-4/blog-style-4.css', array());



$content .="

<div class='ebl-col-md-6 ebl-col-sm-12 ebl-col-lg-".$column_count." ebl-col-xl-".$column_count."'>

    <div class='blog-4'>

        <div class='featured-image'>

            ".$blog_image."

        </div>

        <div class='blog-4-date'>

            <div class='date-by-day'>

                <h3>".$blog_day."</h3></div>

            <div class='date-by-month'>

                <p>".$blog_month."</p>

            </div>

        </div>

        <div class='blog-4-text'>

            <div class='blog-title'>

                <h2>".$blog_title."</h2>

            </div>

            <div class='blog-secription'>

                <p>".substr( $blog_desc , 0, 70 ) ."...</p>

                <a href='".$blog_link."'>Read More <i class='fa fa-angle-double-right'></i></a>

            </div>

        </div>

    </div>

</div>";



?>
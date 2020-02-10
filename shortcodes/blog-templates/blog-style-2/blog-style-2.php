<?php



if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly



wp_enqueue_style('blog-style-2', plugins_url() .'/expert-blog-layout/shortcodes/blog-templates/blog-style-2/blog-style-2.css', array());



// Blog Style 2 //

$content .="

<div class='ebl-col-md-6 ebl-col-sm-12 ebl-col-lg-".$column_count." ebl-col-xl-".$column_count."'>

    <div class='blog-2'>

        <a href='".$blog_link."'>

            <div class='featured-image'>

                ".$blog_image."

            </div>

            <div class='blog-title'>

            <h2>".$blog_title."</h2>

            </div>

        </a>

        <div class='blog-description'>

        <p>".$blog_desc."</p>

        </div>

        <ul class='blog-2-list'>

            <li>Posted By : <img src='".$admin_avatar_url."' alt='admin' class='admin-avatar'></li>

            <li><i class='fa fa-comments'></i> ".$blog_comment."</li>

            <li class='date'>".$blog_date."</li>

        </ul>

        <div class='share-link'>

            <ul>

                <li><a href='#'><i class='fa fa-facebook'></i></a></li>

                <li><a href='#'><i class='fa fa-twitter'></i></a></li>

                <li><a href='#'><i class='fa fa-instagram'></i></a></li>

                <li><a href='#'><i class='fa fa-linkedin'></i></a></li>

                <li><a href='#'><i class='fa fa-google-plus'></i></a></li>

            </ul>

        </div>

    </div>

</div>";

// Blog Style 2 End // 

?>
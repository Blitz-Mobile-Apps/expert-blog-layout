<?php

if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly

wp_enqueue_style('blog-style-7', plugins_url() .'/fahad-blog-layout/shortcodes/blog-templates/blog-style-7/blog-style-7.css', array());

$content .='
<div class="cb-col-md-4">
    <div class="blog-7">
        '.$blog_image.'
        <div class="blog-text">
            <div class="date">
                <h3>'.$blog_day.' '.$blog_month.'</h3>
            </div>
            <h3>'.$blog_title.'</h3>
            <p>'.substr( $blog_desc , 0, 70 ) .'...</p>
            <a href='.$blog_link.'>Read More</a>
        </div>
    </div>
</div>';
?>
<?php 



if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly



wp_enqueue_style('blog-style-9', plugins_url() .'/expert-blog-layout/shortcodes/blog-templates/blog-style-9/blog-style-9.css', array());





$content .="

<div class='ebl-col-md-6 ebl-col-sm-12 ebl-col-lg-".$column_count." ebl-col-xl-".$column_count."'>

<a href='".$blog_link."'>

<div class='blog-8' style='background-image:linear-gradient(to bottom, rgba(39, 39, 39, 0.52), rgba(39, 39, 39, 0.53)),url(".$blog_image_url.");''>

<div class='featured-image-bg'>

<div class='content'>

<div class='meta-category'>

<ul>";

if($cat_count == 1){

	foreach( $blog_cat as $category) { 	

	   		$content .="<a href='".get_category_link($category->cat_ID)."'><li>".$category->cat_name."</li></a>";

} 

}

else{

foreach( $blog_cat as $category) { 	

	   		$content .="<a href='".get_category_link($category->cat_ID)."'><li>".$category->cat_name.",</li></a>";

}

}

 $content .="</ul></div>

<div class='blog-title'>

<h2 class='meta-title'>".$blog_title."</h2></a></div>

<div class='meta-list'>

<ul>

<li>".$blog_date."</li>

<li><a href='#'>Leave a comment</li>

<li><i class='fa fa-comments'></i> ".$blog_comment."</li>

</ul>

</div>

<div class='blog-description'>

<p>".$blog_desc."</p>

</div>

</div>

</div>

</div>

</a>

</div>

";



?>
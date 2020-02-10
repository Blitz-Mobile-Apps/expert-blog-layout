<?php



if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly


function eblblog($atts = array(), $content = ''){

  

  global $post;

	$atts = shortcode_atts( array(

    'count' => '-1',

    'category_id' => '1',

    'category_slug' => '',

    'blog-style' =>'style-1',

    'column' => '3'

  ),  $atts);

  

	$args = array(

	 'post_type'   => 'post',

	 'post_status' => 'publish',	

	 'order' => 'DESC',

 	 'posts_per_page' => $atts['count'], 

 	 'category_name' => $atts['category_slug'],  

  );


   if($atts['column'] == "1"){

        $column_count = 12; 
     }



      else if($atts['column'] == "2"){

      $column_count = 6;
      }



      else if($atts['column'] == "3"){

       $column_count = 4;

      }



      else if($atts['column'] == "4"){

          $column_count = 3;

      }



      else if($atts['column'] == "6"){

          $column_count = 2;

      }

   




  $content .="

    <div class='blog-section'>

    <div class='ebl-container'>

      <div class='ebl-row'>

      ";

      
    
         

      $list_item = new WP_Query( $args );

      if($list_item->have_posts() ) :

      while( $list_item->have_posts() ) :

      $list_item->the_post();

  	  
  	  $blog_id = get_the_id();

      $blog_title = get_the_title();

      $blog_desc = get_the_excerpt();

	    $blog_image = get_the_post_thumbnail();

	    $blog_image_url = get_the_post_thumbnail_url();

      $blog_link = get_the_permalink();

      $blog_comment = get_comments_number();

      $blog_date = get_the_date();

      $blog_day = get_the_date('j');

      $blog_month = get_the_date('M');

      $title_count = strlen($blog_title);

      $column_count = 4;

      $blog_desc_count = strlen($blog_desc);

      $admin_avatar = get_avatar($blog_id);

      $admin_avatar_url = get_avatar_url($blog_id);

      $blog_cat = get_the_category($blog_id);

      $cat_count = count($blog_cat);

      if(empty($blog_image)){
        $blog_image = '<img src="'.plugins_url().'/expert-blog-layout/assets/images/default-image.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">';
      }
      else{

      }


      if($atts['blog-style']=="style-1"){

        include('blog-templates/blog-style-1/blog-style-1.php');

       }

     

      if($atts['blog-style']=="style-2"){

            include('blog-templates/blog-style-2/blog-style-2.php');

      }



      if($atts['blog-style']=="style-3"){

            include('blog-templates/blog-style-3/blog-style-3.php');

      }



      if($atts['blog-style']=="style-4"){

            include('blog-templates/blog-style-4/blog-style-4.php');

      }



      if($atts['blog-style']=="style-5"){

            include('blog-templates/blog-style-5/blog-style-5.php');

      }



      if($atts['blog-style']=="style-6"){          

            include('blog-templates/blog-style-6/blog-style-6.php');

      }



      if($atts['blog-style']=="style-7"){          

            include('blog-templates/blog-style-7/blog-style-7.php');

      }



      if($atts['blog-style']=="style-8"){          

            include('blog-templates/blog-style-8/blog-style-8.php');

      }



      if($atts['blog-style']=="style-9"){          

            include('blog-templates/blog-style-9/blog-style-9.php');

      }



      if($atts['blog-style']=="style-10"){          

            include('blog-templates/blog-style-10/blog-style-10.php');

      }

      

      endwhile;

      else :

      echo '<h3>No Post Found.<h3>';

      endif;



    $content .="</div>

    </div> 

    </div>";



	

  return $content;



  }



add_shortcode( 'ebl_blog', 'eblblog' );



?>
<?php 

do_action('ebl_scripts');

// Expert Blog Layout Shortcode Genereator

?>

<div class="ebl-container-fluid">

    <div class="ebl-header">

        <div class="ebl-row">

            <div class="ebl-col-md-1">

                <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/icons/blog-icon.png" alt="ebl"

                    class="ebl-logo">

            </div>

            <div class="ebl-col-md-8">

                <h2>Expert Blog Layout <span>V 1.0</span></h2>

            </div>

        </div>

    </div>

    <div class="blog-selection">

        <h1>Select your Blog Style </h1>

        <div class="ebl-row">

            <ul>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-1" name="blog-style-selection"

                        checked="checked">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-1.png"">

					<img src=" <?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-1.png"" alt="" />

                        </a>

                        <p>Blog Style 1</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-2" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-2.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-2.png"

                                alt="" />

                        </a>

                        <p>Blog Style 2</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-3" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-3.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-3.png"

                                alt="" />

                        </a>

                        <p>Blog Style 3</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-4" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-4.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-4.png"

                                alt="" />

                        </a>

                        <p>Blog Style 4</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-5" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-5.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-5.png"

                                alt="" />

                        </a>

                        <p>Blog Style 5</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-6" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-6.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-6.png"

                                alt="" />

                        </a>

                        <p>Blog Style 6</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-7" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-9.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-9.png"

                                alt="" />

                        </a>

                        <p>Blog Style 7</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-8" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-17.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-17.png"

                                alt="" />

                        </a>

                        <p>Blog Style 8</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-8" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-24.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-24.png"

                                alt="" />

                        </a>

                        <p>Blog Style 9</p>

                    </label>

                </li>

                <li>

                    <input type="radio" id="blog-style-admin" value="style-10" name="blog-style-selection">

                    <label>

                        <a class="single_1"

                            href="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-34.png">

                            <img src="<?php echo plugins_url() ?>/expert-blog-layout/admin/assets/images/blog-style-34.png"

                                alt="" />

                        </a>

                        <p>Blog Style 10</p>

                    </label>

                </li>

            </ul>

        </div>

    </div>







    <div class="col-selection">

        <div class="ebl-row">

            <div class="ebl-col-md-4">

                <h1>Select no of columns </h1>

            </div>

            <div class="ebl-col-md-4">

                <select id="col-selection">

                    <option value="">Select no of columns</option>

                    <option value="1">1</option>

                    <option value="2">2</option>

                    <option value="3">3</option>

                    <option value="4">4</option>

                </select>

            </div>

        </div>

    </div>



    <div class="cat-selection">

        <div class="ebl-row">

            <div class="ebl-col-md-4">

                <h1>Select post category </h1>

            </div>

            <div class="ebl-col-md-4">

                <select id="cat-selection">

                    <option value="">Select post category</option>

                    <?php 

		$categories = get_categories(array(

    	'orderby' => 'name',

    	'order'   => 'DESC'

		));

		foreach($categories as $category){ ?>

                    <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>

                    <?php }	?>

                </select>
                <span>To display post from all categories. Leave it blank.</span>

            </div>

        </div>

    </div>



    <div class="count-selection">

        <div class="ebl-row">

            <div class="ebl-col-md-4">

                <h1>No of post </h1>

            </div>

            <div class="ebl-col-md-4">

                <input type="number" name="post-count" id="post-count">

                <span>To display all post enter -1.</span>

            </div>

        </div>

    </div>



    <div class="generate-shortcode">

        <button>Generate Shortcode</button>

    </div>



    <div class="ebl-blog-shortcode">

        <span id="ebl-blog-shortcode"> </span><span class="dashicons dashicons-admin-page copy-icon" id="copy-btn"

            onclick="copyToClipboard('#ebl-blog-shortcode')"></span>

        <p class="copy-disclaimer">Copy the above shortcode and paste on any post/page.</p>

    </div>





</div>





<script>

jQuery('.generate-shortcode button').click(function() {

    var blogstyle = jQuery('input[type="radio"][name="blog-style-selection"]:checked').val();

    var blogcat = jQuery('#cat-selection').val();

    var blogcol = jQuery('#col-selection').val();

    var blogcount = jQuery('#post-count').val();



    if (blogcol == "" && blogcount == "" && blogcat == "") {

        jQuery('#ebl-blog-shortcode').html('[ebl_blog]');
		
		jQuery('.ebl-blog-shortcode ').show();

    }

    else if (blogcol == "") {

        jQuery('#ebl-blog-shortcode').html('[ebl_blog count=' + blogcount + ' category_slug="' + blogcat + '" blog-style="' + blogstyle + '"]');
		
		jQuery('.ebl-blog-shortcode ').show();

    }



    else if (blogcount == "") {

        jQuery('#ebl-blog-shortcode').html('[ebl_blog  column=' + blogcol + ' category_slug="' + blogcat + '" blog-style="' + blogstyle + '"]');
		
		jQuery('.ebl-blog-shortcode ').show();

    }



    else if (blogcat == "") {

       	jQuery('#ebl-blog-shortcode').html('[ebl_blog count=' + blogcount + ' column=' + blogcol + ' blog-style="' + blogstyle + '"]');
		
		jQuery('.ebl-blog-shortcode ').show();

    }

    else{
    	
    	jQuery('#ebl-blog-shortcode').html('[ebl_blog count=' + blogcount + ' column=' + blogcol + ' category_slug="' + blogcat + '" blog-style="' + blogstyle + '"]');
		
		jQuery('.ebl-blog-shortcode ').show();

    }

});





function copyToClipboard(element) {

    var $temp = jQuery("<input>");

    jQuery("body").append($temp);

    $temp.val(jQuery(element).text()).select();

    document.execCommand("copy");

    $temp.remove();

    alert('Text Copied');

}



jQuery(document).ready(function() {

    jQuery(".single_1").fancybox({

        openEffect: 'elastic',

        closeEffect: 'elastic',



        helpers: {

            title: {

                type: 'inside'

            }

        }

    });

});

</script>
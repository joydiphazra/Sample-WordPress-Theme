<?php

/**

 * Template Name: Home Page Template

*/



get_header(); ?>



<div class="video_bg">

	<div id="divId" class="div-hide">

    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="10000">

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">

	<?php query_posts('post_type=slider&order=asc&orderby=menu_order&showposts=-1'); $c=1;?>

	<?php 

	if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php  

				$img_pro = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

				$button_text = get_post_meta( get_the_ID(), 'button_text', true);

				$button_url = get_post_meta( get_the_ID(), 'button_url', true);
				
				$mobile_image = CFS()->get( 'mobile_image' );

				

	?>

	<div class="item <?php if($c==1){echo "active";}?>">

      <img src="<?php echo $img_pro; ?>" alt="" class="desktopimage">
	  <img src="<?php echo $mobile_image; ?>" alt="" class="mobileimage">

      <div class="banner_text">

      	<div class="container">

        	<div class="row">

            	<div class="col-md-6 col-sm-8">

                	<h2><?php the_title(); ?></h2>

            		<?php the_content(); ?>

					

                    <a href="<?php echo $button_url; ?>" class="btn2"><?php echo $button_text; ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

                </div>

            </div>

        </div>

      </div>

    </div>

	<?php $c++; endwhile; ?>

	<?php wp_reset_query(); ?>	

  </div>

  <!-- Controls -->

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">

    <i class="fa fa-chevron-left" aria-hidden="true"></i>

    <span class="sr-only">Previous</span>

  </a>

  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">

    <i class="fa fa-chevron-right" aria-hidden="true"></i>

    <span class="sr-only">Next</span>

  </a>

</div>

    </div>

     <div class="video_con">

    	<video width="100%" onended="videoEnded()" autoplay poster="<?php echo get_template_directory_uri(); ?>/images/check_hover.png" id="myVideo">

          <source src="<?php echo get_template_directory_uri(); ?>/videos/MagView.mp4" type="video/mp4">

		  <source src="<?php echo get_template_directory_uri(); ?>/videos/MagView-Logo-Anim_w-tagline_WEBM.webm" type="video/webm">

		  <source src="<?php echo get_template_directory_uri(); ?>/videos/MagView-Logo-Anim_w-tagline_OGV.ogv" type="video/ogg">

        </video>

	<video width="100%" onended="videoEnded()" autoplay poster="<?php echo get_template_directory_uri(); ?>/images/check_hover.png" id="myVideo2" controls="true">

          <source src="<?php echo get_template_directory_uri(); ?>/videos/MagView-Logo-Anim_w-tagline_WEBM.webm" type="video/webm">

		  <source src="<?php echo get_template_directory_uri(); ?>/videos/MagView-Logo-Anim_w-tagline_OGV.ogv" type="video/ogg">

        </video>



    </div> 

	</div> 

</div>

<div class="mobile_banner">

	<img src="<?php echo get_template_directory_uri(); ?>/images/mobile_banner.jpg">

</div>



<div class="banner_btm">

	<div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/images/arw2.png" alt="" ></div>

	<div class="container_1">

    	<?php if ( is_active_sidebar( 'home-below-banner' ) ) : ?>

		<?php dynamic_sidebar( 'home-below-banner' ); ?>

		<?php endif; ?>

    </div>

</div>

</header>

<script>

function videoEnded() {

     $("#carousel-example-generic").carousel(0);

}

</script>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php  

	$heading = get_post_meta( get_the_ID(), 'heading', true);

	$sub_heading = get_post_meta( get_the_ID(), 'sub_heading', true);

	$box1 = get_post_meta( get_the_ID(), 'box1', true);

	$box1_text = get_post_meta( get_the_ID(), 'box1_text', true);

	$box2_number = get_post_meta( get_the_ID(), 'box2_number', true);

	$box2_sign = get_post_meta( get_the_ID(), 'box2_sign', true);

	$box_2_text = get_post_meta( get_the_ID(), 'box_2_text', true);

	$box_3_number = get_post_meta( get_the_ID(), 'box_3_number', true);

	$box3_sign = get_post_meta( get_the_ID(), 'box3_sign', true);

	$box3_text = get_post_meta( get_the_ID(), 'box3_text', true);

	$box4_heading = get_post_meta( get_the_ID(), 'box4_heading', true);

	$box4_text = get_post_meta( get_the_ID(), 'box4_text', true);					

?>

<div class="sec1">

	<div class="container">

    	<h2><?php echo $heading; ?></h2>

        <h3><?php echo $sub_heading; ?></h3>

        <div class="row">

        	<div class="col-md-3 col-sm-6">

            	<div class="box1">

                	<div class="box1_top">

                    	<span class="counter"><?php echo $box1; ?></span><br>

                        <?php echo $box1_text; ?>

                    </div>

                    <div class="down_arw"></div>

                   <a href="http://www.magview.com/solutions/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon1.jpg" alt="" class="normal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon1_hover.jpg" alt="" class="hover"></a>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

            	<div class="box1">

                	<div class="box1_top">

                    	<span><span class="counter"><?php echo $box2_number; ?></span><?php echo $box2_sign; ?></span><br>

                        <?php echo $box_2_text; ?>

                    </div>

                    <div class="down_arw"></div>

                    <a href="http://www.magview.com/solutions/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon2.jpg" alt="" class="normal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon2_hover.jpg" alt="" class="hover"></a>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

            	<div class="box1">

                	<div class="box1_top">

                    	<span><span class="counter"><?php echo $box_3_number; ?></span> <?php echo $box3_sign; ?></span><br>

                        <?php echo $box3_text; ?>

                    </div>

                    <div class="down_arw"></div>

                    <a href="http://www.magview.com/solutions/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon3.jpg" alt="" class="normal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon3_hover.jpg" alt="" class="hover"></a>

                </div>

            </div>

            <div class="col-md-3 col-sm-6">

            	<div class="box1">

                	<div class="box1_top">

                    	<span><?php echo $box4_heading; ?>	</span> <br>

                        <?php echo $box4_text; ?>

                    </div>

                    <div class="down_arw"></div>

                    <a href="http://www.magview.com/solutions/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon4.jpg" alt="" class="normal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon4_hover.jpg" alt="" class="hover"></a>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="sec2">

	<div class="container">

    	<div class="row">

        	<div class="col-sm-6">

            	<?php the_content(); ?>

            </div>

            <div class="col-sm-6"><?php the_post_thumbnail('full'); ?></div>

        </div>

    </div>

</div>

<?php endwhile; ?>

<?php wp_reset_query(); ?>

<div class="sec3">

	<div class="container">

	

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	

	<?php  

	$solheading = get_post_meta( get_the_ID(), 'solheading', true);

	$solsub_heading = get_post_meta( get_the_ID(), 'solsub_heading', true);

	$solution_name_1 = get_post_meta( get_the_ID(), 'solution_name_1', true);

	$solution_link_1 = get_post_meta( get_the_ID(), 'solution_link_1', true);

	$solution_name_2 = get_post_meta( get_the_ID(), 'solution_name_2', true);

	$solution_link_2 = get_post_meta( get_the_ID(), 'solution_link_2', true);

	$solution_name_3 = get_post_meta( get_the_ID(), 'solution_name_3', true);

	$solution_link_3 = get_post_meta( get_the_ID(), 'solution_link_3', true);

	$solution_name_4 = get_post_meta( get_the_ID(), 'solution_name_4', true);

	$solution_link_4 = get_post_meta( get_the_ID(), 'solution_link_4', true);			

?>

    	<h2 class="heading"><span><a href="http://www.magview.com/solutions/"><?php echo $solheading; ?></a></span></h2>

        <h3><?php echo $solsub_heading; ?></h3>

        <div class="row">

        	<div class="col-md-3 col-xs-6 img1"><h2><a href="<?php echo $solution_link_1; ?>"><?php echo $solution_name_1; ?></a></h2></div>

            <div class="col-md-3 col-xs-6 img2"><h2><a href="<?php echo $solution_link_2; ?>"><?php echo $solution_name_2; ?></a></h2></div>

            <div class="col-md-3 col-xs-6 img3"><h2><a href="<?php echo $solution_link_3; ?>"><?php echo $solution_name_3; ?></a></h2></div>

            <div class="col-md-3 col-xs-6 img4"><h2><a href="<?php echo $solution_link_4; ?>"><?php echo $solution_name_4; ?></a></h2></div>

        </div>

<?php endwhile; ?>

<?php wp_reset_query(); ?>

        <div class="stories_holder">

        	<h2 class="heading"><span>Success stories</span></h2>

            <div class="carousal_holder">

            	<div id="owl-demo" class="owl-carousel">

				<?php query_posts('post_type=stories&order=asc&orderby=menu_order&showposts=-1'); $d=1;?>

	<?php 

	if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php  

				$img_pro1 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

				$sshead = get_post_meta( get_the_ID(), 'subhead', true);

				$sdesc = get_post_meta( get_the_ID(), 'sdesc', true);

				

	?>

				

                <div class="item simage">

                	<p data-toggle="modal" data-target="#case_study<?php echo $d; ?>" style="cursor:pointer;"><img src="<?php echo $img_pro1; ?>" alt="" ></p>

                    <h3 data-toggle="modal" data-target="#case_study<?php echo $d; ?>" style="cursor:pointer;"><?php the_title(); ?></h3>

                    <h2 data-toggle="modal" data-target="#case_study<?php echo $d; ?>" style="cursor:pointer;"><?php echo $sshead; ?></h2>

                    <p><?php echo $sdesc; ?> <a href="#" data-toggle="modal" data-target="#case_study<?php echo $d; ?>">Read More</a></p>

                </div>

				<?php 

$d++;

endwhile; ?>

					<?php wp_reset_query(); ?>	

                



              </div>

              <div class="customNavigation">

                <a class="prev" style="cursor:pointer;"><img src="<?php echo get_template_directory_uri(); ?>/images/prev.jpg" alt="" ></a>

                <a class="next" style="cursor:pointer;"><img src="<?php echo get_template_directory_uri(); ?>/images/next.jpg" alt="" ></a>

              </div>

            </div>

<?php query_posts('post_type=stories&order=asc&orderby=menu_order&showposts=-1'); $e=1;?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>			

			

			<div id="case_study<?php echo $e; ?>" class="modal fade" role="dialog">

              <div class="modal-dialog">

                <div class="modal-content">

                  <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h2 style="color:#fff;"><?php the_title(); ?></h2>

                  </div>

                  <div class="modal-body">

                    <?php the_content(); ?>

                  </div>

                </div>

              </div>

            </div>

<?php $e++; endwhile; ?>

<?php wp_reset_query(); ?>				

			

        <div class="clear"></div>

        </div>

    </div>

    <div class="gray_sec">

    	<div class="container">

        	<div class="row">

            	<div class="col-md-9 md_center">

				<?php if ( is_active_sidebar( 'contact-widget' ) ) : ?>

		<?php dynamic_sidebar( 'contact-widget' ); ?>

		<?php endif; ?>                	

                </div>

                <div class="col-md-3 md_center mcontact">

                	<a href="#" class="btn2 green" data-toggle="modal" data-target="#contact_form">Contact Us <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>                    

                </div>

            </div>

        </div>

    </div>

</div>

<div class="sec4 text-center">

	<div class="container">

    	<h2 class="heading"><span>our latest news</span></h2>

        <div class="row">

		

		<?php query_posts('post_type=post&cat=3&orderby=date&order=DESC&showposts=2'); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	

		<?php 

		$newsimg_pro = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

		$excerpt = wp_strip_all_tags(get_the_excerpt());

        $words = str_word_count($excerpt, 2);

        $pos = array_keys($words);

        $text = substr($excerpt, 0, $pos[10]) . '...';



		?>

		

        	<div class="col-md-6">

            	<div class="news_box">

                	<div class="row">

                    	<div class="col-sm-5"><a href="<?php the_permalink(); ?>"><img src="<?php echo $newsimg_pro; ?>" alt="" class="full_width"></a></div>

                        <div class="col-sm-7 padding same">

                        	<h3><?php the_title(); ?></h3>

                            <p><span><?php echo get_the_date( 'F j, Y' ); ?></span></p>

                            <p><?php echo $text; ?></p>

							<div class="row">

                            	<div class="col-sm-6"><p><a href="<?php the_permalink(); ?>">read more</a></p></div>

                                <div class="col-sm-6"><!--<p><?php comments_number( 'no responses', 'one response', '% responses' ); ?></p>--></div>

                            </div>

                        </div>

                    </div>

                <div class="clear"></div>

                </div>

            </div>

<?php  endwhile; ?>

<?php wp_reset_query(); ?>				

			

			



        </div>

    </div>

</div>





<?php

get_footer();


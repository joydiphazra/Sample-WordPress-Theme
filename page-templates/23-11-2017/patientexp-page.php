<?php
/**
 * Template Name: Patient Experience Page Template
*/

get_header(); ?>
<script>var hash = window.location.hash;</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu.css" media="all" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js"></script> 
<script type="text/javascript" >
jQuery(document).ready(function () {
    jQuery('#navigation nav').meanmenu();
});
</script>

<!--dropdown start -->
<script type="text/javascript">
if (screen && screen.width > 767)
  document.write('<script type="text/javascript" charset="UTF-8" src="<?php echo get_template_directory_uri(); ?>/js/ddsmoothmenu.js"><\/script>');
</script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>
<!--dropdown end -->
<?php 

$hashval = "<script>document.writeln(hash);</script>";

//print_r($_SERVER);

//echo $current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php  
$power_image = get_post_meta( get_the_ID(), 'banner_image', true);
$pimage = wp_get_attachment_url( $power_image );
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
	$the_magview_difference = get_post_meta( get_the_ID(), 'the_magview_difference', true);
	$magview_deatils = get_post_meta( get_the_ID(), 'magview_deatils', true);
	
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
<div id="inner_banner"><img src="<?php echo $pimage; ?>" alt="" ></div>
</header>

<div class="inner_content">

	<div class="menu_sec">
        <div class="container">
		
        	<div id="navigation">
            	<nav>
                	<div id="smoothmenu1" class="ddsmoothmenu">
					 <?php
$id11 = 141;
$args23 = array(
'post_type'      => 'page',
'posts_per_page' => -1,
'post_parent'    => $id11,
'order'          => 'ASC',
'orderby'        => 'menu_order'
);
$parent222 = new WP_Query( $args23 );
if ( $parent222->have_posts() ) : ?>
<ul>
<?php while ( $parent222->have_posts() ) : $parent222->the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php
				
				$args13234 = array(
				'post_type'      => 'page',
				'posts_per_page' => -1,
				'post_parent'    => $post->ID,
				'order'          => 'ASC',
				'orderby'        => 'menu_order'
				);
				$parent1528 = new WP_Query( $args13234 );
if ( $parent1528->have_posts() ) : ?>
<ul>
<?php while ( $parent1528->have_posts() ) : $parent1528->the_post(); ?>	


<li><a href="<?php echo get_permalink( $post->post_parent ); ?>#<?php the_title(); ?>"><?php the_title(); ?>	</a></li>
<?php endwhile; ?>
</ul>

<?php endif; wp_reset_query(); ?>

</li>
<?php endwhile; ?>
</ul>
<?php endif; wp_reset_query(); ?>

					
					<?php //wp_nav_menu( array('menu_name'  => 'Breast Cancer', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '') ); ?>
                    </div>
                </nav>
            </div>
        </div>
    <div class="clear"></div>
    </div>
<div class="container">
	<div class="breadcrumb1 large1">
	<?php echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
	</div>
    	<h1>PATIENT EXPERIENCE</h1>
        <?php the_content(); ?>
<?php 
query_posts('page_id=163'); 
while (have_posts ()): the_post(); 
$details_text = get_post_meta( get_the_ID(), 'details_text', true);
$benefits = get_post_meta( get_the_ID(), 'benefits', true);
$history_portal_text = get_post_meta( get_the_ID(), 'history_portal_text', true);
$more_button_text = get_post_meta( get_the_ID(), 'more_button_text', true);
$more_button_link = get_post_meta( get_the_ID(), 'more_button_link', true);
$account_manager_button_text = get_post_meta( get_the_ID(), 'account_manager_button_text', true);
$account_manager_button_link = get_post_meta( get_the_ID(), 'account_manager_button_link', true);
$history_portal_features = get_post_meta( get_the_ID(), 'history_portal_features', true);
$history_portal_benifits = get_post_meta( get_the_ID(), 'history_portal_benifits', true);

$history_portal_image = get_post_meta( get_the_ID(), 'history_portal_image', true);
$history_portal_image1 = wp_get_attachment_url( $history_portal_image );
?> 		

        <h2><a name="<?php the_title(); ?>"></a><?php the_title(); ?></h2>
        <p><?php echo $details_text; ?></p>
<?php echo  $benefits; ?>
    </div>
    <div class="new_sec" style="background-color:#f9eafb;">
    	<div class="container">
        	<h2>History Portal</h2>
            <div class="col-sm-10 center-block">
            <p><?php echo $history_portal_text; ?></p>
            </div>
        </div>
    </div>
	
	
    <div class="container-fluid">
    	<div class="row box3">	
        <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $history_portal_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 col-sm-pull-5 same">
            <h3>Features</h3>
            <?php echo $history_portal_features; ?>
            <h3>Benefits</h3>
            <?php echo $history_portal_benifits; ?>
        </div>
    </div>
    </div>
<?php endwhile; ?>	
<?php wp_reset_query(); ?>

<?php 
query_posts('page_id=176'); 
while (have_posts ()): the_post(); 
$techpaddetails = get_post_meta( get_the_ID(), 'techpaddetails', true);
$big_image = get_post_meta( get_the_ID(), 'big_image', true);
$features = get_post_meta( get_the_ID(), 'features', true);
$benefits = get_post_meta( get_the_ID(), 'benefits', true);
$airport_monitor_title = get_post_meta( get_the_ID(), 'airport_monitor_title', true);
$airport_monitor_details = get_post_meta( get_the_ID(), 'airport_monitor_details', true);
$airport_monitor_image = get_post_meta( get_the_ID(), 'airport_monitor_image', true);
$techpadbig_image = wp_get_attachment_url( $big_image );
$airport_image = wp_get_attachment_url( $airport_monitor_image );
?> 

	<div class="new_sec" style="margin-top:0;"><a name="<?php the_title(); ?>"></a>
    	<div class="container">
        	<h2><?php the_title(); ?></h2>
            <div class="col-sm-10 center-block">
            <?php echo $techpaddetails; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    	<div class="row box3">	
        <div class="img_holder4 col-sm-6 same"><img src="<?php echo $techpadbig_image; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 same">
            <?php echo $features; ?>
			<?php echo $benefits; ?>
        </div>
    </div>
    <div class="row box3">	
        <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $airport_image; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 col-sm-pull-5 same">
            <h3><?php echo $airport_monitor_title; ?></h3>
            <?php echo $airport_monitor_details; ?>
        </div>
    </div>
    </div>
<?php endwhile; ?>	
<?php wp_reset_query(); ?>	
<?php 
query_posts('page_id=179'); 
while (have_posts ()): the_post(); 
$risk_models_details = get_post_meta( get_the_ID(), 'risk_models_details', true);
$risk_models_benefits = get_post_meta( get_the_ID(), 'risk_models_benefits', true);
$risk_model_banner_text = get_post_meta( get_the_ID(), 'risk_model_banner_text', true);
$risk_portal_title = get_post_meta( get_the_ID(), 'risk_portal_title', true);
$risk_portal_details = get_post_meta( get_the_ID(), 'risk_portal_details', true);
$risk_portal_features = get_post_meta( get_the_ID(), 'risk_portal_features', true);
$risk_models_image = get_post_meta( get_the_ID(), 'risk_models_image', true);
$risk_portal_image = get_post_meta( get_the_ID(), 'risk_portal_image', true);

$risk_models_image1 = wp_get_attachment_url( $risk_models_image );
$risk_portal_image1 = wp_get_attachment_url( $risk_portal_image );

?>
<div class="container-fluid"><a name="<?php the_title(); ?>"></a>	
    <div class="row box3">	
        <div class="img_holder4 col-sm-6 same"><img src="<?php echo $risk_models_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 same">
            <h3><?php the_title(); ?></h3>
            <?php echo $risk_models_details; ?>
            <?php echo $risk_models_benefits; ?>
        </div>
    </div>
    </div>
    <div class="patient_sec4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="heading3"><?php echo $risk_model_banner_text; ?></h2>
                </div>
            </div>
        </div>
    </div>	
    <div class="container-fluid">
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $risk_portal_image1; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 col-sm-pull-5 same">
                <h3><?php echo $risk_portal_title; ?></h3>
                <?php echo $risk_portal_details; ?>
                <?php echo $risk_portal_features; ?>
            </div>
        </div>
</div>
<?php endwhile; ?>	
<?php wp_reset_query(); ?>	

<?php 
query_posts('page_id=182'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
$patient_notification_portal_image = get_post_meta( get_the_ID(), 'patient_notification_portal_image', true);
$benefits = get_post_meta( get_the_ID(), 'benefits', true);
$referring_physician_portal_title = get_post_meta( get_the_ID(), 'referring_physician_portal_title', true);
$referring_physician_portal_description = get_post_meta( get_the_ID(), 'referring_physician_portal_description', true);
$referring_physician_portal_image = get_post_meta( get_the_ID(), 'referring_physician_portal_image', true);
$referring_physician_portal_benifits = get_post_meta( get_the_ID(), 'referring_physician_portal_benifits', true);

$notificationbig_image = wp_get_attachment_url( $patient_notification_portal_image );
$referring_image = wp_get_attachment_url( $referring_physician_portal_image );

?>
		
    <div class="container-fluid"><a name="<?php the_title(); ?>"></a>
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 same"><img src="<?php echo $notificationbig_image; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 same">
                <h3><?php the_title(); ?></h3>
                <?php echo $description; ?>
                <?php echo $benefits; ?>
            </div>
        </div>
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $referring_image; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 col-sm-pull-5 same">
                <h3><?php echo $referring_physician_portal_title; ?></h3>
                <?php echo $referring_physician_portal_description; ?>
                <?php echo $referring_physician_portal_benifits; ?>
            </div>
        </div>
    </div>
	
<?php endwhile; ?>	
<?php wp_reset_query(); ?>	
	
<?php query_posts('post_type=testi&order=asc&orderby=menu_order&showposts=4');?>

    <div class="testimonial_bg">
    	<div class="container">
        	<h3>What our customer's say </h3>
        	<div class="row">
                <div class="col-sm-7">
                	<div class="testimonial_border">
                    	<div id="owl-demo3" class="owl-carousel">
						
			
			<?php 
			if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
                            <div class="item">
                               <?php the_content(); ?>
                               <p><span><?php the_title(); ?></span></p>
                            </div>                           
				<?php endwhile; ?>

                            
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php wp_reset_query(); ?>	
	
	
<?php 
query_posts('page_id=185'); 
while (have_posts ()): the_post(); 
$navigation_description = get_post_meta( get_the_ID(), 'navigation_description', true);
$navigation_features = get_post_meta( get_the_ID(), 'navigation_features', true);
$navigation_image = get_post_meta( get_the_ID(), 'navigation_image', true);
$navigation_image1 = wp_get_attachment_url( $navigation_image );
?>	
<div class="container-fluid"><a name="<?php the_title(); ?>"></a>
    	<div class="row box3">	
            <div class="img_holder4 col-sm-6 same"><img src="<?php echo $navigation_image1; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 same">
                <h3><?php the_title(); ?></h3>
                <?php echo $navigation_description; ?>
				<?php echo $navigation_features; ?>
            </div>
        </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php 
query_posts('page_id=188'); 
while (have_posts ()): the_post(); 
$texting_module_description = get_post_meta( get_the_ID(), 'texting_module_description', true);
$texting_module_image = get_post_meta( get_the_ID(), 'texting_module_image', true);
$follow_up_title = get_post_meta( get_the_ID(), 'follow_up_title', true);
$follow_up_description = get_post_meta( get_the_ID(), 'follow_up_description', true);
$follow_up_image = get_post_meta( get_the_ID(), 'follow_up_image', true);
$integration_title = get_post_meta( get_the_ID(), 'integration_title', true);
$integration_description = get_post_meta( get_the_ID(), 'integration_description', true);
$integration_image = get_post_meta( get_the_ID(), 'integration_image', true);
$first_image = wp_get_attachment_url( $texting_module_image );
$second_image = wp_get_attachment_url( $follow_up_image );
$integration_image1 = wp_get_attachment_url( $integration_image );
?>

<div class="container-fluid"><a name="<?php the_title(); ?>"></a>
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $first_image; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 col-sm-pull-5 same">
                <h3><?php the_title(); ?></h3>
                <?php echo $texting_module_description; ?>
            </div>
        </div>
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 same"><img src="<?php echo $second_image; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 same">
                <h3><?php echo $follow_up_title; ?></h3>
                <?php echo $follow_up_description; ?>
            </div>
        </div>
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $integration_image1; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 col-sm-pull-5 same">
                <h3><?php echo $integration_title; ?></h3>
                <?php echo $integration_description; ?>
            </div>
        </div>
    </div>
	
<?php endwhile; ?>	
<?php wp_reset_query(); ?>	
	

    	<div class="stories_holder" style="background-color:#f5efd8;padding:7% 0;">
    	<div class="container">
        	<h2 class="heading"><span style="background-color:#f5efd8;">Success stories</span></h2>
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

            </div>
        <div class="clear"></div>
        </div>
		
        <div class="patient_bottom">
            <div class="container">
                <h2>Search for the right product</h2>
                <p>We were the first to market with our Structured Reporting system. </p>
                <a href="http://dev4work.com/magview/wp/solutions/breast-cancer/radiologist-empowerment/" class="btn2">CONTINUE to Radiologist Empowerment</a>
            </div>
        </div>
     <div class="blog_bg blog_bg2">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h2>The latest </h2>
                    <h3>from our MagView blog</h3>
                    <div class="blog_slider">
                        <div id="owl-demo2" class="owl-carousel">
						
												<?php query_posts('post_type=post&cat=5&orderby=date&order=ASC&showposts=-1'); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
		<?php $newsimg_pro1 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						
						
                            <div class="item">
                               <div class="row">
                                    <div class="col-sm-3"><img src="<?php echo $newsimg_pro1; ?>" alt="" class="full_width" ></div>
                                    <div class="col-sm-9">
                                        <h3><?php the_title(); ?></h3>
                                        <h4>by <?php echo $author = get_the_author(); ?><br>
                                        <?php echo get_the_date( 'F j, Y' ); ?></h4>
                                    </div>
                                </div>
                                <hr>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn2 violet">read full post</a>
                            </div>
							
<?php  endwhile; ?>
<?php wp_reset_query(); ?>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>	
<?php
get_footer();

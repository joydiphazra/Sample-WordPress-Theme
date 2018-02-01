<?php
/**
 * Template Name: Breast Cancer Meaningful Outcomes Page Template
*/

get_header(); ?>
<script>var hash = window.location.hash;</script>

<?php 
$pid = get_the_ID();
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
	
	$previewpre_fetching_engine_title = get_post_meta( get_the_ID(), 'previewpre_fetching_engine_title', true);
	$previewpre_fetching_engine_des = get_post_meta( get_the_ID(), 'previewpre_fetching_engine_des', true);
	$preview_image = get_post_meta( get_the_ID(), 'preview_image', true);
	$features = get_post_meta( get_the_ID(), 'features', true);
	$live_retrieve_title = get_post_meta( get_the_ID(), 'live_retrieve_title', true);
	$live_retrieve_description = get_post_meta( get_the_ID(), 'live_retrieve_description', true);
	$live_retrieve_image = get_post_meta( get_the_ID(), 'live_retrieve_image', true);	
	
	$pre_image = wp_get_attachment_url( $preview_image );
	$retrive_image = wp_get_attachment_url( $live_retrieve_image );

?>
<div id="inner_banner"><img src="<?php echo $pimage; ?>" alt="" ></div>
</header>

<div class="inner_content">

	<div class="menu_sec">
        <div class="container">
        	<div id="navigation2">
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
<li <?php if($pid == $post->ID){echo "class='subactive'";} ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
    	<h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
	
<?php 
query_posts('page_id=207'); 
while (have_posts ()): the_post(); 
$description1 = get_post_meta( get_the_ID(), 'q_description', true);
$risk_portal_description = get_post_meta( get_the_ID(), 'risk_portal_description', true);
$risk_portal_image = get_post_meta( get_the_ID(), 'risk_portal_image', true);
$risk_portal_image1 = wp_get_attachment_url( $risk_portal_image );



$qa_dashboard_benefits_title = get_post_meta( get_the_ID(), 'qa_dashboard_benefits_title', true);
$qa_dashboard_benefits_description = get_post_meta( get_the_ID(), 'qa_dashboard_benefits_description', true);
$qa_dashboard_benefits_image = get_post_meta( get_the_ID(), 'qa_dashboard_benefits_image', true);
$qa_dashboard_benefits_image1 = wp_get_attachment_url( $qa_dashboard_benefits_image );


$live_qa_metrics_title = get_post_meta( get_the_ID(), 'live_qa_metrics_title', true);
$live_qa_metrics_description = get_post_meta( get_the_ID(), 'live_qa_metrics_description', true);
$live_qa_metrics_image = get_post_meta( get_the_ID(), 'live_qa_metrics_image', true);
$live_qa_metrics_image1 = wp_get_attachment_url( $live_qa_metrics_image );

$group_performance_title = get_post_meta( get_the_ID(), 'group_performance_title', true);
$group_performance_description = get_post_meta( get_the_ID(), 'group_performance_description', true);
$group_performance_image = get_post_meta( get_the_ID(), 'group_performance_image', true);
$group_performance_image1 = wp_get_attachment_url( $group_performance_image );

?>

    
    <div class="new_sec" style="background-color:#e4eeff;"><a name="<?php the_title(); ?>"></a>
    	<div class="container">
        	<h2><?php the_title(); ?></h2>
            <div class="col-sm-10 center-block">
            <?php echo $description1; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    	<div class="row box3">	
        <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $risk_portal_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 col-sm-pull-5 same">
            <?php echo $risk_portal_description; ?>
        </div>
    </div>
    <div class="row box3">	
        <div class="img_holder4 col-sm-6 same"><img src="<?php echo $qa_dashboard_benefits_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 same">
            <h3><?php echo $qa_dashboard_benefits_title; ?></h3>
            <?php echo $qa_dashboard_benefits_description; ?>
        </div>
    </div>
	<div class="row box3">	
        <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $live_qa_metrics_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 col-sm-pull-5 same">
		<h3><?php echo $live_qa_metrics_title; ?></h3>
            <?php echo $live_qa_metrics_description; ?>
        </div>
    </div>
	<div class="row box3">	
        <div class="img_holder4 col-sm-6 same"><img src="<?php echo $group_performance_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 same">
            <h3><?php echo $group_performance_title; ?></h3>
            <?php echo $group_performance_description; ?>
        </div>
    </div>
    </div>
<?php endwhile; ?>	
<?php wp_reset_query(); ?>
	
	
<?php 
query_posts('page_id=203'); 
while (have_posts ()): the_post(); 
$trackdescription = get_post_meta( get_the_ID(), 'trackdescription', true);
$tracking_title = get_post_meta( get_the_ID(), 'tracking_title', true);
$tracking_description = get_post_meta( get_the_ID(), 'tracking_description', true);
$tracking_image = get_post_meta( get_the_ID(), 'tracking_image', true);

$tracking_image1 = wp_get_attachment_url( $tracking_image );
?>

    
    <div class="new_sec" style="background-color:#f9fbea;margin-top:0;"><a name="<?php the_title(); ?>"></a>
    	<div class="container">
        	<h2><?php the_title(); ?></h2>
            <div class="col-sm-10 center-block">
            <?php echo $trackdescription; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row box3">	
        <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $tracking_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 col-sm-pull-5 same">
            <h3><?php echo $tracking_title; ?></h3>
            <?php echo $tracking_description; ?>
        </div>
    </div>
    </div>
<?php endwhile; ?>	
<?php wp_reset_query(); ?>	
<?php 
query_posts('page_id=209'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);

$texting_module_title = get_post_meta( get_the_ID(), 'texting_module_title', true);
$texting_module_description = get_post_meta( get_the_ID(), 'texting_module_description', true);
$texting_module_image = get_post_meta( get_the_ID(), 'texting_module_image', true);
$texting_module_image1 = wp_get_attachment_url( $texting_module_image );

$patient_notification_title = get_post_meta( get_the_ID(), 'patient_notification_title', true);
$patient_notification_description = get_post_meta( get_the_ID(), 'patient_notification_description', true);
$patient_notification_image = get_post_meta( get_the_ID(), 'patient_notification_image', true);
$patient_notification_image1 = wp_get_attachment_url( $patient_notification_image );

$referring_physician_portal = get_post_meta( get_the_ID(), 'referring_physician_portal', true);
$referring_physician_portal_description = get_post_meta( get_the_ID(), 'referring_physician_portal_description', true);
$referring_physician_portal_image = get_post_meta( get_the_ID(), 'referring_physician_portal_image', true);
$referring_physician_portal_image1 = wp_get_attachment_url( $referring_physician_portal_image );


?>
    <div class="new_sec" style="background-color:#e4eeff;margin-top:0;"><a name="<?php the_title(); ?>"></a>
    	<div class="container">
        	<h2><?php the_title(); ?></h2>
            <div class="col-sm-10 center-block">
            <?php echo $description; ?>
            </div>
        </div>
    </div>
	
<div class="container-fluid">
    <div class="row box3">	
        <div class="img_holder4 col-sm-6 same"><img src="<?php echo $texting_module_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 same">
            <h3><?php echo $texting_module_title; ?></h3>
            <?php echo $texting_module_description; ?>
        </div>
    </div>
    <div class="row box3">	
        <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $patient_notification_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 col-sm-pull-5 same">
             <h3><?php echo $patient_notification_title; ?></h3>
             <?php echo $patient_notification_description; ?>
        </div>
    </div>
	<div class="row box3">	
        <div class="img_holder4 col-sm-6 same"><img src="<?php echo $referring_physician_portal_image1; ?>" alt="" class="full_width"></div>
        <div class="col-sm-5 same">
            <h3><?php echo $referring_physician_portal; ?></h3>
            <?php echo $referring_physician_portal_description; ?>
        </div>
    </div>
</div>

<?php endwhile; ?>	
<?php wp_reset_query(); ?>	

<?php
			query_posts(array(  
    'post_type' => 'testi',
    'showposts' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'testi-category',
            'terms' => 10,
            'field' => 'term_id',
        )
    ),
    'orderby' => 'menu_order',
    'order' => 'ASC' )
);

?>

<?php //query_posts('post_type=testi&order=asc&orderby=menu_order&showposts=4');?>

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
query_posts('page_id=213'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
$worklist_tool_title = get_post_meta( get_the_ID(), 'worklist_tool_title', true);
$worklist_tool_description = get_post_meta( get_the_ID(), 'worklist_tool_description', true);
$worklist_tool_image = get_post_meta( get_the_ID(), 'worklist_tool_image', true);
$worklist_tool_image1 = wp_get_attachment_url( $worklist_tool_image );
?>
    <div class="container-fluid">
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $worklist_tool_image1; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 col-sm-pull-5 same">
               <h3><?php the_title(); ?></h3>
			   <?php echo $description; ?>
               <?php echo $worklist_tool_description; ?>

            </div>
        </div>

</div>


<?php endwhile; ?>	
<?php wp_reset_query(); ?>	

<?php 
query_posts('page_id=215'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
$image = get_post_meta( get_the_ID(), 'image', true);
$image1 = wp_get_attachment_url( $image );
?>	
    <div class="container-fluid"><a name="<?php the_title(); ?>"></a>
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 same"><img src="<?php echo $image1; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 same">
               <h3><?php the_title(); ?></h3>
               <?php echo $description; ?>

            </div>
        </div>
		</div>
<?php endwhile; ?>	
<?php wp_reset_query(); ?>		

<?php 
query_posts('page_id=217'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
$pathology_image = get_post_meta( get_the_ID(), 'pathology_image', true);
$pathology_image1 = wp_get_attachment_url( $pathology_image );
?>


    <div class="container-fluid"><a name="<?php the_title(); ?>"></a>
        <div class="row box3">	
            <div class="img_holder4 col-sm-6 col-sm-push-6 same"><img src="<?php echo $pathology_image1; ?>" alt="" class="full_width"></div>
            <div class="col-sm-5 col-sm-pull-5 same">
				<h3><?php the_title(); ?></h3>
                <?php echo $description; ?>
            </div>
    </div>
</div>

<?php endwhile; ?>	
<?php wp_reset_query(); ?>

	
<div class="patient_bottom">
	<div class="container">
		<h2>Search for the right product</h2>
		<p>We were the first to market with our Structured Reporting system. </p>
		<a href="http://www.magview.com/solutions/breast-cancer/data-insight/" class="btn2">CONTINUE to DATA INSIGHT</a>
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

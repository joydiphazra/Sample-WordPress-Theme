<?php
/**
 * Template Name: Breast Cancer Radio Logist Page Template
*/

get_header(); ?>
<script>var hash = window.location.hash;</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu.css" media="all" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js"></script> 
<script type="text/javascript" >
$(document).ready(function () {
    $('#navigation nav').meanmenu();
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
	
<div class="container"><a name="Powerscribe Launch"></a>
<div class="breadcrumb1 large1">
	<?php echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
	</div>
    	<h1><?php the_title(); ?></h1>
		<?php 
query_posts('page_id=191'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
$benefits = get_post_meta( get_the_ID(), 'benefits', true);
$history_portal_text = get_post_meta( get_the_ID(), 'history_portal_text', true);
$more_button_text = get_post_meta( get_the_ID(), 'more_button_text', true);
$more_button_link = get_post_meta( get_the_ID(), 'more_button_link', true);
$account_manager_button_text = get_post_meta( get_the_ID(), 'account_manager_button_text', true);
$account_manager_button_link = get_post_meta( get_the_ID(), 'account_manager_button_link', true);
$history_portal_features = get_post_meta( get_the_ID(), 'history_portal_features', true);
$history_portal_benifits = get_post_meta( get_the_ID(), 'history_portal_benifits', true);

?>
        <h2><?php the_title(); ?></h2>
        <?php echo $description; ?>

<?php endwhile; ?>	
<?php wp_reset_query(); ?>
	
	</div>
<?php 
query_posts('page_id=193'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
$image = get_post_meta( get_the_ID(), 'image', true);
$benifits = get_post_meta( get_the_ID(), 'benifits', true);
$reporting_macros_title = get_post_meta( get_the_ID(), 'reporting_macros_title', true);
$reporting_macros_description = get_post_meta( get_the_ID(), 'reporting_macros_description', true);
$reporting_macros_image = get_post_meta( get_the_ID(), 'reporting_macros_image', true);
$macros_image = wp_get_attachment_url( $reporting_macros_image );
$screeningpad_image = wp_get_attachment_url( $image );
?>
    <div class="patient_sec3" style="background-color:#ececec;margin-bottom:30px;"><a name="Screening Pad"></a>
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-5">
				
                	<h2><?php the_title(); ?></h2>
                    <?php echo $description; ?>
                </div>
                <div class="col-sm-5 col-sm-push-2 center_767"><img src="<?php echo $screeningpad_image; ?>" alt="" ></div>
            </div>
        </div>
    </div>
	
    <div class="container">
<?php echo $benifits; ?>
    </div>
	
    <div class="patient_sec3" style="background-color:#ececec;margin-bottom:30px;"><a name="Workstation Interface"></a>
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-5 col-sm-push-7">
                	<h3><?php echo $reporting_macros_title; ?></h3>
                    <?php echo $reporting_macros_description; ?>
                </div>
                <div class="col-sm-5 col-sm-pull-5 center_767"><img src="<?php echo $macros_image; ?>" alt="" ></div>
            </div>
        </div>
</div>

<?php endwhile; ?>	
<?php wp_reset_query(); ?>

<div class="container">
<?php 
query_posts('page_id=195'); 
while (have_posts ()): the_post(); 
$wdescription = get_post_meta( get_the_ID(), 'wdescription', true);
$wbenefits = get_post_meta( get_the_ID(), 'wbenefits', true);
?>
    	<h2><?php the_title(); ?></h2><a name="Worklist Tool"></a>
        <?php echo $wdescription; ?>
        <?php echo $wbenefits; ?>
		
<?php endwhile; ?>	
<?php wp_reset_query(); ?>

<?php 
query_posts('page_id=197'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
?>		
        <h2><?php the_title(); ?><a name="Learning Worklist"></a></h2>
	<?php echo $description; ?>	
        
 <?php endwhile; ?>	
<?php wp_reset_query(); ?>       
		
<?php 
query_posts('page_id=199'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
?>		
        <h2><?php the_title(); ?><a name="EQUIP Module"></a></h2>
	<?php echo $description; ?>	
        
 <?php endwhile; ?>	
<?php wp_reset_query(); ?>  
		
<?php 
query_posts('page_id=201'); 
while (have_posts ()): the_post(); 
$description = get_post_meta( get_the_ID(), 'description', true);
?>		
        <h2><?php the_title(); ?></h2>
	<?php echo $description; ?>	
        
 <?php endwhile; ?>	
<?php wp_reset_query(); ?>  

    </div>
	
    <div class="patient_sec3" style="background-color:#ececec;margin-bottom:30px;">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-5">
                	<h3><?php echo $previewpre_fetching_engine_title; ?></h3>
                    <?php echo $previewpre_fetching_engine_des; ?>
                </div>
                <div class="col-sm-5 col-sm-push-2 center_767"><img src="<?php echo $pre_image; ?>" alt=""></div>
            </div>
        </div>
    </div>
    <div class="container">
<?php echo $features; ?>
    </div>
    <div class="patient_sec3" style="background-color:#ececec;">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-5 col-sm-push-7">
                	<h3><?php echo $live_retrieve_title; ?></h3>
                    <?php echo $live_retrieve_description; ?>
                </div>
                <div class="col-sm-5 col-sm-pull-5 center_767"><img src="<?php echo $retrive_image; ?>" alt=""></div>
            </div>
        </div>
    </div>
	<div class="patient_bottom">
    	<div class="container">
        	<h2>Search for the right product</h2>
            <p>We were the first to market with our Structured Reporting system. </p>
            <a href="http://dev4work.com/magview/wp/solutions/breast-cancer/meaningful-outcomes/" class="btn2">CONTINUE to meaningful outcomes</a>
        </div>
    </div>  
     <div class="blog_bg blog_bg2" style="margin-top:0;">
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

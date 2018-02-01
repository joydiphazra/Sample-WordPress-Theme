<?php
/**
 * Template Name: Solutions Page Template
*/

get_header(); ?>
<div id="inner_banner"><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></div>
</header>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php  
	$solutions_1_name = get_post_meta( get_the_ID(), 'solutions_1_name', true);
	$solutions_1_text = get_post_meta( get_the_ID(), 'solutions_1_text', true);
	$solutions_1_link = get_post_meta( get_the_ID(), 'solutions_1_link', true);
	$solutions_2_name = get_post_meta( get_the_ID(), 'solutions_2_name', true);
	$solutions_2_text = get_post_meta( get_the_ID(), 'solutions_2_text', true);
	$solutions_2_link = get_post_meta( get_the_ID(), 'solutions_2_link', true);
	$solutions_3_name = get_post_meta( get_the_ID(), 'solutions_3_name', true);
	$solutions_3_text = get_post_meta( get_the_ID(), 'solutions_3_text', true);
	$solutions_3_link = get_post_meta( get_the_ID(), 'solutions_3_link', true);
	$solutions_4_name = get_post_meta( get_the_ID(), 'solutions_4_name', true);
	$solutions_4_text = get_post_meta( get_the_ID(), 'solutions_4_text', true);
	$solutions_4_link = get_post_meta( get_the_ID(), 'solutions_4_link', true);
	$best_heading = get_post_meta( get_the_ID(), 'best_heading', true);
	$our_best_solution_text = get_post_meta( get_the_ID(), 'our_best_solution_text', true);
	$left_text = get_post_meta( get_the_ID(), 'left_text', true);
	$middle_image = get_post_meta( get_the_ID(), 'middle_image', true);
	$right_text = get_post_meta( get_the_ID(), 'right_text', true);
	$middle_image_url = wp_get_attachment_url( $middle_image ); 
					
?>
<div class="inner_content">
	<div class="container">
	<div class="breadcrumb large">
	<?php echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
	</div>
    	<h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
		</div>
    <div class="container">
    	<div class="row" style="position:relative;">
        	<div class="logo_holder2"><img src="<?php echo get_template_directory_uri(); ?>/images/solution_caplogo.png" class="cap" alt="" ><img src="<?php echo get_template_directory_uri(); ?>/images/onlyarrow.png" alt="" class="rotate" id="imgrotate" ></div>
        	<div class="col-sm-6 solution1 solution" id="s1">
            <h2><a href="<?php echo $solutions_1_link; ?>"><?php echo $solutions_1_name; ?></a></h2>
            <div class="solution_inner">
            	<h3><?php echo $solutions_1_name; ?></h3>
            	<?php echo $solutions_1_text; ?>
                <a href="<?php echo $solutions_1_link; ?>" class="btn5">Learn More</a>
            </div>
            </div>
            <div class="col-sm-6 solution1 solution2" id="s2">
            <h2 style="right:0;left:inherit;"><a href="<?php echo $solutions_2_link; ?>"><?php echo $solutions_2_name; ?></a></h2>
            <div class="solution_inner">
            	<h3><?php echo $solutions_2_name; ?></h3>
            	<?php echo $solutions_2_text; ?>
                <a href="<?php echo $solutions_2_link; ?>" class="btn5">Learn More</a>
            </div>
            </div>
            <div class="col-sm-6 solution1 solution3" id="s3">
            	<h2><a href="<?php echo $solutions_3_link; ?>"><?php echo $solutions_3_name; ?></a></h2>
            	<div class="solution_inner">
                	<h3><?php echo $solutions_3_name; ?></h3>
                    <?php echo $solutions_3_text; ?>
                    <a href="<?php echo $solutions_3_link; ?>" class="btn5">Learn More</a>
                </div>
            </div>
            <div class="col-sm-6 solution1 solution4" id="s4">
            <h2 style="right:0;left:inherit;"><a href="<?php echo $solutions_4_link; ?>"><?php echo $solutions_4_name; ?></a></h2>
            <div class="solution_inner">
            	<h3><?php echo $solutions_4_name; ?></h3>
            	<?php echo $solutions_4_text; ?>
                <a href="<?php echo $solutions_4_link; ?>" class="btn5">Learn More</a>
            </div>
            </div>
        </div>
    </div>
    <div class="about_sec2">
    	<div class="container">
        	<div class="text-center">
            	<h2><?php echo $best_heading; ?></h2>
                <?php echo $our_best_solution_text; ?>
                <p>&nbsp;</p>
            </div>
            <div class="row">
            	<div class="col-md-3">
					<?php echo $left_text; ?>
                </div>
                <div class="col-md-6 text-center md_center"><p><img src="<?php echo $middle_image_url; ?>" alt="" ></p></div>
                <div class="col-md-3">
                	<?php echo $right_text; ?>
            </div>
        </div>
    </div>    
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php
get_footer();

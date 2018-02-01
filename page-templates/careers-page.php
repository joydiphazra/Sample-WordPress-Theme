<?php
/**
 * Template Name: Careers Page Template
*/

get_header(); ?>
<div id="inner_banner"><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></div>
</header>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="inner_content">
	<div class="container about_top career">
	<div class="breadcrumb large">
	<?php echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
	</div>
    	<h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <div class="form_holder" style="padding: 6% 0;">
    	<div class="container">
        	 <h3><?php echo $contact_form_heading; ?></h3>
             <div class="row">
             	<div class="col-sm-11">
                	<?php echo do_shortcode('[contact-form-7 id="140" title="About Contact Form"]');?>
                    
                </div>
             </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php
get_footer();

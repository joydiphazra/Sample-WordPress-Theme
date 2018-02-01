<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div id="inner_banner"><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></div>
</header>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="inner_content">
	<div class="container about_top career">
		<div class="breadcrumb large">
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to MagView." href="https://www.magview.com/" class="home"><span property="name">MagView</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to the News category archives." href="https://www.magview.com/careers/" class="taxonomy category"><span property="name">Careers</span></a><meta property="position" content="2"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name"><?php the_title(); ?></span><meta property="position" content="3"></span>
	
	<?php //echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
	
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
//get_sidebar();
get_footer();

<?php
/**
 * Template Name: Inner Page Template
*/

get_header(); $imgf = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div id="inner_banner"><img src="<?php echo $imgf; ?>" alt=""></div>
</header>

<div class="inner_content">
<div class="container about_top">
<div class="breadcrumb large">
<?php echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
</div>
</div>
	<?php the_content(); ?>
</div>
<?php
get_footer();

<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div id="inner_banner">
<img src="<?php echo get_template_directory_uri(); ?>/images/blog_banner.jpg" alt="" >
</div>


<div class="inner_content">
	<div class="container blog_holder">
	<div class="breadcrumb large">
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to MagView." href="http://dev4work.com/magview/wp" class="home"><span property="name">MagView</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to the News category archives." href="http://dev4work.com/magview/wp/news-events/" class="taxonomy category"><span property="name">News & Events</span></a><meta property="position" content="2"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name"><?php the_title(); ?></span><meta property="position" content="3"></span>
	
	<?php //echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
	
	</div>
	<?php while ( have_posts() ) : the_post(); ?>
	    	<div class="col-sm-8 col-sm-push-4 blog_right">
        	<div class="blog_img"><?php the_post_thumbnail('full');?></div>
            <h2>"<?php the_title(); ?>”</h2>
            <?php the_content(); ?>
            <hr>
            <h4>Like the Post? Do share with your Friends.</h4>
            <p><?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,googleplus,linkedin,pinterest' twitter_username='arjun077' facebook_text='Share on Facebook' twitter_text='Share on Twitter' googleplus_text='Share on Google+' linkedin_text='Share on Linkedin' pinterest_text='Share on Pinterest' xing_text='Share on Xing' icon_order='f,t,g,l,p,x' show_icons='1' before_button_text='' text_position='' social_image='']
");?></p>
            <h4>write your Comment here</h4>
			<?php	if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
           <!-- <textarea class="comments_box" placeholder="Type here"></textarea>
            <input type="submit" value="post" class="post_btn" >-->
        </div>
        <div class="col-sm-4 col-sm-pull-8">
        	<h4>WRITTEN WITH</h4>
            <div class="admin_img"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?></div>
            <h3><?php echo $author = get_the_author(); ?></h3>
            <!--<p style="padding-bottom:0;">Phasellus et porttitor nisi. In eget congue augue. Fusce sedmagna vitae felis dapibus elementum.</p>-->
            <hr>
            <!--<h4>Talking About</h4>
            <h3>Breast Center</h3>
            <hr>-->
            <h4>POST DATE</h4>
            <h3><?php echo get_the_date( 'F j, Y' ); ?></h3>
        </div>



    </div>
</div>


<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();

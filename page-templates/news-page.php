<?php
/**
 * Template Name: News Page Template
*/

get_header(); ?>

<div id="inner_banner"><?php the_post_thumbnail('full'); ?></div>
</header>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php  
?>
<div class="inner_content">
	<div class="container">
    	<div class="breadcrumb large"><?php echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?></div>
		
    	<h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <div class="news_sec1">
        	<h2 class="heading2"><span>current <strong>news</strong></span></h2>
            <div class="news_carousal">
            	<div id="owl-demo" class="owl-carousel">
						<?php query_posts('post_type=post&cat=3&orderby=date&order=DESC&showposts=-1'); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	
		<?php $newsimg_pro = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <div class="item">
                	<a href="<?php the_permalink(); ?>">
                	<div class="row">
                    	<div class="col-xs-5"><img src="<?php echo $newsimg_pro; ?>" alt="" ></div>
                        <div class="col-xs-7">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo get_the_date( 'F j, Y' ); ?></p>
                        </div>
                    </div>
                    </a>
                </div>		
				<?php  endwhile; ?>
<?php wp_reset_query(); ?>
              </div>
              <div class="customNavigation">
                <a class="prev"><img src="<?php echo get_template_directory_uri(); ?>/images/prev2.jpg" alt="" ></a>
                <a class="next"><img src="<?php echo get_template_directory_uri(); ?>/images/next2.jpg" alt="" ></a>
              </div>
            </div>
            <h2 class="heading2"><span><strong>events</strong></span></h2>
            <div class="events">
			<?php query_posts('post_type=events&order=asc&orderby=menu_order&showposts=-1'); $c=1;?>
	<?php 
	if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php  
				//$img_pro = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
				$wstart = get_post_meta( get_the_ID(), 'wstart', true);
				$wend = get_post_meta( get_the_ID(), 'wend', true);
				$who = get_post_meta( get_the_ID(), 'who', true);
				$where = get_post_meta( get_the_ID(), 'where', true);
				$booth = get_post_meta( get_the_ID(), 'booth', true);
				$time = strtotime($wstart);

$newformatday = date('d',$time);
$newformatmonth = date('M',$time);

$time1 = strtotime($wend);

$newformatday1 = date('d',$time1);
$newformatmonth1 = date('M',$time1);

				
	?>
			
            	<div class="col-md-3 col-sm-6 same1">
                	<a href="#" data-toggle="modal" data-target="#event<?php echo $c; ?>">
                	<div class="date">
                    	<?php echo $newformatday; ?> <span><?php echo $newformatmonth; ?></span>
                        <p>to <?php echo $newformatmonth1; ?> <?php echo $newformatday1; ?></p>
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <h4><?php echo $wstart; ?> - <?php echo $wend; ?></h4>
                    <?php the_content(); ?>
					</a>
                </div>
				
				<div id="event<?php echo $c; ?>" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 style="color:#fff;font-size:20px;"><?php the_title(); ?></h2>
                              </div>
                              <div class="modal-body">
							  <p><b>Who: </b> <?php echo $who; ?></p>
							  <p><b>What: </b> <?php the_content(); ?></p>
							  <p><b>Where: </b> <?php echo $where; ?></p>
							  <p><b>When: </b> <?php echo $wstart." - ".$wend; ?></p>
							  <?php if($booth != ''){?>
							  <p><b>Booth: </b> <?php echo $booth; ?></p>
							  <?php } ?>							  
                              </div>
                            </div>
                          </div>
                        </div>
				
				
<?php $c++; endwhile; ?>
	<?php wp_reset_query(); ?>	
	
            </div>
        <div class="clear"></div>
        </div>
    </div>
	
	    <div class="blog_bg">
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
	
	    <div class="news_sec2">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8">
				<h1>Success Stories</h1>
                	<div class="row">
					<?php query_posts('post_type=stories&order=asc&orderby=menu_order&showposts=-1'); $d=1;?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php  
				$img_pro1 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
				$sshead = get_post_meta( get_the_ID(), 'subhead', true);
				$sdesc = get_post_meta( get_the_ID(), 'sdesc', true);
				
	?>
                    	<div class="col-sm-4 same1">
                        	<a href="#" data-toggle="modal" data-target="#case_study<?php echo $d; ?>">
                        	<p><img src="<?php echo $img_pro1; ?>" alt="" class="full_width"></p>
                            <h3 style="margin-bottom: 30px;"><?php the_title(); ?></h3>                            
                            </a>
                        </div>
<?php $d++; endwhile; ?>
<?php wp_reset_query(); ?>

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
                </div>
                <div class="col-md-4 ">
                	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmagviewinc&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    
                </div>
                
            </div>
        </div>
    </div>



    <div class="gray_sec">
    	<div class="container">
        	<div class="row">
			<?php if ( is_active_sidebar( 'about-request' ) ) : ?>
					<?php dynamic_sidebar( 'about-request' ); ?>
					<?php endif; ?>

            </div>
        </div>
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

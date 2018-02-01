<?php
/**
 * Template Name: About Us Page Template
*/

get_header(); $imgf = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div id="inner_banner"><img src="<?php echo $imgf; ?>" alt=""></div>
</header>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php  
	$account_management_heading = get_post_meta( get_the_ID(), 'account_management_heading', true);
	$account_management_text = get_post_meta( get_the_ID(), 'account_management_text', true);
	$power_heading = get_post_meta( get_the_ID(), 'power_heading', true);
	$power_description = get_post_meta( get_the_ID(), 'power_description', true);
	$power_image = get_post_meta( get_the_ID(), 'power_image', true);
	$partner_heading = get_post_meta( get_the_ID(), 'partner_heading', true);
	$partner_description = get_post_meta( get_the_ID(), 'partner_description', true);
	$partner_button_text = get_post_meta( get_the_ID(), 'partner_button_text', true);
	$partner_button_link = get_post_meta( get_the_ID(), 'partner_button_link', true);
	$partner_below_details = get_post_meta( get_the_ID(), 'partner_below_details', true);
	$pimage = wp_get_attachment_url( $power_image ); 
	$contact_form_heading = get_post_meta( get_the_ID(), 'contact_form_heading', true);	
?>
<div class="inner_content">
	<div class="container about_top">
	<div class="breadcrumb large"><?php echo bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?></div>
	
    	<h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <div class="team_sec">
    	<div class="container">
        	<h2 class="text-center"><?php echo $account_management_heading; ?></h2>
			            <div class="row">
			<div class="col-sm-12 teamcontent">
			<?php echo $account_management_text; ?>
			</div>
			</div>
            <div class="row">
			<?php query_posts('post_type=teammember&order=asc&orderby=menu_order&showposts=-1'); $team = 1;?>
			<?php 
			if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php  						
						$designation = get_post_meta( get_the_ID(), 'designation', true);
						$shortbio = get_post_meta( get_the_ID(), 'shortbio', true);
						
						?>
			
			
            	<div class="col-md-3 col-sm-6 same1">
                	<div class="flip">
                        <div class="card"> 
                          <div class="face front"> 
                            <div class="inner">   
                              <?php the_post_thumbnail('full'); ?>
                              <h2><?php the_title(); ?></h2>
                              <h3><?php echo $designation; ?></h3>
                            </div>
                          </div> 
                          <div class="face back"> 
                            <div class="inner text-center"> 
                              <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="" >
                              <h2><?php the_title(); ?></h2>
                              <h3><?php echo $designation; ?></h3>
                              <p><?php echo $shortbio; ?></p>
							  <p><a href="#" data-toggle="modal" data-target="#jon<?php echo $team; ?>">View Full Bio</a></p>
                            </div>
                          </div>
                        </div>	 
                      </div>
                      <div id="jon<?php echo $team; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2><?php the_title(); ?></h2>
                          </div>
                          <div class="modal-body">
                            <?php the_content(); ?>
							</div>
                        </div>
                      </div>
                    </div>
                </div>
<?php $team++; endwhile; ?>
	<?php wp_reset_query(); ?>	
                
            </div>

		</div>
    </div>
    <div class="news_sec3">
 	<div class="container">
    	<h2><?php echo $power_heading; ?></h2>
        <?php echo $power_description; ?>
        <p><img src="<?php echo $pimage; ?>" alt="" ></p>
    </div>
 </div>
    <div class="about_sec3" style="padding-bottom:40px;" id="partner">
    	<div class="container">
        	<div class="text-center">
            	<h2><?php echo $partner_heading; ?></h2>
                <?php echo $partner_description; ?>
                <p><a href="<?php echo $partner_button_link; ?>" class="btn2"><?php echo $partner_button_text; ?></a></p>
            </div>
        </div>
        <div class="container-fluid">
			<?php query_posts('post_type=pwithus&order=asc&orderby=menu_order&showposts=-1'); $pp=1;?>
			<?php 
			if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php  						
						$btext = get_post_meta( get_the_ID(), 'btext', true);
						$blink = get_post_meta( get_the_ID(), 'blink', true);
						$img_prop = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 	
						if($pp%2=="0"){
						$cls= "img_holder4 col-sm-push-6";
						$cls2 = "col-sm-pull-5";
						}else{
						$cls= "img_holder3 ";
						$cls2 = "";
						}						
						?>
						
						                <div class="row box3">	
                    <div class="<?php echo $cls; ?> col-sm-6 same"><a href="<?php echo $blink; ?>"><img src="<?php echo $img_prop; ?>" alt="" class="full_width"></a></div>
                    <div class="col-sm-5 <?php echo $cls2; ?> same">
                        <h3><a href="<?php echo $blink; ?>"><?php the_title(); ?></a></h3>
                        <?php the_content(); ?>
						<a href="<?php echo $blink; ?>" class="findoutmore"><?php echo $btext; ?></a>
                    </div>
                </div>
			
			<?php $pp++; endwhile; ?>
	<?php wp_reset_query(); ?>
                
        </div>
            <div class="col-sm-9 center-block"><h3 class="text-center" style="padding:30px 0 0 0;"><?php echo $partner_below_details; ?></h3></div>
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

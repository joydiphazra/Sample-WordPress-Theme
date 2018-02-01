<?php
/**
 * Template Name: Breast Cancer Page Template
*/

get_header(); $imgf = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div id="inner_banner"><img src="<?php echo $imgf; ?>" alt=""></div>
</header>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php  
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
    	<h1><?php echo $solheading; ?></h1>
        <p><?php echo $solsub_heading; ?></p>
    </div>
 <div class="container-fluid">
 <?php
$id1 = get_the_ID();
$args = array(
'post_type'      => 'page',
'posts_per_page' => -1,
'post_parent'    => $id1,
'order'          => 'ASC',
'orderby'        => 'menu_order'
);
$parent = new WP_Query( $args );
$pp=1;
if ( $parent->have_posts() ) : ?>
<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>	
<?php 
$img_prop = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
if($pp%2=="0"){
						$cls= "sec_holder2";
						$cls2 = "col-sm-push-7";
						$cls3 = "col-sm-pull-4";
						}else{
						$cls= "sec_holder";
						$cls2 = "";
						$cls3 = "";
						}		
?>
 	<div class="<?php echo $cls; ?>">
 	<div class="row">	
    	<div class="col-sm-5 img_holder <?php echo $cls2; ?>"><a href="<?php the_permalink(); ?>"><img src="<?php echo $img_prop; ?>" alt="" class="full_width"></a></div>
        <div class="col-sm-6 text_holder <?php echo $cls3; ?>">
        	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_content(); ?>
            <div class="row icon_sec">
			<?php
				
				$args1 = array(
				'post_type'      => 'page',
				'posts_per_page' => -1,
				'post_parent'    => $post->ID,
				'order'          => 'ASC',
				'orderby'        => 'menu_order'
				);
				$parent1 = new WP_Query( $args1 );
if ( $parent1->have_posts() ) : ?>
<?php while ( $parent1->have_posts() ) : $parent1->the_post(); ?>		
		<div class="col-md-4 col-sm-6 same2">
                	<a href="<?php echo get_permalink( $post->post_parent ); ?>#<?php the_title(); ?>" data-toggle="tooltip" title="<?php the_title(); ?>">
                	<?php the_post_thumbnail('full'); ?>
                    <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                    </a>
                </div>	
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
            </div>
        </div>
 	</div>
    </div>
<?php $pp++; endwhile; ?>
<?php endif; wp_reset_query(); ?>
 </div>   
<div class="solution_bg1">
	<div class="container">
    	<h2><?php echo $the_magview_difference; ?></h2>
        <?php echo $magview_deatils; ?>        
    </div>
</div>    
<div class="sec1">
	<div class="container">
    	<h2><?php echo $heading; ?></h2>
        <h3><?php echo $sub_heading; ?></h3>
        <div class="row">
        	<div class="col-md-3 col-sm-6">
            	<div class="box1">
                	<div class="box1_top">
                    	<span class="counter"><?php echo $box1; ?></span><br>
                        <?php echo $box1_text; ?>
                    </div>
                    <div class="down_arw"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.jpg" alt="" class="normal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon1_hover.jpg" alt="" class="hover">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
            	<div class="box1">
                	<div class="box1_top">
                    	<span><span class="counter"><?php echo $box2_number; ?></span><?php echo $box2_sign; ?></span><br>
                        <?php echo $box_2_text; ?>
                    </div>
                    <div class="down_arw"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon2.jpg" alt="" class="normal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon2_hover.jpg" alt="" class="hover">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
            	<div class="box1">
                	<div class="box1_top">
                    	<span><span class="counter"><?php echo $box_3_number; ?></span> <?php echo $box3_sign; ?></span><br>
                        <?php echo $box3_text; ?>
                    </div>
                    <div class="down_arw"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon3.jpg" alt="" class="normal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon3_hover.jpg" alt="" class="hover">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
            	<div class="box1">
                	<div class="box1_top">
                    	<span><?php echo $box4_heading; ?>	</span> <br>
                        <?php echo $box4_text; ?>
                    </div>
                    <div class="down_arw"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon4.jpg" alt="" class="normal"><img src="<?php echo get_template_directory_uri(); ?>/images/icon4_hover.jpg" alt="" class="hover">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="follow_bg">
<div class="container">
<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
		<?php endif; ?>  
</div>
</div>  
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>	
<?php
get_footer();

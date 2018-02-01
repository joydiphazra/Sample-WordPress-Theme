<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<meta name="format-detection" content="telephone=no" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" ></script>
<!-- Owl Carousel Assets -->
<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet">

<script type="text/javascript">
$(document).on("scroll",function(){
	if($(document).scrollTop()>30){ 
		$(".logo_holder").removeClass("large").addClass("small");
		}
	else{
		$(".logo_holder").removeClass("small").addClass("large");
		}
	});
</script>
<script type="text/javascript">
$(document).on("scroll",function(){
	if($(document).scrollTop()>230){ 
		$(".menu_sec").removeClass("large").addClass("small");
		}
	else{
		$(".menu_sec").removeClass("small").addClass("large");
		}
		
		if($(document).scrollTop()>230){ 
		$(".breadcrumb").removeClass("large").addClass("small");
		}
	else{
		$(".breadcrumb").removeClass("small").addClass("large");
		}
		
		if($(document).scrollTop()>230){ 
		$(".breadcrumb1").removeClass("large1").addClass("small1");
		}
	else{
		$(".breadcrumb1").removeClass("small1").addClass("large1");
		}
		
		
		
	});
$(document).on("scroll",function(){
	//alert($(document).scrollTop());
	if($(document).scrollTop()>2400){ 
	$('#id2').removeAttr( 'style' );
	}
	if($(document).scrollTop()>680){ 
	$('#id1').removeAttr( 'style' );
	}
	if($(document).scrollTop()>3500){ 
	$('#id3').removeAttr( 'style' );
	}
	if($(document).scrollTop()>4500){ 
	$('#id4').removeAttr( 'style' );
	}
	if($(document).scrollTop()>5500){ 
	$('#id5').removeAttr( 'style' );
	}
	if($(document).scrollTop()>6500){ 
	$('#id6').removeAttr( 'style' );
	}
	
	$("#myVideo").bind("ended", function() {
   console.log('Video has ended!');
});

});
</script>

<!--For Hover Dropdown-->
<script>

jQuery(function($) {

$('.navbar .dropdown').hover(function() {

$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();



}, function() {

$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();



});



$('.navbar .dropdown > a').click(function(){

location.href = this.href;

});



});

</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script>
$(document).ready(function() {
  var owl = $("#owl-demo");
  owl.owlCarousel({
  items : 3, //10 items above 1000px browser width
  itemsDesktop : [1000,2], //5 items between 1000px and 901px
  itemsDesktopSmall : [767,1], // 3 items betweem 900px and 601px
  itemsTablet: [600,1], //2 items between 600 and 0;
  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option  
  });

  // Custom Navigation Events
  $(".next").click(function(){
	owl.trigger('owl.next');
  })
  $(".prev").click(function(){
	owl.trigger('owl.prev');
  })

});
$(document).ready(function() {

  var owl = $("#owl-demo2");

  owl.owlCarousel({

  items : 1, //10 items above 1000px browser width
  itemsDesktop : [1000,1], //5 items between 1000px and 901px
  itemsDesktopSmall : [767,1], // 3 items betweem 900px and 601px
  itemsTablet: [667,1], //2 items between 600 and 0;
  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  
  });

  // Custom Navigation Events
  $(".next").click(function(){
	owl.trigger('owl.next');
  })
  $(".prev").click(function(){
	owl.trigger('owl.prev');
  })

});
$(document).ready(function() {

  var owl = $("#owl-demo3");

  owl.owlCarousel({

  items : 1, //10 items above 1000px browser width
  loop: false,
  itemsDesktop : [1000,1], //5 items between 1000px and 901px
  itemsDesktopSmall : [767,1], // 3 items betweem 900px and 601px
  itemsTablet: [667,1], //2 items between 600 and 0;
  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  
  });

  // Custom Navigation Events
  $(".next").click(function(){
	owl.trigger('owl.next');
  })
  $(".prev").click(function(){
	owl.trigger('owl.prev');
  })

});
</script>
<?php wp_head(); ?>
<!--For Hover Dropdown-->
<style>
.div-hide{
    display: none;
}
</style>
</head>

<body>
<?php $facebook_url = get_option('facebook_url'); ?>
<?php $twitter_url = get_option('twitter_url'); ?>
<?php $linked_url = get_option('linked_url'); ?>
<?php $youtube_url = get_option('youtube_url'); ?>
<?php $phone = get_option('phone'); ?>
<?php $email = get_option('email'); ?>
<header>
<div class="header_top">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-6 col-md-7 md_center">
            	<div class="social">
				<?php if($facebook_url!=''){?>
                	<a href="<?php echo $facebook_url; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<?php } ?>
				<?php if($twitter_url!=''){?>
                    <a href="<?php echo $twitter_url; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<?php } ?>
				<?php if($linked_url!=''){?>
                    <a href="<?php echo $linked_url; ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
				<?php } ?>
				<?php if($youtube_url!=''){?>
                    <a href="<?php echo $youtube_url; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				<?php } ?>
                </div>
                <p><?php if($phone!=''){?><a href="tel:<?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $phone; ?></a><?php } ?> <?php if($email != ''){?><a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $email; ?></a><?php } ?></p>
            </div>
            <div class="col-lg-6 col-md-5 text-right md_center">
            	<a href="https://magview.freshdesk.com/support/login" class="btn1" target="_blank"><i class="fa fa-user" aria-hidden="true"></i> Support Login</a>
                <a href="https://magview.freshdesk.com/support/signup" class="btn1" target="_blank"><i class="fa fa-user" aria-hidden="true"></i> Support Signup</a>
                <a href="#" class="btn1 gray" data-toggle="modal" data-target="#myModal" >Request Demo</a>
            </div>
        </div>
		<div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 style="color:#fff;">REQUEST DEMO</h2>
                  </div>
                      <div class="modal-body">
	    <form name="form1" id="form1" action="<?php echo esc_url( get_template_directory_uri() ); ?>/popmail.php" method="post">
	    <div>
		<label>Name : </label>
        <input type="text" id="name1" name="name1" value="" placeholder="Name" required>
		</div>
		
	    <div>
		<label>Email : </label>
        <input type="email" id="email1_r" name="email1" value="" placeholder="Email Address" required>
		</div>
		
		<div>
		<label>Phone : </label>
        <input type="text" pattern="[0-9]{10}" id="phone1" name="phone1" value="" placeholder="Phone" required="">
		</div>
		
		<div>
		<label>State : </label>
        <select name="state1">
	<option value="Alabama">Alabama</option>
	<option value="Alaska">Alaska</option>
	<option value="Arizona">Arizona</option>
	<option value="Arkansas">Arkansas</option>
	<option value="California">California</option>
	<option value="Colorado">Colorado</option>
	<option value="Connecticut">Connecticut</option>
	<option value="Delaware">Delaware</option>
	<option value="District Of Columbia">District Of Columbia</option>
	<option value="Florida">Florida</option>
	<option value="Georgia">Georgia</option>
	<option value="Hawaii">Hawaii</option>
	<option value="Idaho">Idaho</option>
	<option value="Illinois">Illinois</option>
	<option value="Indiana">Indiana</option>
	<option value="Iowa">Iowa</option>
	<option value="Kansas">Kansas</option>
	<option value="Kentucky">Kentucky</option>
	<option value="Louisiana">Louisiana</option>
	<option value="Maine">Maine</option>
	<option value="Maryland">Maryland</option>
	<option value="Massachusetts">Massachusetts</option>
	<option value="Michigan">Michigan</option>
	<option value="Minnesota">Minnesota</option>
	<option value="Mississippi">Mississippi</option>
	<option value="Missouri">Missouri</option>
	<option value="Montana">Montana</option>
	<option value="Nebraska">Nebraska</option>
	<option value="Nevada">Nevada</option>
	<option value="New Hampshire">New Hampshire</option>
	<option value="New Jersey">New Jersey</option>
	<option value="New Mexico">New Mexico</option>
	<option value="New York">New York</option>
	<option value="North Carolina">North Carolina</option>
	<option value="North Dakota">North Dakota</option>
	<option value="Ohio">Ohio</option>
	<option value="Oklahoma">Oklahoma</option>
	<option value="Oregon">Oregon</option>
	<option value="Pennsylvania">Pennsylvania</option>
	<option value="Rhode Island">Rhode Island</option>
	<option value="South Carolina">South Carolina</option>
	<option value="South Dakota">South Dakota</option>
	<option value="Tennessee">Tennessee</option>
	<option value="Texas">Texas</option>
	<option value="Utah">Utah</option>
	<option value="Vermont">Vermont</option>
	<option value="Virginia">Virginia</option>
	<option value="Washington">Washington</option>
	<option value="West Virginia">West Virginia</option>
	<option value="Wisconsin">Wisconsin</option>
	<option value="Wyoming">Wyoming</option>
</select>		
		</div>
		
		<div>
		<label>Comments : </label>
        <textarea name="comments" placeholder="Comments"></textarea>
		</div>
		
		
		<p style="padding:0;">&nbsp;</p>
		<input  type="submit" name="" value="Request Demo">
		</form>
		
    </div>
                </div>
              </div>
        </div>
    </div>
</div>
<div class="logo_holder large">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-4 col-md-3 md_center">

<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
<?php $pid = get_the_ID(); if($pid==564 || $pid==572 || $pid==577 || $pid==580 || $pid==583 || $pid==586 ){?>
<img src="<?php echo get_template_directory_uri(); ?>/images/logo3.jpg" alt="" >
<?php } else{ ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="" >
<?php } ?>
</a>

</div>
            <div class="col-lg-8 col-md-9 ">
            	<nav class="navbar">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
					<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '', 'menu_id' => '', 'container_id' => 'navbar', 'container_class' => 'navbar-collapse collapse') ); ?>
					<?php wp_nav_menu( array('theme_location'  => 'primary', 'container_class' => 'navbar-collapse collapse', 'container_id' => 'navbar', 'menu_class' => 'nav navbar-nav') ); ?>
                </nav>
            </div>
        </div>
    </div>
</div>
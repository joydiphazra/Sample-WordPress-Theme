<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
<?php $facebook_url = get_option('facebook_url'); ?>
<?php $twitter_url = get_option('twitter_url'); ?>
<?php $linked_url = get_option('linked_url'); ?>
<?php $youtube_url = get_option('youtube_url'); ?>
<?php $phone = get_option('phone'); ?>
<?php $email = get_option('email'); ?>
<?php $address = get_option('address'); ?>
<footer>
	<div class="container">
    	<div class="follow_us">
        	<div class="curve1"><img src="<?php echo get_template_directory_uri(); ?>/images/curve1.png" alt="" ></div>
            <div class="curve2"><img src="<?php echo get_template_directory_uri(); ?>/images/curve2.png" alt="" ></div>
        	<span>Follow us on</span>
			
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
        <h2><a href="#">Live Assistance</a></h2>
        
        <form action="" method="post">
        <div class="row">
        	<div class="col-sm-5"><input type="text" class="textbox1" placeholder="Your name"></div>
            <div class="col-sm-5"><input type="text" class="textbox1" placeholder="Company"></div>
            <div class="col-sm-2"><input type="submit" value="&#xf1d8;" class="submit_btn"></div>
        </div>
        </form>
        <hr>
        <div class="row">
        	<div class="col-md-4 col-sm-6 default">
            	<p><img src="<?php echo get_template_directory_uri(); ?>/images/flogo.jpg" alt="" ></p>
                <p><?php echo $address; ?></p>
            </div>
            <div class="col-md-4 col-sm-6 default">
            	<h3>information</h3>
                <div class="col-xs-6 left_border">
				<?php echo wp_nav_menu(array('menu' => 'footer1'));?>                    
                </div>
                 <div class="col-xs-6">
				 <?php echo wp_nav_menu(array('menu' => 'footer2'));?> 
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#contact_form">Contact</a></li>
                    </ul>
                </div>
            <div class="clear"></div>
            </div>
            
            <div class="col-md-4 col-sm-12">
            	<h3>contact us</h3>
                <div class="col-xs-12 left_border">
                    <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
                    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p> 
                </div>
            </div>
        </div>
    </div>
    <div class="footer_btm"><p>© MagView <?php echo date("Y"); ?> All rights reserved</p></div>
</footer>


<div id="contact_form" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 style="color:#fff;">CONTACT US</h2>
                          </div>
                          <div class="modal-body">
                           <?php echo do_shortcode('[contact-form-7 id="85" title="Home Contact Form"]'); ?>
                          </div>
                        </div>
                      </div>
                    </div>

<!-- The Modal -->
<div id="myModal123" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>&nbsp;</h2>
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
		<input  type="submit" name="" value="GET MORE INFO">
		</form>
		
    </div>
    
  </div>

</div>

<div id="myModal1" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 style="color:#fff;">REQUEST DEMO</h2>
                  </div>
                      <div class="modal-body">
	    <form name="form1" id="form1" action="<?php echo esc_url( get_template_directory_uri() ); ?>/popmail2.php" method="post">
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
		<label>Facility : </label>
        <input type="text" id="facility" name="facility" value="" placeholder="Facility" required="">
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

<script type='text/javascript'>
    $(document).ready(function() {
        if ( $(window).width() > 767) {
        $("#divId").hide();
		}else{
			$("#divId").show();
			$(".video_con").hide();
			
		}
    });

    document.getElementById('myVideo').addEventListener('ended',myHandler,false);

    function myHandler(e) {
       if ( $(window).width() > 767) {
        $("#divId").show();
        $(".video_con").hide();
		}
    }
</script>


<script type="text/javascript">
$('.flip').hover(function(){
        $(this).find('.card').toggleClass('flipped');

    });
</script>

<!--Text counter start-->
<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.counterup.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    });
</script>
<!--Text counter End-->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
	
	$("#s1").hover(function () {	
	$("#imgrotate").removeClass();
    $("#imgrotate").addClass('imagerotate1');    
}, function () {
	$("#imgrotate").removeClass('imagerotate1');
    $("#imgrotate").addClass('rotate');    
});

	$("#s2").hover(function () {	
	$("#imgrotate").removeClass();
    $("#imgrotate").addClass('imagerotate2');    
}, function () {
	$("#imgrotate").removeClass('imagerotate2');
    $("#imgrotate").addClass('rotate');    
});
	$("#s3").hover(function () {	
	$("#imgrotate").removeClass();
    $("#imgrotate").addClass('imagerotate');    
}, function () {
	$("#imgrotate").removeClass('imagerotate');
    $("#imgrotate").addClass('rotate'); 
});
	$("#s4").hover(function () {	
	$("#imgrotate").removeClass();
    $("#imgrotate").addClass('imagerotate3');    
}, function () {
	$("#imgrotate").removeClass('imagerotate3');
    $("#imgrotate").addClass('rotate'); 
});



});

</script>



<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/equal.js"></script>
<?php wp_footer(); ?>
<script type='text/javascript'>var fc_CSS=document.createElement('link');fc_CSS.setAttribute('rel','stylesheet');var fc_isSecured = (window.location && window.location.protocol == 'https:');var fc_lang = document.getElementsByTagName('html')[0].getAttribute('lang'); var fc_rtlLanguages = ['ar','he']; var fc_rtlSuffix = (fc_rtlLanguages.indexOf(fc_lang) >= 0) ? '-rtl' : '';fc_CSS.setAttribute('type','text/css');fc_CSS.setAttribute('href',((fc_isSecured)? 'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets1.chat.freshdesk.com')+'/css/visitor'+fc_rtlSuffix+'.css');document.getElementsByTagName('head')[0].appendChild(fc_CSS);var fc_JS=document.createElement('script'); fc_JS.type='text/javascript'; fc_JS.defer=true;fc_JS.src=((fc_isSecured)?'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets.chat.freshdesk.com')+'/js/visitor.js';(document.body?document.body:document.getElementsByTagName('head')[0]).appendChild(fc_JS);window.livechat_setting= 'eyJ3aWRnZXRfc2l0ZV91cmwiOiJtYWd2aWV3LmZyZXNoZGVzay5jb20iLCJwcm9kdWN0X2lkIjozMDAwMDAwMDA5NCwibmFtZSI6Ik1hZ1ZpZXciLCJ3aWRnZXRfZXh0ZXJuYWxfaWQiOjMwMDAwMDAwMDk0LCJ3aWRnZXRfaWQiOiI3YmEyNjY5ZC02NTdhLTRjZWItOTQxZi04ZTRlNzNjYzUxZTYiLCJzaG93X29uX3BvcnRhbCI6ZmFsc2UsInBvcnRhbF9sb2dpbl9yZXF1aXJlZCI6ZmFsc2UsImxhbmd1YWdlIjoiZW4iLCJ0aW1lem9uZSI6IkVhc3Rlcm4gVGltZSAoVVMgJiBDYW5hZGEpIiwiaWQiOjMwMDAwMDA2NDE4LCJtYWluX3dpZGdldCI6MCwiZmNfaWQiOiJhNmJlYThhYzEzMmZiMDUzMGUzNWEyOThlOTQ4ZDQzYyIsInNob3ciOjEsInJlcXVpcmVkIjoyLCJoZWxwZGVza25hbWUiOiJNYWdWaWV3IFN1cHBvcnQgU2VydmljZSBEZXNrIiwibmFtZV9sYWJlbCI6Ik5hbWUiLCJtZXNzYWdlX2xhYmVsIjoiTWVzc2FnZSIsInBob25lX2xhYmVsIjoiUGhvbmUiLCJ0ZXh0ZmllbGRfbGFiZWwiOiJUZXh0ZmllbGQiLCJkcm9wZG93bl9sYWJlbCI6IkRyb3Bkb3duIiwid2VidXJsIjoibWFndmlldy5mcmVzaGRlc2suY29tIiwibm9kZXVybCI6ImNoYXQuZnJlc2hkZXNrLmNvbSIsImRlYnVnIjoxLCJtZSI6Ik1lIiwiZXhwaXJ5IjowLCJlbnZpcm9ubWVudCI6InByb2R1Y3Rpb24iLCJlbmRfY2hhdF90aGFua19tc2ciOiJUaGFuayB5b3UhISEiLCJlbmRfY2hhdF9lbmRfdGl0bGUiOiJFbmQiLCJlbmRfY2hhdF9jYW5jZWxfdGl0bGUiOiJDYW5jZWwiLCJzaXRlX2lkIjoiYTZiZWE4YWMxMzJmYjA1MzBlMzVhMjk4ZTk0OGQ0M2MiLCJhY3RpdmUiOjEsInJvdXRpbmciOnsiY2hvaWNlcyI6eyJsaXN0MSI6IltcIjBcIl0iLCJsaXN0MiI6IltcIjBcIl0iLCJsaXN0MyI6IltcIjBcIl0iLCJkZWZhdWx0IjoiW1wiMzAwMDAwNTMyODVcIl0ifSwiZHJvcGRvd25fYmFzZWQiOiJmYWxzZSJ9LCJwcmVjaGF0X2Zvcm0iOjEsImJ1c2luZXNzX2NhbGVuZGFyIjpudWxsLCJwcm9hY3RpdmVfY2hhdCI6MSwicHJvYWN0aXZlX3RpbWUiOjYwLCJzaXRlX3VybCI6ImhlbHAubHVuZ3ZpZXcuY29tIiwiZXh0ZXJuYWxfaWQiOjMwMDAwMDAwMDk0LCJkZWxldGVkIjowLCJtb2JpbGUiOjEsImFjY291bnRfaWQiOm51bGwsImNyZWF0ZWRfYXQiOiIyMDE3LTA1LTI0VDIxOjEwOjM0LjAwMFoiLCJ1cGRhdGVkX2F0IjoiMjAxNy0xMC0wNVQyMDowMToxNC4wMDBaIiwiY2JEZWZhdWx0TWVzc2FnZXMiOnsiY29icm93c2luZ19zdGFydF9tc2ciOiJZb3VyIHNjcmVlbnNoYXJlIHNlc3Npb24gaGFzIHN0YXJ0ZWQiLCJjb2Jyb3dzaW5nX3N0b3BfbXNnIjoiWW91ciBzY3JlZW5zaGFyaW5nIHNlc3Npb24gaGFzIGVuZGVkIiwiY29icm93c2luZ19kZW55X21zZyI6IllvdXIgcmVxdWVzdCB3YXMgZGVjbGluZWQiLCJjb2Jyb3dzaW5nX2FnZW50X2J1c3kiOiJBZ2VudCBpcyBpbiBzY3JlZW4gc2hhcmUgc2Vzc2lvbiB3aXRoIGN1c3RvbWVyIiwiY29icm93c2luZ192aWV3aW5nX3NjcmVlbiI6IllvdSBhcmUgdmlld2luZyB0aGUgdmlzaXRvcuKAmXMgc2NyZWVuIiwiY29icm93c2luZ19jb250cm9sbGluZ19zY3JlZW4iOiJZb3UgaGF2ZSBhY2Nlc3MgdG8gdmlzaXRvcuKAmXMgc2NyZWVuLiIsImNvYnJvd3NpbmdfcmVxdWVzdF9jb250cm9sIjoiUmVxdWVzdCB2aXNpdG9yIGZvciBzY3JlZW4gYWNjZXNzICIsImNvYnJvd3NpbmdfZ2l2ZV92aXNpdG9yX2NvbnRyb2wiOiJHaXZlIGFjY2VzcyBiYWNrIHRvIHZpc2l0b3IgIiwiY29icm93c2luZ19zdG9wX3JlcXVlc3QiOiJFbmQgeW91ciBzY3JlZW5zaGFyaW5nIHNlc3Npb24gIiwiY29icm93c2luZ19yZXF1ZXN0X2NvbnRyb2xfcmVqZWN0ZWQiOiJZb3VyIHJlcXVlc3Qgd2FzIGRlY2xpbmVkICIsImNvYnJvd3NpbmdfY2FuY2VsX3Zpc2l0b3JfbXNnIjoiU2NyZWVuc2hhcmluZyBpcyBjdXJyZW50bHkgdW5hdmFpbGFibGUgIiwiY29icm93c2luZ19hZ2VudF9yZXF1ZXN0X2NvbnRyb2wiOiJBZ2VudCBpcyByZXF1ZXN0aW5nIGFjY2VzcyB0byB5b3VyIHNjcmVlbiAiLCJjYl92aWV3aW5nX3NjcmVlbl92aSI6IkFnZW50IGNhbiB2aWV3IHlvdXIgc2NyZWVuICIsImNiX2NvbnRyb2xsaW5nX3NjcmVlbl92aSI6IkFnZW50IGhhcyBhY2Nlc3MgdG8geW91ciBzY3JlZW4gIiwiY2Jfdmlld19tb2RlX3N1YnRleHQiOiJZb3VyIGFjY2VzcyB0byB0aGUgc2NyZWVuIGhhcyBiZWVuIHdpdGhkcmF3biAiLCJjYl9naXZlX2NvbnRyb2xfdmkiOiJBbGxvdyBhZ2VudCB0byBhY2Nlc3MgeW91ciBzY3JlZW4gIiwiY2JfdmlzaXRvcl9zZXNzaW9uX3JlcXVlc3QiOiJBZ2VudCBzZWVrcyBhY2Nlc3MgdG8geW91ciBzY3JlZW4gIn19';</script>
</body>
</html>
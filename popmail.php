<?php
ob_start();
include('../../../wp-blog-header.php');
global $wpdb;
$table_name = $wpdb->prefix . "form_data";
$name =$_POST['name1'];
$email =$_POST['email1'];
$phone =$_POST['phone1'];
$facility =$_POST['facility'];
$state =$_POST['state1'];
$comments =$_POST['comments'];

//insert

//$wpdb->insert($table_name,array('name'=>$name,'email'=>$email,'phone_number'=>$phone,'sate'=>$state,'comments'=>$comments),array('%s','%s','%s','%s','%s'));


$to="luminary@magview.com";

	
$subject="Demo Request";

if($_POST){	
	$msg= '<table width="480" border="0" cellspacing="0" cellpadding="0">
		  <tr style="background:#603392;padding:5px;">
			<td width="350" height="26" colspan="3" align="left" valign="top" style="padding:10px;font-weight:bold;"><font color="#fff">Magview - More Info</font></td>
		  </tr>
				  
		  <tr>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;padding:0 10px;">Name :</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">&nbsp;</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">'.$name.' </td>
		  </tr>
		  
		  <tr>
			<td height="30" align="left" valign="middle" style="background:#EDEBEB;padding:0 10px;">Email :</td>
			<td height="30" align="left" valign="middle" style="background:#EDEBEB;">&nbsp;</td>
			<td height="30" align="left" valign="middle" style="background:#EDEBEB;">'.$email.'</td>
		  </tr>
		  
		  <tr>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;padding:0 10px;">Phone :</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">&nbsp;</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">'.$phone.'</td>
		  </tr>	
		  
		  <tr>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;padding:0 10px;">Facility :</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">&nbsp;</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">'.$facility.'</td>
		  </tr>			  

		  <tr>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;padding:0 10px;">State :</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">&nbsp;</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">'.$state.'</td>
		  </tr>
		  
		  <tr>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;padding:0 10px;">Comments :</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">&nbsp;</td>
			   <td height="30" align="left" valign="middle" style="background:#EDEBEB;">'.$comments.'</td>
		  </tr>
	
		   </table>';
		  
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: php\n";
	$headers .= "From: \"". $name ."\" <abhi@virginworkz.com>\n";
	
	mail($to, stripslashes($subject), stripslashes($msg), $headers) or die("Could not send e-mail - Error A46GY7");
	header("location:http://magviewluminary.com/livesite/thank-you.php");
}
?>
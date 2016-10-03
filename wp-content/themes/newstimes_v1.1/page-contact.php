<?php /* Template Name: Contact Page */ ?>







<?php get_header(); ?> <div id="headgal">

   <div id="inside"> 

   <div id="content">	



	 

 <?php 



//If the form is submitted



if(isset($_POST['submitted'])) {







	//Check to see if the honeypot captcha field was filled in



	if(trim($_POST['checking']) !== '') {



		$captchaError = true;



	} else {



	



		//Check to make sure that the name field is not empty



		if(trim($_POST['contactName']) === '') {



			$nameError = 'You forgot to enter your name.';



			$hasError = true;



		} else {



			$name = trim($_POST['contactName']);



		}



		



		//Check to make sure sure that a valid email address is submitted



		if(trim($_POST['email']) === '')  {



			$emailError = 'You forgot to enter your email address.';



			$hasError = true;



		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {



			$emailError = 'You entered an invalid email address.';



			$hasError = true;



		} else {



			$email = trim($_POST['email']);



		}



			



		//Check to make sure comments were entered	



		if(trim($_POST['comments']) === '') {



			$commentError = 'You forgot to enter your comments.';



			$hasError = true;



		} else {



			if(function_exists('stripslashes')) {



				$comments = stripslashes(trim($_POST['comments']));



			} else {



				$comments = trim($_POST['comments']);



			}



		}



			



		//If there is no error, send the email



		if(!isset($hasError)) {







			$emailTo = ''.get_option('cmail').'';



			$subject = 'Contact Form Submission from '.$name;



			$sendCopy = trim($_POST['sendCopy']);



			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";



			$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;



			



			mail($emailTo, $subject, $body, $headers);







			if($sendCopy == true) {



				$subject = 'You emailed contact form Yourself from '.get_option('cmail').'';



				$headers = 'From: Your Name <'.get_option('cmail').'>';



				mail($email, $subject, $body, $headers);



			}







			$emailSent = true;







		}



	}



} ?>



<style>



ol.forms { float: left; list-style: none; margin: 0; width: 100%;     margin: 0 !important;}



ol.forms li { 



	clear: both; 



	float: left; 



	position: relative; padding: 7px 0 !important;



	width: 100%;



}



ol.forms label {



	cursor: pointer;



	display: block;



	float: left;



	font-weight: bold;



	padding-right: 20px;



	width: 100px;



}



ol.forms input, ol.forms textarea {



	border: 1px solid #7E8AA2;



	border-radius: 3px;



	font: inherit;



	-moz-border-radius: 3px;



	padding: 2px;



	-webkit-border-radius: 3px;



	width: 214px;



}



ol.forms textarea { height: 140px;     width: 494px; }



ol.forms input:focus, ol.forms textarea:focus { background-color: #f2f3f6; border-color: #ff9800; }



.error { color: #f00; }



ol.forms li .error { font-size: 12px; margin-left: 20px; }



ol.forms li.textarea .error {



	display: block;



	position: absolute;



	right: 0;



	top: 0;



	width: 100px;



}



ol.forms li.screenReader { margin-bottom: 0; }



ol.forms li.buttons button { 



     border-radius:6px;-moz-border-radius:6px;-khtml-border-radius:6px;-webkit-border-radius:6px;



 	background: #42B1D5;



	border: none;



	color: #fff;



	cursor: pointer;
	font: 17px "Avenir LT Std", Helvetica, Arial, sans-serif;
	overflow: hidden;
	padding: 2px 5px;
	text-transform: uppercase;
	width: auto;
}
ol.forms li.buttons button:hover { color: #eee;  }
ol.forms li.buttons button:active { left: -1px; position: relative; top: -1px; }
ol.forms li.buttons, ol.forms li.inline { float: right;    width: 530px; }
ol.forms li.inline input { width: auto; }
ol.forms li.inline label { display: inline; float: none; width: auto; }


</style>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/contact-form.js"></script> 

		<div class="post">
<?php if(isset($emailSent) && $emailSent == true) { ?>

 <div id="inside"> 

	<div class="thanks">
		<h1><?php _e("Thanks", "nt"); ?>, <?=$name;?></h1>
		<p><?php _e("Your email was successfully sent. I will be in touch soon.", "nt"); ?></p>
	</div>
	</div>
<?php } else { ?>
	<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>



  <div class="ptitle">               <h3><?php the_title(); ?>  </h3>
    </div>					             
 
<br />



   



    <div id="mycontent"> 







            <?php the_content(); ?>              



	 



		



		<?php if(isset($hasError) || isset($captchaError)) { ?>



			<p class="error"><?php _e("There was an error submitting the form", "nt"); ?><p>



		<?php } ?>



	



		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">



	



			<ol class="forms">



				<li><label for="contactName"><?php _e("Name", "nt"); ?></label>



					<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />



					<?php if($nameError != '') { ?>



						<span class="error"><?=$nameError;?></span> 



					<?php } ?>



				</li>



				



				<li><label for="email"><?php _e("Email", "nt"); ?></label>



					<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />



					<?php if($emailError != '') { ?>



						<span class="error"><?=$emailError;?></span>



					<?php } ?>



				</li>



				



				<li class="textarea"><label for="commentsText"><?php _e("Comments", "nt"); ?></label>



					<textarea name="comments" id="commentsText" rows="20" cols="30" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>



					<?php if($commentError != '') { ?>



						<span class="error"><?=$commentError;?></span> 



					<?php } ?>



				</li>



				<li class="inline"><input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> /> <label for="sendCopy"> <?php _e("Send a copy of this email to yourself", "nt"); ?></label></li>



			<table> <tr>



        



            <td>



            	<li class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit"><?php _e("Send Email", "nt"); ?></button></li>



            </td>



            </tr></table>	



			



			</ol>



		</form> </div> 



	







		<?php endwhile; ?>



	<?php endif; ?>



<?php } ?>  







 



		</div>

 

 



 </div>  </div>



 <?php include(TEMPLATEPATH . '/sidebar-archive.php'); ?>  



<?php get_footer(); ?>
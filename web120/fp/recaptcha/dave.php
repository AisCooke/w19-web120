<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "aisling.cooke@seattlcolleges.edu";  //place your/your client's email address here
$toName = "Aisling Cooke"; //place your client's name here
$website = "swordfern.dreamhosters.com/web120";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'config.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2>Your Comments Have Been Received!</h2>
        <p>Thank you for your message.</p>
        <p>We'll respond via email within 48 hours, if you requested information.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="6" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="7" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
    <div>	
		<label>
			What's your message about?<br />
			<select name="What's_your_message_about?" required="required" title="Subject is required" tabindex="8">
				<option value="">Your Subject</option>
				<option value="Vendor">Vendor</option>
				<option value="Information Request">Information Request</option>
				<option value="Stocking Request">Stocking Request</option>
				<option value="Feedback">Feedback</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="9"></textarea>
		</label>
	</div>	
	<div>
		<fieldset>
			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="10"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" tabindex="11"/> No <br />
		</fieldset>
	</div>

	<div><?=$feedback?></div>
	<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>" data-size="normal" tabindex="12" ></div>
	
	<div>
		<input type="submit" value="SUBMIT" class="button" tabindex="13" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script 
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>

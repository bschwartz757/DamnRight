<?php include ('includes/header.php');?>

<body id="contact">

<?php include ('includes/nav.php');?>

<div class="two-thirds left">
          <h2>Thank You!</h2>
          
          <h3>Your form has been submitted. Thanks so much for your interest!</h3>
          
<form action="formhandler.php" method="post"> 

<fieldset>
<legend>Enter Your Contact Information</legend>        
<p><label for="first-name">First Name </label>
<input type="text" name="first-name" id="first-name" maxlength="40" /></p>

<p><label for="last-name">Last Name </label>
<input type="text" name="last-name" id="last-name" maxlength="40" /></p>

<p><label for="email">Please enter your email (required) </label>
<input type="email" name="email" maxlength="40" required="required" /></p>
</fieldset>

<fieldset>
<legend>Helpful Info</legend>
<p>How did you find my website?
<label><input type="radio" id="google" name="button" value="Google" /> Google Search</label>

<label><input type="radio" id="friend" name="button" value="Friend" /> Friend of a Friend</label>

<label><input type="radio" id="school" name="button" value="School" /> We Met at School</label>
</p>

<p>Are you interested in any of the following (Choose all that apply):
<label><input type="checkbox" id="networking" name="checks[]" value="networking" /> Networking With Other Artists</label>

<label><input type="checkbox" id="business" name="checks[]" value="business-opportunities" /> Doing Business Together</label>

<label><input type="checkbox" id="meet" name="checks[]" value="get-together" /> Meeting Up to Talk</label>
</p>
</fieldset>

<fieldset>
<legend>Which mediums are you interested in?</legend>
<select name="projects" id="media" size="1">
	<option value="#">Choose One</option>
	<option value="photography">Photography</option>
	<option value="print">Print</option>
	<option value="jewelry">Jewelry</option>
	<option value="accessories">Accessories</option>
	<option value="design">Design</option>
    
</select>
<p><label for="comments">Any specific thoughts?</label>
<textarea name="comments" id="comments" rows="5" cols="30"></textarea></p>

<p class="button"><input type="submit" value="Submit">
</p>
</fieldset>

</form>

</div>

</section>

<?php include ('includes/footer.php');?>
<header class="custom_bold section_header border_none">Contact Us Today!</header>
<?php
if(isset($sent) && $sent == true)
{
echo "";
}else{
?>
  
  <?php if(isset($warning)){echo "$message";} ?>
  <form method="post" action="sidebar_script.php" name="contact">
    
    <label>* Name:</label><br />
			<div class="form_field">
    		<input name="name" type="text" value="<?php echo $name; ?>" size="30"/><br />
			</div>
			<div class="error">
				<!--ERRORMSG:name-->
			</div>
    <label>* Email:</label><br />
			<div class="form_field">
      	<input name="email_address" type="text" value="<?php echo $email_address; ?>" size="30"/><br />
			</div>
			<div class="error">
				<!--ERRORMSG:email_address-->
			</div>
    <label>* Telephone: (555-555-5555)</label><br />
			<div class="form_field">
      	<input name="tel" type="text" value="<?php echo $tel; ?>" size="30"/><br />
			</div>
			<div class="error">
				<!--ERRORMSG:tel-->
			</div>
			<div class="form_field_select">
    <label>Select One:</label><br /> 
      	<select name="select">
        	<option>General</option>
        	<option>Parts</option>
        	<option>Repair</option>
        	<option>Service</option>
					<option>Quarter Midgets</option>
      	</select>
			</div>
			<div class="error"></div>
    <label> Additional Comments:</label><br />
			<div class="form_field_text">
    	<textarea name="comments" cols="33" rows="6"><?php echo $comments; ?></textarea>
			</div>
<div class="clear"></div>
			<div class="form_field_button">
      <input name="submit" type="submit" value="Contact" class="btn red_button custom_regular" />
			</div>
  </form>
	<?php } ?>

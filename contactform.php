<form id="ContactMe" action="submit.php" method="post">
	<h2>Want to know about a booking?</h2>
	<p>Get in touch with us below!<br />
	<span style="font-size: 10px; font-weight: bold;">* All fields are required</span></p>
	<div class="rowElem">
		<label for="yourName">Name:</label></div>
	<div class="rowElem">
		<input id="yourName" class="validate[required,custom[onlyLetter],length[0,100]]" name="yourName" type="text" value="<?php echo $_SESSION['post']['yourName']; ?>" /></div>
	<div class="rowElem">
		<label for="emailFrom">Email:</label> </div>
	<div class="rowElem">
		<input id="emailFrom" class="validate[required,custom[email]]] text-input" name="emailFrom" type="text" value="<?php echo $_SESSION['post']['emailFrom']; ?>" /></div>
	<div class="rowElem">
		<label for="yourPhone">Phone Number:</label></div>
	<div class="rowElem">
		<input id="yourPhone" class="validate[required,length[0,100]]" name="yourPhone" type="text" value="<?php echo $_SESSION['post']['yourPhone']; ?>" /></div>
	<div class="rowElem">
		<label for="room">Room Number:</label></div>
	<div class="rowElem">
		<input id="room" class="validate[required]" name="room" type="text" value="<?php echo $_SESSION['post']['room']; ?>" /></div>
	<div class="rowElem">
		<label for="message">Notes:</label></div>
	<div class="rowElem">
		<textarea id="message" class="validate[required]" name="message" style="width: 250px; height: 150px;"><?php echo $_SESSION['post']['message']; ?></textarea></div>
	<div class="rowElem">
		<input id="submit" type="submit" value="Submit" /><input id="submitted" name="submitted" type="hidden" value="true" /></div>
	<?php echo $str; ?> <img id="loading" alt="loading" height="16" src="images/ajax-load.gif" width="16" />
</form>
<?=$success?>
<div class="clearing">
</div>

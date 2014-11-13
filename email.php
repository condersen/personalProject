<?php include 'templates/headerTemplate.php';?>
<div id="form-container">
<?php
//Check whether the form has been submitted
if (array_key_exists('check_submit', $_POST)) {
	//Converts the new line characters (\n) in the text area into HTML line breaks (the <br /> tag)
	$_POST['Comments'] = nl2br($_POST['Comments']);
	//Check whether a $_GET['Languages'] is set
	if (isset($_POST['option'])) {
		$_POST['option'] = implode(', ', $_POST['option']);
		//Converts an array into a single string
	}

	//Let's now print out the received values in the browser
	echo "name: {$_POST['Name']}<br />";
	echo "email: {$_POST['email']}<br />";
	echo "phone: {$_POST['phone']}<br /><br />";
	echo "message:<br />{$_POST['message']}<br /><br />";
   echo "option: {$_POST['option']}<br />";
} else {
	echo "You can't see this page without submitting the form.";
}
?>
</div>
<?php include 'templates/footerTemplate.php';?>
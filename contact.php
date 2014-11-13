<?php include 'templates/headerTemplate.php'; ?>

<div id="form-container">
	<form role="form" action="email.php" method="post" enctype="text/plain">
		<div class="form-group">
			<label for="name">Let me know who you are</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Name">
		</div>
		<div class="form-group">
			<label for="email">What email can I reply to?</label>
			<input type="text" class="form-control" name="email" id="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="phone">What number can I contact you with</label>
			<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
		</div>
		<div class="form-group">
			<label for="message">Tell me what you need</label>
			<textarea style="resize:none;" class="form-control" name="message" id="message" placeholder="Enter your message here!"></textarea>
		</div>
		<div class="form-group">
			<label for="times">What times would be a good time for me to respond?</label>
			</select>
			<div id="times">
				<input type="checkbox" name="option[]" value="monday">
				Monday
				<input type="checkbox" name="option[]" value="tuesday">
				Tuesday
				<input type="checkbox" name="option[]" value="wednesday">
				Wednesday
				<input type="checkbox" name="option[]" value="thursday">
				Thursday
				<input type="checkbox" name="option[]" value="friday">
				Friday
				<input type="checkbox" name="option[]" value="saturday">
				Saturday
				<input type="checkbox" name="option[]" value="sunday">
				Sunday
			</div>
		</div>
		<div class="form-group">
			<input type="button" class="btn btn-primary" id="submit" value="Send">
		</div>

		<?php

		$to = 'condersen@gmail.com';
		// subject
		$subject = 'Portfolio response from';

		// message
		$message = '
<html>
<head>
<title></title>
</head>
<body>

</body>
</html>
';

		// To send HTML mail, the Content-type header must be set
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		$headers .= 'To:' . "\r\n";
		$headers .= 'From:' . "\r\n";
		$headers .= 'Cc:' . "\r\n";
		$headers .= 'Bcc:' . "\r\n";

		// Mail it
		mail($to, $subject, $message, $headers);
		?>
	</form>
</div>
<?php include 'templates/footerTemplate.php'; ?>
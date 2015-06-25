<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order Inquiry Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src='js/script.js'></script>

	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
	<!-- Font Sacramento-->
	
</head>
<body class='contact'>
	<div id='wrapper'>

		<div id='header'>
			<p>  Please fill out the form below and we will get back to you as soon as possible.</p>
		</div>
		<div id='content'>
			<form action="#">
				<fieldset>
					<legend>Your Information</legend>
					<table>
						<tr>
							<td>First Name: </td><td><input type='text' name='fname'></td><br>
						</tr>
						<tr>	
							<td>Last Name: </td><td><input type='text' name='lname'></td><br>
						</tr>
						<tr>
							<td>Phone number: </td><td><input type='text' placeholder='optional'></td><br>
						</tr>
						<tr>
							<td>Description: </td><td><textarea rows='10' cols='50' placeholder='Please describe of bouquet/style/event/etc.'></textarea></td><br></tr>
							<tr><td><input type='submit' value='Send'></td></tr>
						</table>
					</fieldset>
				</form>
				<a href='index.php'>Back</a>
			</div>
			<div id='footer'>
				<footer>
					<p>&copy;NightJar Studio.  All content owned by Bite Me Bouquet&trade;. All Rights Reserved.</p>
				</footer>
			</div>
		</div>
	</body>
	</html>
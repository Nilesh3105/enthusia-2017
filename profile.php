<?php
require 'header.php';
if(!isset($_SESSION['logged_in'])) {
	header("Location: login.php");
	exit();
}
?>

<div class="container-fluid">
	<div class="row" style="margin-top: 10vh;">
		<div class="col-sm-offset-1 col-sm-10 col-md-offset-3 col-md-6">
			<div class="jumbotron">
				<h2>Hi <?php echo $_SESSION['name']; ?>,</h2>
				<p style="font-size: 21px; margin-left: 0.5em;">
					Your registration is complete! <br>
					Your Enthusia ID is <?php echo $_SESSION['encid']; ?>. Provide this at the registration desk to complete your registration. <br> <br>
					<center>We will contanct you for further details.</center>
				</p>
			</div>
		</div>
	</div>
</div>

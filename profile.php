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
				<p>
					<span style="font-weight: 400;">Registration:</span><br>
				</p>
				<ol style="font-size: 21px;">
					<li>
						You can select the events you want to participate in <a href="select_events.php">here</a>.
					</li>
					<li>
						Your Enthusia ID is <?php echo $_SESSION['encid']; ?>. Provide this at the registration desk to complete your registration.
					</li>
				</ol>
				<!--<center>We will contanct you for further details.</center>-->
			</div>
		</div>
	</div>
</div>

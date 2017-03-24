<?php
require 'header.php';
if(!isset($_SESSION['admin_login']) || $_SESSION['admin_login'] !== true) {
	header("Location: index.php");
	exit();
}
else if(!isset($_SESSION['enthusia_id'])) {
	header("Location: userid.php");
	exit();
}

$events_name = array(
				"cricket",
				"volley_ball",
				"football",
				"kabbdi",
				"IPL_auction",
				"kho_kho",
				"girls_cricket",
				"footsal",
				"badminton_singles",
				"badminton_doubles",
				"badminton_mixed_doubles",
				"table_tennis_single",
				"table_tennis_doubles",
				"table_tennis_mixed_doubles",
				"lawn_tennis_singles",
				"lawn_tennis_doubles",
				"lawn_tennis_mixed_doubles",
				"chess",
				"swimming",
				"long_jump",
				"high_jump",
				"shot_put",
				"weight_lifting",
				"100_meters",
				"200_meters",
				"400_meters",
				"4x100_meters"
			);
$database = new Database;
$database->query("SELECT * FROM events WHERE id = :id");
$database->bind(":id", $_SESSION['enthusia_id']);
$row = $database->single();
if($database->rowCount() == 0){
	try {
		$database->query("INSERT INTO events(id) VALUES (:id)");
		$database->bind(":id", $_SESSION['enthusia_id']);
		$database->execute();
		$database->query("SELECT * FROM events WHERE id = :id");
		$database->bind(":id", $_SESSION['enthusia_id']);
		$row = $database->single();
	}
	catch(PDOException $e){
		alert('<center><strong>Failure!</strong> An error occurred. '.$e->getMessage().'.</center>', "danger");
		exit();
	}
}
if($row['locked']==1) {
	echo '<meta http-equiv="refresh" content="0;unlock.php">';
	alert("<center>Sorry your registration is locked now. Please go to the desk if you want to change your events.</center>", "info"); ?>	
	<script type="text/javascript">
		window.onload = function() {
		  xxx();
		};
	</script>
<?php }
else {
	if(isset($_POST['event_update']))
	{
		$sql = "UPDATE events SET ";
		$temp_arr = array();
		foreach ($_POST as $key => $value) {
			if($key != "event_update")
			{
				if($key == "total1")
					$key = "total";
				$temp_arr[] = "$key = $value";
			}
		}
		$sql .= implode(", ", $temp_arr);
		$sql .= ", table_no = :table_no, locked = 1 WHERE id = :id AND locked=0";
		$database->query($sql);
		$database->bind(":table_no", $_SESSION['id']);
		$database->bind(":id", $_SESSION['enthusia_id']);
		try {
			$database->execute();
			$database->query("SELECT * FROM events WHERE id = :id");
			$database->bind(":id", $_SESSION['enthusia_id']);
			$row = $database->single();
			alert("<center><strong>Success!</strong> Event list has been updated. Please collect <strong>Rs. ".$_POST['total1']."</strong><br>Click <a href='userid.php'>here</a> to select a different enthusia id</center>");
		}
		catch(PDOException $e){
			alert('<center><strong>Failure!</strong> An error occurred. '.$e->getMessage().'.</center>', "danger");
		}
	}
}
?>

  <div class="container-fluid">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10" style="margin-top:50px;margin-bottom:50px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<p class="panel-title" style="text-align: center; font-size: 36px; line-height: 1.5;">
						Select the events you want to participate in
					</p>
				</div>
				<div class="panel-body">
					<form name="myForm" action="<?php $_SERVER['PHP_SELF']; ?>"  method="post">
						<div class="form-group">
						<?php
							foreach ($events_name as $event_name) {
						?>
							<div class="checkbox">
								<label>
									<input type="hidden" value="0" name="<?php echo $event_name; ?>"  onclick="total()" <?php if($row[$event_name]) echo "checked" ?>>
									<input  type="checkbox" value="1" name="<?php echo $event_name; ?>" id="<?php echo $event_name; ?>" onclick="total()" <?php if($row[$event_name]) echo "checked" ?>> <?php echo ucwords(str_replace("_"," ",$event_name)); ?>
								</label>
							</div>
						<?php
							}
						?>
						</div>
						<button type="submit" class="btn btn-success btn-raised btn-lg" name="event_update" value="true" id="sub_btn">Submit</button>
						<label class="pull-right" style="color: #333;">
							Total
							<input type="text" name="Total" id="Total" style="width:50px;" value="0" disabled>
							<input type="number" name="total1" id="total2" style="width:50px;" value="0" hidden="true">
						</label>
						<div class="clearfix">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>

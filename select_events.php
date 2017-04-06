<?php
include_once 'header.php';
if(!isset($_SESSION['logged_in'])) {
	header("Location: login.php");
	exit();
}
$events_name = array(
	"cricket",
	"basketball",
	"volley_ball",
	"football",
	"kabbdi",
	"IPL_auction",
	"kho_kho",
	"girls_cricket",
	"footsal",
	"battle_creed",
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
	"4x100_meters",
	);
$cat_sep = array(
	"battle_creed",
	"lawn_tennis_mixed_doubles",
	"swimming"
	);
$database = new Database;
if(isset($_POST['event_update']))
{
	$sql = "UPDATE events SET ";
	$temp_arr = array();
	foreach ($_POST as $key => $value) {
		if($key != "event_update")
		{
			$temp_arr[] = "$key = $value";
		}
	}
	$sql .= implode(", ", $temp_arr);
	$sql .= " WHERE id = :id AND locked=0";
	$database->query($sql);
	$database->bind(":id", $_SESSION['id']);
	//$database->execute();
	try {
		$database->execute();
		if($database->rowCount() > 0){
			alert("<center><strong>Success!</strong> Your event list has been updated. Please pay appropriate amount at the desk.</center>");
		}
		else {
			alert("<center>You didn't change anything!</center>", "info");
		}
	}
	catch(PDOException $e){
		alert('<center><strong>Failure!</strong> An error occurred. '.$e->getMessage().'.</center>', "danger");
	}
}

$database->query("SELECT * FROM events WHERE id = :id");
$database->bind(":id", $_SESSION['id']);
$row = $database->single();
if($database->rowCount() == 0){
	try {
		$database->query("INSERT INTO events(id) VALUES (:id)");
		$database->bind(":id", $_SESSION['id']);
		$database->execute();
		$database->query("SELECT * FROM events WHERE id = :id");
		$database->bind(":id", $_SESSION['id']);
		$row = $database->single();
	}
	catch(PDOException $e){
		alert('<center><strong>Failure!</strong> An error occurred. '.$e->getMessage().'.</center>', "danger");
	}
}
if($row['locked']==1)
	alert("<center>Sorry your registration is locked now. Please go to the desk if you want to change your events.</center>", "info");
?>

<style type="text/css">
	hr {
		border-top: 2px solid #ddd;
	}
</style>
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
										<input  type="checkbox" value="1" name="<?php echo $event_name; ?>" id="<?php echo $event_name; ?>" onclick="total()" <?php if($row[$event_name]) echo "checked" ?>> 
										<?php
											if($event_name == "battle_creed")
												$event_name = "roadies";
											echo ucwords(str_replace("_"," ",$event_name)); 
										?>
									</label>
								</div>
								<?php
								if(in_array($event_name, $cat_sep))
									echo "<hr>";
							}
							?>
						</div>
						<button type="submit" class="btn btn-success btn-raised btn-lg" name="event_update" value="true" id="sub_btn">Submit</button>
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
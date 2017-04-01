<?php
include_once 'header.php';
if(!isset($_SESSION['admin_login']) || $_SESSION['admin_login'] !== true) {
	header("Location: index.php");
	exit();
}
$database = new Database;
$database->query("SELECT `id`, `name`, `college`, `mobile`, `email` FROM users WHERE active=1");
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-offset-1 col-sm-offset-2 col-xs-10 col-sm-8" style="margin-top:50px;margin-bottom:50px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<h1>Registered Users</h1>
					</div>
				</div>
				<div class="panel-body">
						<table id="data-table" class="display table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>College</th>
									<th>Mobile</th>
									<th>Email</th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>College</th>
									<th>Mobile</th>
									<th>Email</th>
								</tr>
							</tfoot>

							<tbody>
								<?php
								$rows = $database->resultset();
								foreach ($rows as $row) {
									?>
									<tr>
										<td><?php echo $row['id']; ?></td>
										<td><?php echo $row['name']; ?></td>
										<td><?php echo $row['college']; ?></td>
										<td><?php echo $row['mobile']; ?></td>
										<td><?php echo $row['email']; ?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
				</div><!-- /.panel-body -->
			</div>
		</div>
	</div>
</div>

<!-- BEGIN PLUGINS AREA -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
<!-- END PLUGINS AREA -->


<!-- BEGIN INITIALIZATION-->
<script>
	$(document).ready(function () {
		$('#data-table').DataTable();
	});
</script>
<!-- END INITIALIZATION-->
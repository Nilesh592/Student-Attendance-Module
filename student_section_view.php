<?php 
	include "includes/header.php"; 
	include "includes/navbar.php";
	include "classes/Student.php"; 
	$stu = new Student();
?>

<?php 
	// error_reporting(0);
	$dt = $_GET['dt'];
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		 $attend = $_POST['attend'];
		 $attattend = $stu->updateAttendance($dt, $attend);
	}
?>

<div class="container-fluid">
<?php 
	if (isset($attattend)) {
		echo $attattend;
	}
?>
	<div class='alert alert-danger' style="display: none;"><strong>Error !</strong> Student Roll Missing !</div>

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Attendance</h1>
    <p class="mb-4">Here the student can only check whether he was present or absent on a particular date.</p>

	<!-- DataTable -->
	<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
        </div>
		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-info float-right" href="studentsection.php">Back</a>
				</h2>
			</div>

			<div class="card-body">
				<div class="card bg-light text-center mb-3">
					<h4 class="m-0 py-3 text-dark"><strong>Date</strong>: <?php echo $dt; ?></h4>
				</div>
				<form action="" method="post">
					<table class="table table-striped table-bordered">
						<thead class="table-dark">
							<tr>
								<th width="25%">S/L</th>
								<th width="25%">Student Name</th>
								<th width="25%">Student Roll</th>
								<th width="25%">Attendance</th>
							</tr>
						</thead> 
<?php 

	$getstudent = $stu->getAllData($dt);
	if ($getstudent) {
		$i = 0;
		while ($value = $getstudent->fetch_assoc()) {
			$i++;
?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo $value['roll']; ?></td>
								<td><?php echo $value['attend']; ?></td>
							</tr>
<?php } } ?>
						<tfoot class="text-dark">
							<tr>
								<th width="25%">S/L</th>
								<th width="25%">Student Name</th>
								<th width="25%">Student Roll</th>
								<th width="25%">Attendance</th>
							</tr>
						</tfoot> 
					</table>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
	include "includes/scripts.php"; 
    include "includes/footer.php";
?>
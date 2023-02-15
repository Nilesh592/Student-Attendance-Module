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
	<h1 class="h3 mb-2 text-gray-800">View/Update Attendance</h1>
    <p class="mb-4">Here the teacher can see and edit the attendance of students.</p>

	<!-- DataTable -->
	<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
        </div>

		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-info float-right" href="date_view.php">Back</a>
				</h2>
			</div>

			<div class="card-body">
				<div class="card bg-light text-center mb-3">
					<h4 class="m-0 py-3"><strong>Date</strong>: <?php echo $dt; ?></h4>
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
								<td>
									<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present" <?php if($value['attend'] == "present") {echo "checked";} ?>>Present
									<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent" <?php if($value['attend'] == "absent") {echo "checked";} ?>>Absent
								</td>
							</tr>
<?php } } ?>
						<tfoot class="text-dark">
							<tr>
								<th width="25%">S/L</th>
								<th width="25%">Student Name</th>
								<th width="25%">Student Roll</th>
								<th width="25%">Attendance</th>
							</tr>

							<tr>
								<td colspan="4" class="text-center">
									<input type="submit" name="submit" class="btn btn-primary px-5" value="Update">
								</td>
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
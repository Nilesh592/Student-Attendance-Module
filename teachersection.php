<?php 
	include "includes/header.php"; 
	include "includes/navbar.php";
	include "classes/Student.php"; 
	$stu = new Student();
?>

<?php 
	error_reporting(0);
	$cur_date = date('Y-m-d');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$attend = $_POST['attend'];
		$insertattend = $stu->insertAttendance($attend);
	}
?>

<div class="container-fluid">
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
?>
	<div class='alert alert-danger' style="display: none;"><strong>Error !</strong> Student Roll Missing ! Check if someone's attendance is left. </div>
		
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Attendance</h1>
	<p class="mb-4">Here the teacher can take the attendance of every student individually and we can see the report here <a target="_blank"
		href="https://localhost/group-18/studentsection.php">Attendance Report</a>.</p>

	<!-- DataTable -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
		</div>
		<div class="card">
			<div class="card-header">
			<h2>
				<a class="btn btn-success" href="add.php">Add Student</a>
				<a class="btn btn-info float-right" href="Date_view.php">Attendance Report</a>
			</h2>
		</div>

		<div class="card-body">
			<div class="card bg-light text-center mb-3">
				<h4 class="m-0 py-3 text-dark"><strong>Date</strong>: <?php echo $cur_date; ?></h4>
			</div>
			<form action="" method="post">
				<div class="table">
					<table class="table table-striped table-bordered">
						<thead class="table-dark">
							<tr>
								<th width="9%">S/L</th>
								<th width="25%">Student Name</th>
								<th width="15%">city</th>
								<th width="11%">branch</th>
								<th width="11%">division</th>
								<th width="9%">Student Roll</th>
								<th width="20%">Attendance</th>
							</tr>
						</thead>

<?php 
	$getstudent = $stu->getStudents();
	if ($getstudent) {
		$i = 0;
		while ($value = $getstudent->fetch_assoc()) {
			$i++;
?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['city']; ?></td>
						<td><?php echo $value['branch']; ?></td>
						<td><?php echo $value['division']; ?></td>
						<td><?php echo $value['roll']; ?></td>
						<td>
							<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present">Present 
							<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent">Absent
						</td>
					</tr>
<?php } } ?>

						<tfoot class="text-dark">
							<tr>
								<th width="9%">S/L</th>
								<th width="25%">Student Name</th>
								<th width="15%">city</th>
								<th width="11%">branch</th>
								<th width="11%">division</th>
								<th width="9%">Student Roll</th>
								<th width="20%">Attendance</th>
							</tr>
							<tr>
								<td colspan="7" class="text-center">
									<input type="submit" name="submit" class="btn btn-primary px-5" value="Submit">
								</td>
							</tr>
						</tfoot>		
					</table>
					<div class='alert alert-danger' style="display: none;"><strong>Error !</strong> Student Roll Missing ! Check if someone's attendance is left. </div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
	include "includes/scripts.php"; 
    include "includes/footer.php";
?>
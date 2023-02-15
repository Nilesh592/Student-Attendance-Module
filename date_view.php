<?php 
	include "includes/header.php"; 
	include "includes/navbar.php";
	include "classes/Student.php"; 
	$stu = new Student();
?>

<?php 
	$cur_date = date('Y-m-d');
?>

<div class="container-fluid">

<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
?>
	<h1 class="h3 mb-2 text-gray-800">Datewise Attendance Report</h1>
    <p class="mb-4">Here the teacher can see the date wise report of the students. please visit <a target="_blank"
        href="https://localhost/group-18/studentsection.php">Date Wise Report</a>.</p>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
        </div>

		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-success" href="teachersection.php">Take Attendance</a>
					<a class="btn btn-info float-right" href="teachersection.php">Back</a>
				</h2>
			</div>

			<div class="card-body">
				<div class="card bg-light text-center mb-3">
					<h4 class="m-0 py-3 text-dark"><strong>Date</strong>: <?php echo $cur_date; ?></h4>
				</div>

				<form action="" method="post">
					<table class="table table-striped table-bordered">
						<thead class="table-dark ">
							<tr>
								<th width="30%">S/L</th>
								<th width="50%">Attendance Date</th>
								<th width="20%">Action</th>
							</tr>
						</thead>
<?php 
	$getdate = $stu->getDateList();
	if ($getdate) {
		$i = 0;
		while ($value = $getdate->fetch_assoc()) {
			$i++;
?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['att_time']; ?></td>
							<td>
							<a class="btn btn-primary" href="student_view.php?dt=<?php echo $value['att_time']; ?>">View/Update</a>
							</td>
						</tr>

<?php } } ?>
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
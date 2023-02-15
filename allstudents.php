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
		
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">All Students</h1>
	<p class="mb-4">Here the student can see all student data present in database.</p>

	<!-- DataTable -->
	<div class="card shadow mb-4">
    	<div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
    	</div>

		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-success" href="index.php">Home</a>
					<a class="btn btn-info float-right" href="studentsection.php">Attendance Report</a>
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
									<th width="12%">S/L</th>
									<th width="29%">Student Name</th>
									<th width="19%">city</th>
									<th width="14%">branch</th>
									<th width="14%">division</th>
									<th width="12%">Student Roll</th>
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
					</tr>
<?php } } ?>

<tfoot class="text-dark">
					<tr>
                    <th width="12%">S/L</th>
						<th width="29%">Student Name</th>
						<th width="19%">city</th>
						<th width="14%">branch</th>
						<th width="14%">division</th>
						<th width="12%">Student Roll</th>
					</tr>
</tfoot>		
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
	include "includes/scripts.php"; 
    include "includes/footer.php";
?>
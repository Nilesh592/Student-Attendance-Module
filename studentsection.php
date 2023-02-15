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
	<h1 class="h3 mb-2 text-gray-800">Student Attendance Report Page</h1>
    <p class="mb-4">Here student can see only date wise attendance.</p>

	<!-- DataTable -->
	<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
        </div>

		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-success" href="allstudents.php">All Students</a>
					<a class="btn btn-info float-right" href="allstudents.php">Back</a>
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
							<a class="btn btn-primary" href="student_section_view.php?dt=<?php echo $value['att_time']; ?>">View attendance</a>
							</td>
						</tr>
<?php } } ?>
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
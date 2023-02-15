<?php 
	include "includes/header.php"; 
	include "includes/navbar.php";
	include "classes/Student.php"; 
	$stu = new Student();
?>
<?php 
	$cur_date = date('Y-m-d');
?>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$city = $_POST['city'];
		$branch = $_POST['branch'];
		$division = $_POST['division'];
		$roll = $_POST['roll'];
		$insertdata = $stu->insertStudent($name, $city, $branch, $division, $roll);
	}
?>

<div class="container-fluid">
<?php
	if (isset($insertdata)) {
		echo $insertdata;
	}
?>
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Add New Student</h1>
	<p class="mb-4">Here the teacher can add new student. You can see here whether a new student has been added or not. <a target="_blank"
    	href="https://localhost/group-18/allstudents.php">All Students</a>.</p>

	<!-- DataTable -->
	<div class="card shadow mb-4">
    	<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
        </div>

		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-success" href="allstudents.php">All Students</a>
					<a class="btn btn-info float-right" href="teachersection.php">Back</a>
				</h2>
				<div class="card bg-light text-center mb-3">
					<h4 class="m-0 py-3 bg-dark text-light"><strong>Date</strong>: <?php echo $cur_date; ?></h4>
				</div>
			</div>

			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Student Name</label>
						<input type="text" class="form-control" name="name" id="name" required="">
					</div>

					<div class="form-group">
						<label for="city">city</label>
						<input type="text" class="form-control" name="city" id="city" required="">
					</div>

					<div class="form-group">
						<label for="branch">branch</label>
						<input type="text" class="form-control" name="branch" id="branch" required="">
					</div>

					<div class="form-group">
						<label for="division">division</label>
						<input type="text" class="form-control" name="division" id="division" required="">
					</div>

					<div class="form-group">
						<label for="roll">Student Roll</label>
						<input type="text" class="form-control" name="roll" id="roll" required="">
					</div>

					<div class="form-group text-center">
						<input type="submit" name="submit" class="btn btn-primary px-5" id="roll" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php 
	include "includes/scripts.php"; 
    include "includes/footer.php";
?>
<?php 
	include "includes/header.php"; 
    include "includes/navbar.php";
    include "classes/Student.php"; 
    $stu = new Student();
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 border-left-primary py-2">
                    <img src="photos/a.jpg" class="card-img-top" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-primary text-uppercase mb-1">Teacher Section</h5>
                        <p class="card-text h5 mb-0 font-weight-bold text-gray-800">Here the teacher can take the attendance, update or view the report and can also add the students.</p>
                        <a href="teachersection.php" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-left-success py-2">
                    <img src="photos/b.png" class="card-img-top" alt="Student">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-success text-uppercase mb-1">Student Section</h5>
                        <p class="card-text h5 mb-0 font-weight-bold text-gray-800">Here student can see all student data and only date wise report. he/she doesn't have permission to update it.</p>
                        <a href="allstudents.php" class="btn btn-success">Click here</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-left-warning py-2">
                    <img src="photos/c.jpg" class="card-img-top" alt="Attendance">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-warning text-uppercase mb-1">Attendance Report</h5>
                        <p class="card-text h5 mb-0 font-weight-bold text-gray-800">You can view the attendance report here</p>
                        <a href="studentsection.php" class="btn btn-warning">Click here</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php 
	include "includes/scripts.php"; 
    include "includes/footer.php";
?>
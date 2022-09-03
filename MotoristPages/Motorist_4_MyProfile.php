<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CPS</title>
 <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <!--Responsive Css-->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'header.php'?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
				<div class="container-fluid">

                    <!-- Page Heading -->
					<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 profdiv">
					<img src="img/undraw_profile_1.svg" class="profileimg"/>
					<a href="#">Change Picture</a> - <a href="#">Remove</a>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 profdetdiv">
					<h1>Peter Fleed</h1>
					<h3>peterfleed126778@gmail.com</h3>
					<h3 class="status">Active</h3>
					</div>
					</div>
					<br/><br/><br/>
					<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">User Name</label>
						<input type="text" class="form-control" id="username" placeholder="Pflead123">
					</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Subscription</label>
						<input type="text" class="form-control" id="Subscription" placeholder="Family">
					</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">User Type</label>
						<input type="text" class="form-control" id="utype" placeholder="Student">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Language</label>
						<input type="text" class="form-control" id="language" placeholder="English">
					</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="password" class="form-control" id="password" placeholder="">
					</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Date</label>
						<input type="text" class="form-control" id="date" placeholder="mm/dd/yyyy">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Time Format</label>
						<input type="text" class="form-control" id="language" placeholder="24 Hours">
					</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Time Zone</label>
						<input type="text" class="form-control" id="tzone" placeholder="GMT(+5:00) Central Time">
					</div>
					</div>
					<div class="col">
					
					</div>
					</div>
					<div class="row">
					<div class="col">
					
					</div>
					<div class="col">
					<button type="button" class="btn btn-primary fullbutton">Save</button>
					</div>
					<div class="col">
					
					</div>
					</div>
					

                </div>
				
				
				
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           <?php include 'footer.php'?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
	 <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
	<script>
	$(document).ready(function() {
  $('.dataTable').DataTable();
});
	</script>

</body>

</html>
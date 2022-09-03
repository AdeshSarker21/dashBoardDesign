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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
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
                <?php include 'headertop.php'?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
				<div class="container-fluid">
<h2>Update Profile</h2><br/>
                    <!-- Page Heading -->
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="text" class="form-control" id="profileuname" aria-describedby="emailHelp" placeholder="Wajid Khan">
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" id="profilename" aria-describedby="emailHelp" placeholder="Wajid">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="profilemail" aria-describedby="emailHelp" placeholder="wajid.khan@gmail.com">
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Update Picture</label>
						<input type="file" class="form-control" id="profilepicture" aria-describedby="emailHelp" placeholder="Assign Garage">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Old Password</label>
						<input type="Password" class="form-control" id="oldpwdprofile" aria-describedby="emailHelp" placeholder="">
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">New Password</label>
						<input type="password" class="form-control" id="newpwdprofile" aria-describedby="emailHelp" placeholder="">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-12 col-sm-12">
					<button type="button" class="btn btn-primary fullbutton3">Update Profile</button>
					</div>
					</div>
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
	<div class="modal fade" id="viewcitationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <h5 class="modal-title" id="exampleModalLabel">Citation Details</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
				<table style="width:100%">
				<tr>
				<td>License Plate #:</td>
				<td>131313</td>
				</tr>
				<tr>
				<td>Model:</td>
				<td>5465</td>
				</tr>
				<tr>
				<td>Make:</td>
				<td>aksdlka</td>
				</tr>
				<tr>
				<td>Color:</td>
				<td>Blue</td>
				</tr>
				<tr>
				<td>Zone:</td>
				<td>LHE</td>
				</tr>
				<tr>
				<td>Violation Description:</td>
				<td>Wrong parking</td>
				</tr>
				<tr>
				<td>Fine:</td>
				<td>$ 20.00</td>
				</tr>
				<tr>
				<td>Issue Date:</td>
				<td>01/02/2022 09:45 PM</td>
				</tr>
				</table>
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
	    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
</body>
</html>
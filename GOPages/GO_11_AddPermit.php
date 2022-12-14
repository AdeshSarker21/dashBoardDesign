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
<h2>Add Permit</h2><br/>
                    <!-- Page Heading -->
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Firstname</label>
						<input type="text" class="form-control" id="permitfname" aria-describedby="emailHelp" placeholder="Enter Your First Name">
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Last Name</label>
						<input type="text" class="form-control" id="permitlastname" aria-describedby="emailHelp" placeholder="Enter your last name">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Address</label>
						<input type="text" class="form-control" id="permitaddress" aria-describedby="emailHelp" placeholder="Enter Your Address">
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">State</label>
						<select class="form-control" id="permitstate">
						  <option>State 1</option>
						  <option>State 2</option>
						</select>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">City</label>
						<select class="form-control" id="permitcity">
						  <option>City 1</option>
						  <option>City 2</option>
						</select>
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Name of Facility (School, City etc.)</label>
						<select class="form-control" id="permitfacility">
						  <option>School</option>
						  <option>City</option>
						</select>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Type (Time Frame)</label>
						<input type="text" class="form-control" id="permittf" aria-describedby="emailHelp" placeholder="Select Time Frame">
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Category</label>
						<input type="text" class="form-control" id="permitcategory" aria-describedby="emailHelp" placeholder="Enter Category">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">License Plate #</label>
						<input type="text" class="form-control" id="permitlpno" aria-describedby="emailHelp" placeholder="Enter License Plate No.">
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">License ID Number</label>
						<input type="text" class="form-control" id="permitlidno" aria-describedby="emailHelp" placeholder="Enter license ID #">
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Upload Photo of License</label>
						<input type="file" class="form-control" id="permitfile" aria-describedby="emailHelp" placeholder="Assign Garage">
					</div>
					</div>
					<div class="col-lg-6 col-sm-12">
					</div>
					</div>
					<div class="row">
					<div class="col-lg-12 col-sm-12">
					<button type="button" class="btn btn-primary fullbutton3">Add Permit</button>
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
                        <span aria-hidden="true">??</span>
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
                        <span aria-hidden="true">??</span>
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
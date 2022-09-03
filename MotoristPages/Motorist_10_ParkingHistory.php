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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="font-weight-bold text-primary cardheader"><i class="fas fa-fw fa-arrow-left"></i> &nbsp; &nbsp; &nbsp;Parking History</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Street</th>
                                            <th>City/Town</th>
                                            <th>State</th>
                                            <th>ZIP Code</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Street</th>
                                            <th>City/Town</th>
                                            <th>State</th>
                                            <th>ZIP Code</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>91 North Drive</td>
                                            <td>Shardon</td>
                                            <td>MI</td>
                                            <td>65465</td>
                                            <td>5/30/2017</td>
                                            <td>8:45 PM EST</td>
                                        </tr>
                                        <tr>
                                            <td>91 North Drive</td>
                                            <td>Shardon</td>
                                            <td>MI</td>
                                            <td>65465</td>
                                            <td>5/30/2017</td>
                                            <td>8:45 PM EST</td>
                                        </tr>
                                        <tr>
                                            <td>91 North Drive</td>
                                            <td>Shardon</td>
                                            <td>MI</td>
                                            <td>65465</td>
                                            <td>5/30/2017</td>
                                            <td>8:45 PM EST</td>
                                        </tr>
                                        <tr>
                                            <td>91 North Drive</td>
                                            <td>Shardon</td>
                                            <td>MI</td>
                                            <td>65465</td>
                                            <td>5/30/2017</td>
                                            <td>8:45 PM EST</td>
                                        </tr>
                                        <tr>
                                            <td>91 North Drive</td>
                                            <td>Shardon</td>
                                            <td>MI</td>
                                            <td>65465</td>
                                            <td>5/30/2017</td>
                                            <td>8:45 PM EST</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

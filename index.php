<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Blank</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <!--Responsive style -->
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
                    <!-- Page Heading -->
                    <img src="img/AdminDBHome.png" />
                    <h1>Welcome to the Admin Portal</h1>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <img src="img/Welcome.png" class="subimage" />
                    <h2>Welcome Tin!</h2>
                    <div class="row flexBox">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Name/ID Here</label>
                                <input type="text" class="form-control" id="searchtext" aria-describedby="emailHelp" placeholder="JEQ001">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Search by</label>
                                <select class="form-control" id="searchcriteria">
                                    <option>Client ID</option>
                                    <option>Client Address</option>
                                    <option>Client Name</option>
                                    <option>Garage ID</option>
                                    <option>Garage Name</option>
                                    <option>Floor ID</option>
                                    <option>Space ID</option>
                                    <option>Garage Address</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary fullbutton">Search</button>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row flexBox">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client Name</label>
                                <input type="text" class="form-control" id="clientname" aria-describedby="emailHelp" placeholder="Joseph Twill">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client ID</label>
                                <input type="text" class="form-control" id="clientid" aria-describedby="emailHelp" placeholder="JOE011">
                            </div>
                        </div>
                    </div>
                    <div class="row flexBox">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select class="form-control" id="status">
                                    <option>Active</option>
                                    <option>Deleted</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="clientid" aria-describedby="emailHelp" placeholder="Jtwill@gmail.com">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary fullbutton">View Garages</button>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h2>Garages</h2>
                    <div class="row flexBox">
                        <div class="col">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-warehouse"></i>
                                        <span>Edge Garage</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-warehouse"></i>
                                        <span>OH-NINE Parking</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br class="displayNone" />
                    <div class="row flexBox">
                        <div class="col">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-warehouse"></i>
                                        <span>Park Place</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-warehouse"></i>
                                        <span>Garage Parking</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br class="displayNone" />
                    <div class="row flexBox">
                        <div class="col">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-warehouse"></i>
                                        <span>Hedges Parking</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <span class="TitleSpan">Garage Name:<span class="subtitlep">Edge Garage</span></span>
                    <br /></br>
                    <div class="row flexBoxThree">
                        <div class="col">
                            <button type="button" class="btn btn-primary fullbutton customMarginThree customFontSize">Pick New Map</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary fullbutton customMarginThree customFontSize">Update Map Location</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary fullbutton customMarginThree customFontSize">View Floor Map</button>
                        </div>
                    </div>
                    <br /></br>
                    <span class="TitleSpan">Current Garage Location (NULL 0.00.00):<span class="subtitlep"><a href="#">Please Update Garage Location</a></span></span>
                    <br /></br>
                    <span class="TitleSpan">Your Current Location:<span class="subtitlep"><a href="#">337 Positive Avenue, RI, 937784 US</a></span></span>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="font-weight-bold text-primary cardheader">Garages</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>CID</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>CID</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Admin</td>
                                            <td>DAN002</td>
                                            <td class="approved">Approved</td>
                                            <td>
                                                <div class="row flexBox">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-info fullbutton2"><i class="fas fa-fw fa-pen"></i>&nbsp;&nbsp;Edit</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-danger fullbutton2"><i class="fas fa-fw fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-success fullbutton2"><i class="fas fa-fw fa-map"></i>&nbsp;&nbsp;Location</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Admin</td>
                                            <td>DAN002</td>
                                            <td class="disapproved">Disapproved</td>
                                            <td>
                                                <div class="row flexBox">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-info fullbutton2"><i class="fas fa-fw fa-pen"></i>&nbsp;&nbsp;Edit</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-danger fullbutton2"><i class="fas fa-fw fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-success fullbutton2"><i class="fas fa-fw fa-map"></i>&nbsp;&nbsp;Location</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Admin</td>
                                            <td>DAN002</td>
                                            <td class="approved">Approved</td>
                                            <td>
                                                <div class="row flexBox">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-info fullbutton2"><i class="fas fa-fw fa-pen"></i>&nbsp;&nbsp;Edit</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-danger fullbutton2"><i class="fas fa-fw fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-success fullbutton2"><i class="fas fa-fw fa-map"></i>&nbsp;&nbsp;Location</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Admin</td>
                                            <td>DAN002</td>
                                            <td class="disapproved">Disapproved</td>
                                            <td>
                                                <div class="row flexBox">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-info fullbutton2"><i class="fas fa-fw fa-pen"></i>&nbsp;&nbsp;Edit</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-danger fullbutton2"><i class="fas fa-fw fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-success fullbutton2"><i class="fas fa-fw fa-map"></i>&nbsp;&nbsp;Location</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <span class="TitleSpan">Select Location:</span>
                    <br /></br>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search navsearchmap">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small form-control2" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <br /><br />
                    <div id="map"></div>
                    <br /><br />
                    <button type="button" class="btn btn-primary fullbutton">Confirm Location</button>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly" defer></script>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = {
                lat: -25.344,
                lng: 131.031
            };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
        initMap();

    </script>
</body>

</html>

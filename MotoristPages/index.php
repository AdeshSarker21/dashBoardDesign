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
                    <img src="img/motoristhome.png" />
                    <div class="input-group mb-3 roundedgroup">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-fw fa-map"></i></span>
                        </div>
                        <input type="text" class="form-control rounded-pill centerinput" placeholder="Enter Destination Here" aria-label="Username" aria-describedby="basic-addon1">
                        <h2>Our engine will automatically find parking nearest to your destination location.</h2>
                    </div>
                </div>
                <br /><br /><br /><br class="displayNone"/><br class="displayNone"/><br class="displayNone"/><br />
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row flexBoxMotorisPages">
                        <div class="col">
                            <img src="img/Signup.png" class="subimage" />
                        </div>
                        <div class="col sidebarborder">
                            <h1>Sign up</h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Enter your last name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your emai ID">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control" id="confpassword" placeholder="">
                            </div>
                            <button type="button" class="btn btn-primary fullbutton">Sign up</button>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row flexBoxMotorisPages">
                        <div class="col">
                            <img src="img/Signup.png" class="subimage" />
                        </div>
                        <div class="col sidebarborder">
                            <h1>Login</h1>
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="lastname" placeholder="">
                            </div>
                            <button type="button" class="btn btn-primary fullbutton">Login</button>
                            <h2>Don't have an account? <a href="#">Signup</a></h2>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 profdiv">
                            <img src="img/undraw_profile_1.svg" class="profileimg" />
                            <a href="#">Change Picture</a> - <a href="#">Remove</a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 profdetdiv">
                            <h1>Peter Fleed</h1>
                            <h3>peterfleed126778@gmail.com</h3>
                            <h3 class="status">Active</h3>
                        </div>
                    </div>
                    <br /><br /><br />
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
                <hr />
                <div class="container-fluid subtextnew">
                    <!-- Page Heading -->
                    <h1>Accounts</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-user"></i>
                                        <span>Profile Details</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-credit-card"></i>
                                        <span>Billing Details</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br class="displayNone" />
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-parking"></i>
                                        <span>Parking History</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-stamp"></i>
                                        <span>Permit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br class="displayNone" />
                    <div class="row">
                        <div class="col">
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial customMargin" id="accordionSidebar">
                                <li class="nav-item">
                                    <a class="nav-link collapsed flexBoxTwo" href="#" data-toggle="collapse">
                                        <i class="fas fa-fw fa-info"></i>
                                        <span>Support</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col displayNone">
                        </div>
                    </div>
                </div>
                <hr />
                <div class="container-fluid preferencesdiv">
                    <!-- Page Heading -->
                    <h1>Preferences</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="font-weight-bold text-primary cardheader"><i class="fas fa-fw fa-arrow-left"></i> &nbsp; &nbsp; &nbsp;Priority Search</h6>
                        </div>
                        <div class="card-body">
                            <h3 class="subheading">You can choose which matters to you! Choose one or more factors</h3>
                            <hr />
                            <h3 class="subheading">Sort by (Saves Automatically)</h3>
                            <hr />
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="cheapest">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Cheapest
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="cheapest">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Cheapest
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="streetparking">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Street Parking
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="cte">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Closest to enterance
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="closest">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Closest
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="outlots">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Outdoor lots
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="handicap">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Handicap
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="highestrated">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Highest Rated
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="valet">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Valet
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="freeonly">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Free Only
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="freeparking">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Free Parking
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="font-weight-bold text-primary cardheader"><i class="fas fa-fw fa-arrow-left"></i> &nbsp; &nbsp; &nbsp;Permits</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Duration</th>
                                            <th>Section</th>
                                            <th>License Plate #</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Duration</th>
                                            <th>Section</th>
                                            <th>License Plate #</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Loise Price</td>
                                            <td>Hall Beach</td>
                                            <td>Active</td>
                                            <td>Seasonal</td>
                                            <td>1/23/2022-1/23/2022</td>
                                            <td>Lot-7</td>
                                            <td>OV5-112</td>
                                        </tr>
                                        <tr>
                                            <td>Loise Price</td>
                                            <td>Hall Beach</td>
                                            <td>Active</td>
                                            <td>Seasonal</td>
                                            <td>1/23/2022-1/23/2022</td>
                                            <td>Lot-7</td>
                                            <td>OV5-112</td>
                                        </tr>
                                        <tr>
                                            <td>Loise Price</td>
                                            <td>Hall Beach</td>
                                            <td>Active</td>
                                            <td>Seasonal</td>
                                            <td>1/23/2022-1/23/2022</td>
                                            <td>Lot-7</td>
                                            <td>OV5-112</td>
                                        </tr>
                                        <tr>
                                            <td>Loise Price</td>
                                            <td>Hall Beach</td>
                                            <td>Active</td>
                                            <td>Seasonal</td>
                                            <td>1/23/2022-1/23/2022</td>
                                            <td>Lot-7</td>
                                            <td>OV5-112</td>
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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="font-weight-bold text-primary cardheader"><i class="fas fa-fw fa-arrow-left"></i> &nbsp; &nbsp; &nbsp;Citation(s)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>License Plate #</th>
                                            <th>Date Issued</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>License Plate #</th>
                                            <th>Date Issued</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Details</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>OV5-112</td>
                                            <td>1/22/2022</td>
                                            <td>8:45 PM PST</td>
                                            <td>$ 43.00 </td>
                                            <td>Un Paid</td>
                                            <td><a href="#">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>OV5-112</td>
                                            <td>1/22/2022</td>
                                            <td>8:45 PM PST</td>
                                            <td>$ 43.00 </td>
                                            <td>Un Paid</td>
                                            <td><a href="#">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>OV5-112</td>
                                            <td>1/22/2022</td>
                                            <td>8:45 PM PST</td>
                                            <td>$ 43.00 </td>
                                            <td>Un Paid</td>
                                            <td><a href="#">PDF</a></td>
                                        </tr>
                                        <tr>
                                            <td>OV5-112</td>
                                            <td>1/22/2022</td>
                                            <td>8:45 PM PST</td>
                                            <td>$ 43.00 </td>
                                            <td>Un Paid</td>
                                            <td><a href="#">PDF</a></td>
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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="font-weight-bold text-primary cardheader"><i class="fas fa-fw fa-arrow-left"></i> &nbsp; &nbsp; &nbsp;Billing/Payments</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Package</th>
                                            <th>Type</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Amount</th>
                                            <th>Transaction ID</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Package</th>
                                            <th>Type</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Amount</th>
                                            <th>Transaction ID</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Phill Louise</td>
                                            <td>Monthly</td>
                                            <td>Credit</td>
                                            <td>5/30/2016</td>
                                            <td>5/30/2017</td>
                                            <td>$ 43.00 </td>
                                            <td>XT-235626</td>
                                        </tr>
                                        <tr>
                                            <td>Phill Louise</td>
                                            <td>Monthly</td>
                                            <td>Credit</td>
                                            <td>5/30/2016</td>
                                            <td>5/30/2017</td>
                                            <td>$ 43.00 </td>
                                            <td>XT-235626</td>
                                        </tr>
                                        <tr>
                                            <td>Phill Louise</td>
                                            <td>Monthly</td>
                                            <td>Credit</td>
                                            <td>5/30/2016</td>
                                            <td>5/30/2017</td>
                                            <td>$ 43.00 </td>
                                            <td>XT-235626</td>
                                        </tr>
                                        <tr>
                                            <td>Phill Louise</td>
                                            <td>Monthly</td>
                                            <td>Credit</td>
                                            <td>5/30/2016</td>
                                            <td>5/30/2017</td>
                                            <td>$ 43.00 </td>
                                            <td>XT-235626</td>
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

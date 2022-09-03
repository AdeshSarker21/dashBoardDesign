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
                <?php include 'headertop.php'?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <img src="img/AdminDBHome.png" />
                    <h1>Welcome to the Garage Owner Dashboard!!</h1>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i -->
                        <!-- class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Earnings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Space</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">215,000<sup>2</sup> ft</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Available Spaces
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">21,000<sup>2</sup> ft</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Occupied Space</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">194,000<sup>2</sup> ft</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Revenew (To Date)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$273,900</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Occupancy</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">338/514</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Available Parking
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">176</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                    </div>
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">Most / Least:</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 contentdivmain">
                                            Most Revenew Space: <span class="contentvalue"></span><br />
                                            Most Active Space: <span class="contentvalue">1.8 (4th floor)</span><br />
                                            Most Active Floor: <span class="contentvalue">4th floor</span><br />
                                            Most Active Floor: <span class="contentvalue">3rd floor</span><br />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 contentdivmain">
                                            Least Active Floor: <span class="contentvalue">5th Floor</span><br />
                                            Least Revenew Space: <span class="contentvalue">G1 (5th Floor)</span><br />
                                            Least Revenew Floor: <span class="contentvalue">5th Floor</span><br />
                                            Least Active Space: <span class="contentvalue">78 (5th Floor)</span><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">Time(s):</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 contentdivmain">
                                            Busiest Times: <span class="contentvalue">12:01 p.m. to 06:00 p.m.</span><br />
                                            Idle Time: <span class="contentvalue">01:01 a.m. to 05:00 a.m.</span><br />
                                            Average Stay Time: <span class="contentvalue">22 minutes</span><br />
                                            Average Open Space Time: <span class="contentvalue">45 minutes</span><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">Permit/Citations:</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 contentdivmain">
                                            Active Permit: <span class="contentvalue">1554</span><br />
                                            Pending Permit: <span class="contentvalue">79</span><br />
                                            Active Citations: <span class="contentvalue">54</span><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12 col-lg-7">
                                <!-- Bar Chart -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h4 class="m-0 font-weight-bold text-primary">Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control formc2" id="searchcriteria">
                                                        <option>18th June 2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control formc2" id="searchcriteria">
                                                        <option>Space</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control formc2" id="searchcriteria">
                                                        <option>Revenew</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control formc2" id="searchcriteria">
                                                        <option>Weekly</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chart-bar">
                                            <canvas id="myBarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12 col-lg-7">
                                <!-- Bar Chart -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h4 class="m-0 font-weight-bold text-primary">View Garages</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search navbar-search-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small formc3" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form></br></br>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card bg-primary text-white shadow shadowx">
                                                    <div class="card-body customPadding">
                                                        Flyer Parking
                                                        <div class="text-white-50 small"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card bg-primary text-white shadow shadowx">
                                                    <div class="card-body customPadding">
                                                        Lizac Lot
                                                        <div class="text-white-50 small"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="card bg-primary text-white shadow shadowx">
                                                    <div class="card-body customPadding">
                                                        Orange Oval
                                                        <div class="text-white-50 small"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3">
                                        <a href="#">
                                            <h6 class="font-weight-bold text-primary cardheader"><i class="fas fa-fw fa-arrow-left"></i> &nbsp; &nbsp; &nbsp;Go Back</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12 col-lg-7">
                                    <!-- Bar Chart -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h4 class="m-0 font-weight-bold text-primary">Price</h4>
                                        </div>
                                        <div class="card-body">
                                            <table class="ratetable">
                                                <tr>
                                                    <td>Hours</td>
                                                    <td>Rate</td>
                                                </tr>
                                                <tr>
                                                    <td>0-2 H</td>
                                                    <td>$ 1.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2-2.5 H</td>
                                                    <td>$ 2.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2.5-3 H</td>
                                                    <td>$ 4.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3-3.5 H</td>
                                                    <td>$ 7.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3.5-4 H</td>
                                                    <td>$ 8.00</td>
                                                </tr>
                                                <tr>
                                                    <td>4-4.5 H</td>
                                                    <td>$ 9.00</td>
                                                </tr>
                                                <tr>
                                                    <td>>5 H</td>
                                                    <td>$ 11.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Lost Ticket</td>
                                                    <td>$ 12.00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Content Row -->
                        </div>
                        <hr />
                        <div class="container-fluid">
                            <h2>Add Manager</h2><br />
                            <!-- Page Heading -->
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <select class="form-control formc2" id="titlemanager">
                                            <option>Manager</option>
                                            <option>Owner</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" class="form-control" id="usernamemanager" aria-describedby="emailHelp" placeholder="Enter your username">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" id="fullnamemanager" aria-describedby="emailHelp" placeholder="Enter Full Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="text" class="form-control" id="emailmanager" aria-describedby="emailHelp" placeholder="Assign Garage">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <select class="form-control" id="garageselectmanager">
                                            <option>Garage Name</option>
                                            <option>Garage Name 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" id="passwordmanager" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" class="form-control" id="Cpasswordmanager" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <button type="button" class="btn btn-danger fullbutton3">Cancel</button>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <button type="button" class="btn btn-primary fullbutton3">Add Manager</button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="container-fluid">
                            <h2>Add Citation</h2><br />
                            <!-- Page Heading -->
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">License Plate #</label>
                                        <input type="text" class="form-control" id="citationplate" aria-describedby="emailHelp" placeholder="Enter Your License Plate No.">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Make</label>
                                        <input type="text" class="form-control" id="citationmake" aria-describedby="emailHelp" placeholder="Enter your make">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Model</label>
                                        <input type="text" class="form-control" id="citationmodel" aria-describedby="emailHelp" placeholder="Enter Your model">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Color</label>
                                        <input type="text" class="form-control" id="citationcolor" aria-describedby="emailHelp" placeholder="Enter your color">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Zone</label>
                                        <input type="text" class="form-control" id="citationzone" aria-describedby="emailHelp" placeholder="Enter Zone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Violation Description</label>
                                        <select class="form-control formc2" id="citationvd">
                                            <option>VD Type 1</option>
                                            <option>VD Type 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">File</label>
                                        <input type="text" class="form-control" id="citationfine" aria-describedby="emailHelp" placeholder="$20.00">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Issue Date</label>
                                        <input type="text" class="form-control" id="citationdate" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Attach a file</label>
                                        <input type="file" class="form-control" id="citationfile" aria-describedby="emailHelp" placeholder="Assign Garage">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <button type="button" class="btn btn-primary fullbutton3">Add Citation</button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="container-fluid subtextnew">
                            <!-- Page Heading -->
                            <h1>View Citation</h1><br />
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial sidebarspecialX customWidth customMargin" id="accordionSidebar">
                                        <li class="nav-item">
                                            <a class="nav-link collapsed flexBoxGoPagesOne" href="#" data-toggle="collapse">
                                                <span>13132132</span>
                                                <i class="fas fa-fw fa-eye faslocation" data-toggle="modal" data-target="#viewcitationModal"></i>
                                                <i class="fas fa-fw fa-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial sidebarspecialX customWidth customMargin" id="accordionSidebar">
                                        <li class="nav-item">
                                            <a class="nav-link collapsed flexBoxGoPagesOne" href="#" data-toggle="collapse">
                                                <span>6546546546</span>
                                                <i class="fas fa-fw fa-eye faslocation" data-toggle="modal" data-target="#viewcitationModal"></i>
                                                <i class="fas fa-fw fa-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br class="displayNone">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial sidebarspecialX customWidth customMargin" id="accordionSidebar">
                                        <li class="nav-item">
                                            <a class="nav-link collapsed flexBoxGoPagesOne" href="#" data-toggle="collapse">
                                                <span>345348945</span>
                                                <i class="fas fa-fw fa-eye faslocation" data-toggle="modal" data-target="#viewcitationModal"></i>
                                                <i class="fas fa-fw fa-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sidebarspecial sidebarspecialX customWidth" id="accordionSidebar">
                                        <li class="nav-item">
                                            <a class="nav-link collapsed flexBoxGoPagesOne" href="#" data-toggle="collapse">
                                                <span>8879789789</span>
                                                <i class="fas fa-fw fa-eye faslocation" data-toggle="modal" data-target="#viewcitationModal"></i>
                                                <i class="fas fa-fw fa-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="container-fluid">
                            <h2>Add Permit</h2><br />
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
                        <hr />
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12 col-lg-7">
                                    <!-- Bar Chart -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3 ">
                                            <h4 class="m-0 font-weight-bold text-primary">View Garages</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card bg-primary text-white shadow shadowx">
                                                        <div class="card-body customPadding flexBoxGoPagesOneFontSize">
                                                            <i class="fas fa-fw fa-eye"></i><br /><br />
                                                            View Now
                                                            <div class="text-white-50 small"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card bg-primary text-white shadow shadowx">
                                                        <div class="card-body customPadding flexBoxGoPagesOneFontSize">
                                                            <i class="fas fa-fw fa-car"></i><br /><br />
                                                            Floor
                                                            <div class="text-white-50 small"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card bg-primary text-white shadow shadowx">
                                                        <div class="card-body customPadding flexBoxGoPagesOneFontSize">
                                                            <i class="fas fa-fw fa-tags"></i><br /><br />
                                                            Rates
                                                            <div class="text-white-50 small"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card bg-primary text-white shadow shadowx">
                                                        <div class="card-body customPadding flexBoxGoPagesOneFontSize">
                                                            <i class="fas fa-fw fa-building"></i><br /><br />
                                                            Business Hours
                                                            <div class="text-white-50 small"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <h6 class="font-weight-bold text-primary cardheader">View Managers</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Admin</td>
                                                    <td>DAN002</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <button type="button" class="btn btn-danger fullbutton2"><i class="fas fa-fw fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                            </div>
                                                            <div class="col">
                                                                <button type="button" class="btn btn-info fullbutton2"><i class="fas fa-fw fa-pen"></i>&nbsp;&nbsp;Edit</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Admin</td>
                                                    <td>DAN002</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <button type="button" class="btn btn-danger fullbutton2"><i class="fas fa-fw fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                            </div>
                                                            <div class="col">
                                                                <button type="button" class="btn btn-info fullbutton2"><i class="fas fa-fw fa-pen"></i>&nbsp;&nbsp;Edit</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Admin</td>
                                                    <td>DAN002</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <button type="button" class="btn btn-danger fullbutton2"><i class="fas fa-fw fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                            </div>
                                                            <div class="col">
                                                                <button type="button" class="btn btn-info fullbutton2"><i class="fas fa-fw fa-pen"></i>&nbsp;&nbsp;Edit</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Admin</td>
                                                    <td>DAN002</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col">
                                                                <button type="button" class="btn btn-danger fullbutton2"><i class="fas fa-fw fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                                            </div>
                                                            <div class="col">
                                                                <button type="button" class="btn btn-info fullbutton2"><i class="fas fa-fw fa-pen"></i>&nbsp;&nbsp;Edit</button>
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
                            <h2>Update Profile</h2><br />
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
                <div class="modal fade" id="viewcitationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

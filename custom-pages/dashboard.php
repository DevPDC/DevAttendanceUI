<?php
date_default_timezone_set('Asia/Manila');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Basic Card | Bootstrap Based Admin Template - Material Design</title>
    <!-- STYLES LOCATION - DEVNOTE -->

    <?php
        include('partials/_styles.php');
    ?>

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

</head>

<body class="theme-black">
    <!-- Page Loader -->
        <?php
            require('partials/_page-loader.php');
        ?>
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Search Bar -->
        <!-- SEARCHBAR LOCATION - DEVNOTE -->
    <!-- #END# Search Bar -->

    <!-- Top Bar -->
        <?php
            require('partials/_navbar.php')
        ?>
    <!-- #Top Bar -->

    <section>


        <!-- Left Sidebar -->
        <?php
            include('partials/_left-sidebar.php');
        ?>
            <!-- LEFT SIDEBAR LOCATION - DEVNOTE -->
        <!-- #END# Left Sidebar -->

        <!-- ------------------ -->


        <!-- Right Sidebar -->
            <!-- RIGHT SIDEBAR LOCATION - DEVNOTE -->
        <!-- #END# Right Sidebar -->


    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MY DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">ASSIGNED TASKS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">25</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">visibility</i>
                        </div>
                        <div class="content">
                            <div class="text">MONITORED BY YOU</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">50</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">TASKS CREATED</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">14</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-sm-12">

                </div>
                <div class="col-lg-12 col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="row clearfix">
                <!-- ANALYTICS -->
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <!-- ANALYTICS HEADER -->
                    <div class="block-header">
                        <h2>
                            ANALYTICS
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</small>
                        </h2>
                    </div>
                    <div class="body">
                        <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                        <canvas id="bar_chart" height="362" style="display: block; width: 725px; height: 362px;" width="725"></canvas>
                    </div>
                </div>
                <!-- ANALYTICS END -->

                <!-- DTR LOG -->
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                            <h5 class="font-sycopate text-center">
                                <?php echo date('D'.", ".'F j, Y'); ?>
                            </h5>
                            <h2 class="text-center font-quicksand">
                                <?php echo date('h:i A') ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <button class="btn btn-lg btn-success btn-block font-raleway" type="button">
                                TIME IN
                            </button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 font-raleway" type="button">
                            <button class="btn btn-lg btn-danger btn-block font-raleway" type="button">
                                TIME OUT
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="card table-responsive">
                        <div class="header">
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="timer">
                                        <i class="material-icons">loop</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" width="100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Time In</th>
                                        <th>Time Out</th>
                                        <th>Accomplishment Report</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Oct 23 2020</th>
                                        <td>8:03 AM</td>
                                        <td>5:41 PM</td>
                                        <td>Submitted</td>
                                    </tr>
                                    <tr>
                                        <th>Oct 22 2020</th>
                                        <td>8:07 AM</td>
                                        <td>6:30 PM</td>
                                        <td>Submitted</td>
                                    </tr>
                                    <tr>
                                        <th>Oct 21 2020</th>
                                        <td>7:49 AM</td>
                                        <td>5:32 PM</td>
                                        <td>Submitted</td>
                                    </tr>
                                    <tr>
                                        <th>Oct 20 2020</th>
                                        <td>8:25 AM</td>
                                        <td>5:25 PM</td>
                                        <td>Submitted</td>
                                    </tr>
                                    <tr>
                                        <th>Oct 19 2020</th>
                                        <td>8:01 AM</td>
                                        <td>5:16 PM</td>
                                        <td>Submitted</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- DTR LOG END -->
                
            </div>
        </div>
    </section>
    <!-- JAVASCRIPTS LOCATION - DEVNOTE -->
    <?php
        require('partials/_scripts.php');
    ?>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    
    <script src="../js/pages/tables/jquery-datatable.js"></script>
</body>
</html>

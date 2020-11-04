<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Attendance Monitoring - Task Monitoring Dashboard</title>
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
                <h2>
                    
                    TASK MONITORING DASHBOARD

                </h2>
            </div>
            <hr>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card table-responsive">
                        <div class="header">
                            <h2>
                                Projects 
                                <small>Description text here...</small>
                            </h2>
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
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>First Project</td>
                                    </tr>
                                    <tr>
                                        <td>Second Project</td>
                                    </tr>
                                    <tr>
                                        <td>Third Project</td>
                                    </tr>
                                    <tr>
                                        <td>Fourth Project</td>
                                    </tr>
                                    <tr>
                                        <td>Fifth Project</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card table-responsive">
                        <div class="header">
                            <h2>
                                Staff 
                                <small>Description text here...</small>
                            </h2>
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
                                        <th>Name</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Juan Dela Cruz</td>
                                        <td><span class="badge bg-teal">Working</span></td>
                                    </tr>
                                    <tr>
                                        <td>Pedro Dela Cruz</td>
                                        <td><span class="badge bg-red">Absent</span></td>
                                    </tr>
                                    <tr>
                                        <td>Juana Calunsod</td>
                                        <td><span class="badge bg-teal">Working</span></td>
                                    </tr>
                                    <tr>
                                        <td>Padre Damaso</td>
                                        <td><span class="badge bg-orange">Idle</span></td>
                                    </tr>
                                    <tr>
                                        <td>Crisostomo Ibarra</td>
                                        <td><span class="badge bg-teal">Woking</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card table-responsive">
                        <div class="header">
                            <h2>
                                Tasks 
                                <small>Description text here...</small>
                            </h2>
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
                                        <th>Task</th>
                                        <th>Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Create a Dashboard</td>
                                        <td>Normal</td>
                                    </tr>
                                    <tr>
                                        <td>Report Generator</td>
                                        <td>
                                            <span class="badge bg-red">
                                                High
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Budget Automation</td>
                                        <td>
                                            <span class="badge bg-red">
                                                High
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Create Payment Form</td>
                                        <td>Normal</td>
                                    </tr>
                                    <tr>
                                        <td>Integrate with CoreMIS systems</td>
                                        <td>
                                            <span class="badge bg-red">
                                                High
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Card - With Loading -->
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

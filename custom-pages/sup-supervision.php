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
                    STAFF MONITORING DASHBOARD
                </h2>
            </div>
            <hr>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                        <th width="20%">Employee Name</th>
                                        <th width="30%">Tasks</th>
                                        <th width="10%">Status</th>
                                        <th width="10%">Time</th>
                                        <th width="10%">Priority</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="20%">Juan Dela Cruz</td>
                                        <td width="30%">
                                            <button class="btn-sm bg-teal btn-block" type="button">Create a Report Generator</button>
                                        </td>
                                        <td width="10%">
                                            <span class="badge bg-teal">
                                                Working
                                            </span>
                                        </td>
                                        <td width="10%">
                                            3:15 hours
                                        </td>
                                        <td width="10%">
                                            <span class="badge bg-red">
                                                HIGH
                                            </span>
                                        </td>
                                        <td width="20%">
                                        <button type="button" class="btn bg-blue-grey waves-effect">
                                            <i class="material-icons">search</i>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Pedro Dela Peña</td>
                                        <td width="30%">
                                            <button class="btn-sm bg-teal btn-block" type="button">Design a normalized database</button>
                                        </td>
                                        <td width="10%">
                                            <span class="badge bg-orange">
                                                Idle
                                            </span>
                                        </td>
                                        <td width="10%">
                                            4:25 hours
                                        </td>
                                        <td width="10%">
                                            <span class="badge bg-red">
                                                HIGH
                                            </span>
                                        </td>
                                        <td width="20%">
                                        <button type="button" class="btn bg-blue-grey waves-effect">
                                            <i class="material-icons">search</i>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Padre Damaso</td>
                                        <td width="30%">
                                            <button class="btn-sm bg-teal btn-block" type="button">Create a process flow</button>
                                        </td>
                                        <td width="10%">
                                            <span class="badge bg-teal">
                                                Working
                                            </span>
                                        </td>
                                        <td width="10%">
                                            2:12 hours
                                        </td>
                                        <td width="10%">
                                            <span class="badge bg-red">
                                                HIGH
                                            </span>
                                        </td>
                                        <td width="20%">
                                        <button type="button" class="btn bg-blue-grey waves-effect">
                                            <i class="material-icons">search</i>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Juana Vicensio</td>
                                        <td width="30%">
                                            <button class="btn-sm bg-teal btn-block" type="button">Redesign System UI</button>
                                        </td>
                                        <td width="10%">
                                            <span class="badge bg-green">
                                                Completed
                                            </span>
                                        </td>
                                        <td width="10%">
                                            2:25 hours
                                        </td>
                                        <td width="10%">
                                            <span class="badge bg-blue">
                                                Normal
                                            </span>
                                        </td>
                                        <td width="20%">
                                        <button type="button" class="btn bg-blue-grey waves-effect">
                                            <i class="material-icons">search</i>
                                        </button>
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

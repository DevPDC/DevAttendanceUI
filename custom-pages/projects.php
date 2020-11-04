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
                    
                    PROJECT PLAN

                </h2>
            </div>
            <!-- #END# Basic Card - With Loading -->
            <hr>
            <!-- #END# Basic Card - With Loading -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <table class="table table-hover table-striped table-condensed dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th width="30%">Project</th>
                                        <th width="10%">Timeline</th>
                                        <th width="15%">Tasks Owner/s</th>
                                        <th width="10%">Total Tasks</th>
                                        <th width="10%">Status</th>
                                        <th width="10%">Priority</th>
                                        <th width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        <a href="show-project.php">
                                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">folder_open</i>
                                            CoreMIS Sub-System
                                        </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-blue-grey">
                                                Jan 2021 - July 2021
                                            </span>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="image image-circle">
                                                    <img src="../images/user.png" width="48" height="48" alt="User" />
                                                    <img src="../images/suave.png" width="48" height="48" alt="User" />
                                                    <img src="../images/suave2.jpg" width="48" height="48" alt="User" />
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">assignment</i>
                                                15 Tasks
                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-teal">
                                                In Progress
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-red">
                                                High
                                            </span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn bg-blue-grey waves-effect">
                                                <i class="material-icons">search</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <a href="show-project.php">
                                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">folder_open</i>
                                            CoreMIS Sub-System 2
                                        </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-blue-grey">
                                                Jan 2021 - Aug 2021
                                            </span>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="image image-circle">
                                                    <img src="../images/suave.png" width="48" height="48" alt="User" />
                                                    <img src="../images/suave2.jpg" width="48" height="48" alt="User" />
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">assignment</i>
                                                11 Tasks
                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-teal">
                                                In Progress
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-blue">
                                                Normal
                                            </span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn bg-blue-grey waves-effect">
                                                <i class="material-icons">search</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <a href="show-project.php">
                                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">folder_open</i>
                                            CoreMIS Sub-System 3
                                        </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-blue-grey">
                                                July 2020 - Dec 2020
                                            </span>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="image image-circle">
                                                    <img src="../images/user.png" width="48" height="48" alt="User" />
                                                    <img src="../images/suave.png" width="48" height="48" alt="User" />
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">assignment</i>
                                                7 Tasks
                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-green">
                                                Complete
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-blue">
                                                Normal
                                            </span>
                                        </td>
                                        <td>
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
        </div>
    </section>
    <!-- JAVASCRIPTS LOCATION - DEVNOTE -->
    <?php
        require('partials/_scripts.php');
    ?>
</body>
</html>

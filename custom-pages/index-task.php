<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Tasks | Create New Task</title>
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
            require('partials/_left-sidebar.php');
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
                    
                    MY TASKS

                </h2>
            </div>
            <hr>
            <!-- #END# Basic Card - With Loading -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">

                    <div class="card">
                        <div class="header">
                            <a href="create-task.php" class="btn bg-teal btn-md" width="200px">
                                Add New Task
                            </a>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" width="100%">
                                <thead>
                                    <tr>
                                        <th width="5%">Task #</th>
                                        <th width="20%">Summary</th>
                                        <th width="10%">Status</th>
                                        <th width="10%">Estimated Hours</th>
                                        <th width="25%">Details</th>
                                        <th width="15%">Project</th>
                                        <th width="5%">Priority</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <button class="btn-sm bg-teal btn-block" type="button">Redesign System UI</button>
                                        </td>
                                        <td>
                                            Working
                                        </td>
                                        <td>
                                            2:25
                                        </td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere ex dui, pulvinar vestibulum nulla euismod sit amet. Cras congue elit a nisi imperdiet sollicitudin. Proin varius enim sed erat tempus, at tincidunt magna semper. Vivamus erat mauris, sollicitudin at varius quis, imperdiet at tortor. Ut imperdiet turpis vitae ornare egestas. Nunc lacinia erat magna, id egestas mi commodo quis. Nunc tincidunt neque a ipsum venenatis, vitae porta lacus laoreet. Nulla venenatis quis magna in pharetra. Maecenas lobortis augue accumsan neque semper euismod. In eu lacus sapien. 
                                        </td>
                                        <td>
                                            <a href="#" class="vertical-align: middle; line-height:50px">
                                                <i class="material-icons">folder_open</i> CoreMIS Subsystem
                                            </a>
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

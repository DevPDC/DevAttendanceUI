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

    <!-- ADDITIONAL STYLES FOR THIS PAGE -->

    <link href="../plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

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
            require('partials/_navbar.php');
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
                    
                    NEW TASK CREATION

                </h2>
                More Form Elements- <a href="https://gurayyarar.github.io/AdminBSBMaterialDesign/pages/forms/advanced-form-elements.html" target="_blank">https://gurayyarar.github.io/AdminBSBMaterialDesign/pages/forms/advanced-form-elements.html</a> 
            </div>
            <hr>
            <!-- #END# Basic Card - With Loading -->
            <div class="row clearfix">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-xm-12">
                <div class="card">
                    <div class="header">
                        <span class="float-right">
                            <a class="btn bg-blue-grey" href="index-task.php">
                                Back
                            </a>
                            <button class="btn bg-teal">
                                Create Task
                            </button>
                            <button class="btn bg-red">
                                Clear
                            </button>
                        </span>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
                                <div class="block-header">
                                    <h2>
                                        TASK DETAILS
                                    </h2>
                                </div>
                                <label class="form-label" style="margin-left:10px">Project:</label>
                                <select class="form-control show-tick border-bottom-dark text-center">
                                    <option value="10">Projects 1</option>
                                    <option value="20">Projects 2</option>
                                    <option value="30">Projects 3</option>
                                    <option value="40">Projects 4</option>
                                    <option value="50">Projects 5</option>
                                </select>
                                <br><br>
                                <div class="form-line">
                                    <label class="form-label" style="margin-left:10px">Summary:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <br><br>
                                <div class="form-line">
                                    <label class="form-label" style="margin-left:10px">Details:</label>
                                    <textarea id="tinymce" class="form-control"></textarea>
                                </div>
                                <br><br>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
                                        <div class="form-line">
                                            <label class="form-label" style="margin-left:10px">Status:</label>
                                            <select class="form-control show-tick border-bottom-dark text-center">
                                                <option value="10">Working</option>
                                                <option value="20">Idle</option>
                                                <option value="30">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
                                        <div class="form-line">
                                            <label class="form-label" style="margin-left:10px">Percentage:</label>
                                            <select class="form-control show-tick border-bottom-dark text-center">
                                                <option value="10">10%</option>
                                                <option value="20">20%</option>
                                                <option value="30">30%</option>
                                                <option value="10">40%</option>
                                                <option value="10">50%</option>
                                                <option value="10">60%</option>
                                                <option value="10">70%</option>
                                                <option value="10">80%</option>
                                                <option value="10">90%</option>
                                                <option value="10">100%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
                                <div class="block-header">
                                    <h2>
                                        ESTIMATES
                                    </h2>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-line">
                                            <label class="form-label" style="margin-left:10px">Start Date:</label>
                                            <div class="form-group">
                                                <div class="form-line" id="bs_datepicker_container">
                                                    <input type="text" class="form-control datepicker" placeholder="Please choose a date...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-line">
                                            <label class="form-label" style="margin-left:10px">End Date:</label>
                                            <div class="form-group">
                                                <div class="form-line" id="bs_datepicker_container">
                                                    <input type="text" class="form-control datepicker" placeholder="Please choose a date...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-line">
                                            <label class="form-label" style="margin-left:10px">Priority Level:</label>
                                            <select class="form-control show-tick border-bottom-dark text-center">
                                                <option value="10">Normal</option>
                                                <option value="20">High</option>
                                                <option value="30">...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-1">
            </div>
            </div>
        </div>
    </section>
    <!-- JAVASCRIPTS LOCATION - DEVNOTE -->
    <?php
        require('partials/_scripts.php');
    ?>
    <!-- ADDITIONAL SCRIPTS FOR THIS PAGE -->

    <!-- Multi Select Plugin Js -->
    <script src="../plugins/multi-select/js/jquery.multi-select.js"></script>
    <script src="../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="../js/custom-plugins/create-tasks-plugins.js"></script>
    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../js/pages/forms/editors.js"></script>
    <script src="../js/pages/forms/basic-form-elements.js"></script>
    <script src="../js/pages/forms/advanced-form-elements.js"></script>
</body>
</html>

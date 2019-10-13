<!doctype html>
<html lang="en">
<head>
    <?php include('./src/template/include/header.php') ?>
    <title>Hello, world!</title>
</head>
<body>
<div class="d-flex" id="wrapper">
    <?php include('./src/template/include/sidebar.php') ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <?php include('./src/template/include/navbar.php') ?>
        <div class="container-fluid">
            <!-- page title-->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="card page-title">Dashboard</div>
                </div>
            </div>
            <!-- main content -->
            <div class="row pt-3">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-dashboard mb-3 p-1 bg-warning">
                        <div class="row no-gutters">
                            <div class="col-md-4 col-sm-12 text-center align-self-center">
                                <i class="material-icons fs-5">group</i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below.</p>
                                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-dashboard mb-3 p-1 bg-danger text-white">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center align-self-center">
                                <i class="material-icons fs-5">access_alarm</i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-white">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below.</p>
                                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-dashboard mb-3 p-1 bg-info text-white">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center align-self-center">
                                <i class="material-icons fs-5">account_balance</i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below.</p>
                                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-dashboard mb-3 p-1 bg-success text-white">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center align-self-center">
                                <i class="material-icons fs-5">android</i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below.</p>
                                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-dashboard mb-3 p-1 bg-primary text-white">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center align-self-center">
                                <i class="material-icons fs-5">backup</i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-white">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below.</p>
                                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-dashboard mb-3 p-1">
                        <div class="row no-gutters">
                            <div class="col-md-4 text-center align-self-center">
                                <i class="material-icons fs-5">dashboard</i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below.</p>
                                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Menu Toggle Script -->
<?php include('./src/template/include/footerscripts.php') ?>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>

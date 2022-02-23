<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TN Admin - home</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include("navbar_admin.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="col-sm-8 col-md-12 text-right">
                        <button type="button" class="btn btn-outline-primary"><i class="far fa-user">&nbsp;&nbsp;<?php echo $_SESSION['username'] ?></i></button>
                    </div>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage the table</h1>
                    </div>
                    <br>


                    <?php include("admin_menu_table.php"); ?>
                    <br>
                    <!-- Content Row -->
                    <div class="row">
                        <?php foreach ($Menu as $rs) { ?>
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <?php if ($rs->status == "open") { ?>
                                    <div class="card border-left-success shadow h-100 py-2">
                                    <?php } else { ?>
                                        <div class="card border-left-danger shadow h-100 py-2">
                                        <?php } ?>
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">

                                                    <span style="text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;OrderNo:&nbsp;<?php echo $rs->Id; ?></span>
                                                    
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo site_url('Welcome/admin_opentable/') . $rs->Id; ?>"><?php echo $rs->Table; ?></a></div>

                                                    <span>วันที่&nbsp;<?php echo $rs->Date; ?></span>
                                                    <span>เวลา&nbsp;<?php echo $rs->Time; ?></span>
                                                    <?php if ($rs->status == "open") { ?>
                                                        <span class="badge bg-success  text-light">สถานะ&nbsp;<?php echo $rs->status; ?></span>
                                                    <?php } else { ?>
                                                        <span class="badge bg-danger  text-light">สถานะ&nbsp;<?php echo $rs->status; ?></span>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <?php } ?>




                            </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->



        <!-- Bootstrap core JavaScript-->
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../../vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../../js/demo/chart-area-demo.js"></script>
        <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>
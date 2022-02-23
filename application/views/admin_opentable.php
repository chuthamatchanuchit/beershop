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
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">orders</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="col-auto">
                                    <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="row">
                                                <?php foreach ($detail as $index => $rs) {
                                                    $sum[] = $rs->Num * $rs->Price; ?>

                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo site_url('Welcome/admin_opentable/') . $rs->Id; ?>"></a></div>
                                                    <div class="col-4"> <span><?php echo $rs->Name; ?></span></div>
                                                    <div class="col-4"> <span><?php echo $rs->Num; ?></span></div>
                                                    <div class="col-4"> <span><?php echo $rs->Price; ?>&nbsp;บาท</span></div>
                                                    </td>

                                                <?php } ?>

                                            </div>
                                            <div class="row d-flex justify-content-end">
                                                <div class="col-4">
                                                    <p class="fs-4 ">ราคารวม&nbsp;<?= array_sum($sum); ?> บาท</p>
                                                </div>
                                            </div>
                                            <?php if ($rs->status == "open") { ?>
                                                <a href="<?php echo site_url('Welcome/close/') . $rs->Id; ?>"><button type="button" class="btn btn-warning">ปิดบิล</button></a>
                                                <a href="<?php echo site_url('Welcome/slip/') . $rs->Id; ?>"><button type="button" class="btn btn-success">ปริ้นใบเสร็จ</button></a>

                                            <?php } else { ?>
                                                <a href=""><button type="button" class="btn btn-secondary" disabled>ปิดบิล</button></a>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>





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
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/chart-area-demo.js"></script>
    <script src="../../../js/demo/chart-pie-demo.js"></script>

</body>

</html>
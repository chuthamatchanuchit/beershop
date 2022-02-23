<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TN Admin - add </title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
    .boxx {
        width: 47%;
        height: 73vh;
        margin: 70px 20%;
        padding: 2% 4%;
        position: relative;
        justify-content: space-evenly;
        background-color: #DCDCDC;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: box-shadow, transform;
        transition-property: box-shadow, transform;
    }

    .p {
        font-size: 10px;
        text-align: right;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include("navbar_admin.php"); ?>



        <div class="boxx">
            <form action="<?php echo site_url('Welcome/addimg'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                <p class="p">ประเภท : 1=เครื่องดื่ม 2=อาหาร 3=ชุดเซ็ต</p>
                <center>
                    <h3>Add Menu</h3>
                </center>
                <br>
                <p>รูปภาพ : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="img" class="from-control"> </p>
                <br>
                <p>ชื่อเมนู : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="m_name" class="from-control"> </p>
                <br>
                <p>ราคา : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="m_price" class="from-control"> </p>
                <br>
                <p>ประเภท : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="m_category" class="form-select" aria-label="Default select example">
                        <option selected>เลือกประเภท เมนู</option>
                        <?php foreach ($type as $rs) { ?>
                            <option value="<?php echo $rs->c_id; ?>"><?= $rs->c_name; ?></option>
                        <?php } ?>
                    </select>
                </p>


                <br>

                <center><button type="submit" class="btn btn-outline-primary" onclick="return confirm('ยืนยัน');">Update</button></center>
        </div>
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
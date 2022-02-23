<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  <title>TN Admin - add </title>

  <!-- Custom fonts for this template-->
  <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
  .card {
    margin: auto;
  }

  .p {
    font-size: 10px;
    text-align: right;
  }

  .btn {
    width: 110px;
    height: 38px;
  }
</style>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include("navbar_admin.php"); ?>


    <div class="container">
      <form action="<?php echo site_url('Welcome/editdata'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
        <br><br>
        <h2>Edit Menu</h2><br>
        <div class="card" style="width:400px">
          <img id="image1" src="<?php echo base_url('img'); ?>/<?php echo $query->m_img; ?>" width="tranparent" height="325px">
          <div class="card-body">
            <br>
            <p> รูปภาพ : <input onchange="viewcard()" type="file" name="img" class="from-control" value="<?php echo $query->m_img; ?>"> </p>

            <input type="hidden" name="oldimg" class="from-control" value="<?php echo $query->m_img; ?>">

            <p> ชื่อเมนู : <input type="text" name="m_name" class="form-control" value="<?php echo $query->m_name; ?>"> </p>
            <p> ราคา : <input type="text" name="m_price" class="form-control" value="<?php echo $query->m_price; ?>"> </p>

            <input type="hidden" name="m_id" class="from-control" value="<?php echo $query->m_id; ?>">
            <center><a href="<?php echo site_url('Welcome/admin_menu'); ?>" class="btn btn-warning" role="button">ย้อนกลับ</a>
              <button type="submit" class="btn btn-primary" onclick="return confirm('ยืนยัน');">แก้ไข</button>
            </center>
          </div>
        </div>
        <br>
    </div>
  </div>
  <!-- End of Page Wrapper -->


  <script type="text/javascript">
    function viewcard() {
      const preview = document.querySelector('#image1');
      const file = document.querySelector('input[name=img]').files[0];
      const reader = new FileReader();


      reader.addEventListener("load", function() {
        // convert image file to base64 string
        preview.src = reader.result;
      }, false);

      if (file) {
        reader.readAsDataURL(file);
      }
    }
  </script>

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
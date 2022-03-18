<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TN Admin - Menu</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
  .table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4e73df;
    color: white;
  }
</style>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include("navbar_admin.php"); ?>

    <div class="container">
      <br><br>

      <center>
        <h2>Menu</h2>
      </center>
      <br>
      <center>
        <form name="searchform" id="searchform" method="POST" action="../Welcome/search" class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
          <input name="searchmenu" id="searchmenu" class="form-control form-control w-75" type="text" placeholder="ค้นหาชื่อเมนู / ประเภทอาหาร" aria-label="Search">
          &nbsp;&nbsp;<div class="dropdown">
            <button type="button" class="form-control dropdown-toggle" data-toggle="dropdown">
              ประเภท
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo site_url('Welcome/admin_menu'); ?>">ทั้งหมด</a>
              <a class="dropdown-item" href="<?php echo site_url('Welcome/showDrink1'); ?>">เครื่องดื่ม</a>
              <a class="dropdown-item" href="<?php echo site_url('Welcome/showFood1'); ?>">อาหาร</a>
              <a class="dropdown-item" href="<?php echo site_url('Welcome/showSet1'); ?>">ชุดเซ็ต</a>
            </div>
          </div>
        </form>
      </center>
      <br>

      <br>
      <table class="table">
        <thead>
          <tr>
            <th>รูปภาพ</th>
            <th>ชื่อเมนู</th>
            <th>ราคา</th>
            <th>ประเภท</th>
            <th width="200"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php foreach ($Menu as $rs) { ?>
          <tr>
            <td><img src="<?php echo base_url('img'); ?>/<?php echo $rs->m_img; ?>" width="75px" height="77px"> </td>
            <td><?php echo $rs->m_name; ?></td>
            <td><?php echo $rs->m_price; ?>&nbsp; บาท</td>
            <td><?php echo $rs->c_name; ?></td>
            <td><a href="<?php echo site_url('Welcome/del/') . $rs->m_id; ?>" ><button type="button" class="btn btn-danger">Delete</button></a>
              <a href="<?php echo site_url('Welcome/edit/') . $rs->m_id; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
            </td>
          </tr>
        <?php } ?>
        </tr>
        </tbody>
      </table>
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
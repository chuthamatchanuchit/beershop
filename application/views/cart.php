<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  body {
    background: #A770EF;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }

  @media screen and (max-width: 600px) {
    table {
      border: 0;
    }

    table caption {
      font-size: 1.3em;
    }

    table thead {
      border: none;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }

    table tr {
      border-bottom: 3px solid #ddd;
      display: block;
      margin-bottom: .625em;
    }

    table td {
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: .8em;
      text-align: right;
    }

    table td::before {
      /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }

    table td:last-child {
      border-bottom: 0;
    }

    td:nth-of-type(1):before {
      content: "รูปภาพ";
    }

    td:nth-of-type(2):before {
      content: "ชื่อเมนู";
    }

    td:nth-of-type(3):before {
      content: "ราคา";
    }

    td:nth-of-type(4):before {
      content: "จำนวน";
    }

    td:nth-of-type(5):before {
      content: "ราคารวม";
    }

    .alltotal:nth-of-type(1):before {
      content: "";
    }
  }
</style>

<body>
  <?php include("header.php"); ?>
  <br><br><br><br>
  <div class="container">
    <br>
    <h1>Cart</h1>
    <br>
    <form action="<?php echo site_url('Welcome/cart/'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
      <table class="table table-responsive  table-hover">
        <thead>
          <tr>
            <th>รูปภาพ</th>
            <th>ชื่อเมนู</th>
            <th>ราคา</th>
            <th>จำนวน</th>
            <th>ราคารวม</th>

          </tr>
        </thead>
        <?php if ($items == null || "") { ?>
          <h2 class="text-danger">ไม่มีสินค้าในตระกร้า</h2>
        <?php  } else { ?>
          <tbody>
            <tr>
            </tr>

            <?php foreach ($items as $item) { ?>
              <tr>
                <td> <img src="<?php echo base_url('img'); ?>/<?php echo $item['m_img']; ?>" width="75px" height="77px"> </td>

                <td><?php echo $item['m_name']; ?></td>
                <td><?php echo $item['m_price']; ?></td>
                <td><a href="<?php echo base_url('index.php/Welcome/delcart/' . $item['m_id']); ?>" class="btn btn-danger" role="submit">-</a>
                  <input type="number" min="0" max="10" value="<?php echo $item['quantity']; ?>">

                  <a href="<?php echo base_url('index.php/Welcome/addcart/' . $item['m_id']); ?>" class="btn btn-success" role="submit">+</a>
                </td>


                <td><?php echo $item['m_price'] * $item['quantity']; ?></td>


              </tr>
            <?php } ?>

            <tr>

            <tr>
              <td class="alltotal" colspan="6" align="right">รวมทั้งหมด &nbsp; <?php echo $total; ?> บาท</td>
            </tr>

            </tr>
          <?php } ?>
          </tbody>
      </table>



  </div>
  <br>

  <center> <a href="<?php echo site_url('Welcome/menu'); ?>" class="btn btn-primary" role="button">
      << ย้อนกลับ</a>
        <?php if ($items == null || "") { ?>

        <?php  } else { ?>
          <a href="<?php echo site_url('Welcome/recript_ins'); ?>" class="btn btn-success" id="confirmcart" role="button" data-toggle="modal" data-target="#myModal">บันทึกรายการสั่งซื้อ>></a></center>
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4  class="modal-title">ยืนยันการสั่งซื้อ</h4>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        <a href="<?php echo site_url('Welcome/recript_ins'); ?>" class="btn btn-success" role="button" >ยืนยัน</a></center>
       
          <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
        </div>

      </div>
    </div>
  </div>
          <?php } ?>
<br>


<!-- Vendor JS Files -->
<script src="../../assets/vendor/purecounter/purecounter.js"></script>
<script src="../../assets/vendor/aos/aos.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
</body>

</html>
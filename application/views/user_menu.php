<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Menu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


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
  /*  Helper Styles */
  body {
    font-family: "Liberation Mono";
    background: #A770EF;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }

  h1 {
    font-size: 42px;
  }

  a {
    text-decoration: none;
  }

  /* Card Styles */

  .card-sl {
    width: 270px;
    border-radius: 10px;
    box-shadow: 0 18px 32px 0 rgba(0, 0, 0, 0.2), 0 18px 32px 0 rgba(0, 0, 0, 0.19);
  }

  .card-image img {
    max-height: 100%;
    max-width: 100%;
    border-radius: 8px 8px 0px 0;
  }

  .card-action {
    position: relative;
    float: right;
    margin-top: -25px;
    margin-right: 20px;
    z-index: 2;
    color: #E26D5C;
    background: #fff;
    border-radius: 100%;
    padding: 15px;
    font-size: 15px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
  }

  .card-action:hover {
    color: #fff;
    background: #E26D5C;
    -webkit-animation: pulse 1.5s infinite;
  }

  .card-heading {
    font-size: 18px;
    font-weight: bold;
    background: #fff;
    padding: 10px 15px;
  }

  .card-text {
    padding: 10px 15px;
    background: #fff;
    font-size: 16px;
    color: #000000;
  }

  .card-button {
    display: flex;
    justify-content: center;
    padding: 10px 0;
    width: 100%;
    background-color: #483D8B;
    color: #fff;
    border-radius: 0 0 8px 8px;
  }

  .card-button:hover {
    text-decoration: none;
    background-color: #6A5ACD;
    color: #fff;

  }

  @-webkit-keyframes pulse {
    0% {
      -moz-transform: scale(0.9);
      -ms-transform: scale(0.9);
      -webkit-transform: scale(0.9);
      transform: scale(0.9);
    }

    70% {
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -webkit-transform: scale(1);
      transform: scale(1);
      box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
    }

    100% {
      -moz-transform: scale(0.9);
      -ms-transform: scale(0.9);
      -webkit-transform: scale(0.9);
      transform: scale(0.9);
      box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
    }
  }
</style>
<?php include("header.php"); ?>

<body id="page-top">
  <br>
  <div class="container" style="margin-top:50px;">
    <center>
      <h1><b>Menu</b1>
      </h1>
    </center>
    <br>
    <center>
      <form name="searchform" id="searchform" method="POST" action="../welcome/searchmenu" class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
        <i class="fas fa-arrow-left"></i><input name="searchmenu" id="searchmenu" class="form-control form-control w-75" type="text" placeholder="ค้นหาชื่อเมนู / ประเภท " aria-label="Search">
        &nbsp;&nbsp;<div class="dropdown">
          <button type="button" class="form-control dropdown-toggle" data-toggle="dropdown">
            ประเภท
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('Welcome/menu'); ?>">ทั้งหมด</a>
            <a class="dropdown-item" href="<?php echo site_url('Welcome/showDrink'); ?>">เครื่องดื่ม</a>
            <a class="dropdown-item" href="<?php echo site_url('Welcome/showFood'); ?>">อาหาร</a>
            <a class="dropdown-item" href="<?php echo site_url('Welcome/showSet'); ?>">ชุดเซ็ต</a>
          </div>
        </div>


      </form>
    </center>

    <center>
      <div class="row match-height">
        <?php if ($Menu) : ?>
          <?php foreach ($Menu as $rs) : ?>
            <div class="col-lg-3 col-md-12">
              <br>
              <div class="card-sl">
                <div class="card-image">
                  <center><img src="<?php echo base_url('img'); ?>/<?php echo $rs->m_img; ?>" width="270px" height="234px">
                </div>

                <div class="card-heading">
                  <?php echo $rs->m_name; ?>
                </div>
                <div class="card-text">
                  <?php echo $rs->m_price; ?> &nbsp; บาท
                </div>


                <a href="<?php echo base_url('index.php/Welcome/buy/' . $rs->m_id); ?>" class="card-button">สั่งซื้อ</a>

              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
  </div>

  </center>
  <br>
  <center><a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary" role="button">
      << ย้อนกลับ</a>
        <a href="<?php echo site_url('Welcome/cart'); ?>" class="btn btn-primary" role="button">ตะกร้าสินค้า >></a></center>
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
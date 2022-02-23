<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cart</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../../assets/css/style.css" rel="stylesheet">

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
      content: "เลขโต๊ะ";
    }

    td:nth-of-type(2):before {
      content: "วันที่";
    }

    td:nth-of-type(3):before {
      content: "เวลา";
    }

    td:nth-of-type(4):before {
      content: "สถานะ";
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

        <?php if ($list == null) { ?>
            <h2 class="text-danger">ประวัติการสั่งซื้อ </h2>
<br><br>
                    <center>
                        <h4>ไม่มีข้อมูล</h4>
                    </center>

                </tbody>
            </table>
        <?php } else { ?>

        <?php foreach ($list as $item) {
            $tel =   $item->customer_tel;
        }
        ?>
        <h2 class="text-danger">ประวัติการสั่งซื้อ ผู้ใช้ : <?= $tel ?></h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Order</th>
                    <th scope="col">เลขโต๊ะ</th>
                    <th scope="col">วันที่</th>
                    <th scope="col">เวลา</th>
                    <th scope="col">สถานะ</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $item) { ?>
                    <tr>

                        <th scope="row"><?php echo $item->Number; ?></th>
                        <td><?php echo $item->Table; ?></td>
                        <td><?php echo $item->Date; ?></td>
                        <td><?php echo $item->Time; ?></td>

                        <td>
                            <span class="badge bg-success"> ชำระเงินแล้ว</span>
                        </td>
                        <td>
                            <a href="<?php echo site_url('Welcome/bill_detail/') . $item->Number; ?>" class="btn btn-primary">รายละเอียด</a>
                        </td>
                    <?php } ?>
                    </tr>

            </tbody>
        </table>
        <?php } ?>
    </div>

    <br>





</body>

</html>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../assets/css/style.css" rel="stylesheet">

    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>ใบเสร็จชำระเงิน</title>

    <style>
        @font-face {
            font-family: 'Sukhumvit';
            src: url('../assets/FontSukhumvit/sukhumvitset-light-webfont.eot');
            src: url('../assets/FontSukhumvit/sukhumvitset-light-webfont.eot?#iefix') format('embedded-opentype'), url('../assets/FontSukhumvit/sukhumvitset-light-webfont.woff2') format('woff2'), url('../assets/FontSukhumvit/sukhumvitset-light-webfont.woff') format('woff'), url('../assets/FontSukhumvit/sukhumvitset-light-webfont.ttf') format('truetype'), url('../assets/FontSukhumvit/sukhumvitset-light-webfont.svg#opunregular') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        td {
            font-family: "Sukhumvit";
        }

        body {
            background: #A770EF;
            background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
            background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
        }

        body {
            background: #A770EF;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .btn {
            padding: 3px 20px 4px 20px;
        }

        .table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            color: #000000;
        }

        h1 {
            color: #FF0000;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ffc451;
            color: black;
        }

        .modal {
            color: black;
        }
    </style>

</head>
<?php
$number_table = $this->session->userdata("number_table");

?>

<body>

    <script type="text/javascript">
        var show = function() {
            $('#myModal').modal('show');
        };

        /* กำหนดเวลาหลังเปิดหน้าเว็บ ว่าจะให้แสดงหลังโหลดหน้าเว็บแล้วกี่วินาที  เช่น 2000 = 2 วิ */
        $(window).load(function() {
            var timer = window.setTimeout(show, 1000);
        });
    </script>

    </br></br></br>
    <div class="container text-center mt-2">
        <div class="row mt-2">
            <div class="col-md-12">
                <h3 class="font-weight-bold">ร้านติดหนึบ</h3>
                <h5 class="font-weight-bold">88/14 ถนน สวนตะไคร้ ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม เบอร์โทร : 0863713338 </h5>
                <br>
                <h4 class="font-weight-bold">ใบเสร็จเก็บเงิน</h4>
                <div class="text-center">
                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
                    <a href="<?php echo site_url('Welcome/closetable/') . $number_table; ?>" class="btn btn-danger" id="print-btn">สิ้นสุดการสั่งซื้อ</a>
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <?php
            foreach ($rs as $rs_detail) {
            ?>
                <div class="col">
                    <h5 class="font-weight-bold">เลขที่: <?= $rs_detail['Number'] ?></h5>

                </div>
                <div class="col">
                    <h5 class="font-weight-bold">โต๊ะ: <?= $rs_detail['Table'] ?></h5>
                </div>
            <?php } ?>
        </div>
        <div class="row mt-2">
            <?php
            foreach ($rs as $rs_detail) {
            ?>
                <div class="col">
                    <h5 class="font-weight-bold"> วันที่: <?= $rs_detail['Date'] ?></h5>

                </div>
                <div class="col">
                    <h5 class="font-weight-bold"> เวลา: <?= $rs_detail['Time'] ?></h5>
                </div>
            <?php } ?>
        </div>
        <div class="row mt-3">
            <div class="col" style="overflow-x:auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-left" scope="col">
                                <h5 class="font-weight-bold">รายการ</h5>
                            </th>
                            <th scope="col">
                                <h5 class="font-weight-bold text-center">จำนวน</h5>
                            </th>
                            <th scope="col">
                                <h5 class="font-weight-bold text-right">ราคา</h5>
                            </th>
                            <th scope="col">
                                <h5 class="font-weight-bold text-right">รวม</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rs2 as $rs2_detail) {
                        ?>
                            <tr>
                                <td class="text-left">
                                    <h6 class="font-weight-bold"><?= $rs2_detail['Name'] ?></h6>
                                </td>
                                <td class="text-center">
                                    <h6 class="font-weight-bold"><?= $rs2_detail['Num'] ?></h6>
                                </td>
                                <td class="text-right">
                                    <h6 class="font-weight-bold"><?= $rs2_detail['Price'] ?></h6>
                                </td>
                                <td class="text-right">
                                    <h6 class="font-weight-bold"><?= $sumprice[] = $rs2_detail['Num'] * $rs2_detail['Price'] ?></h6>
                                </td>
                            </tr>
                        <?php

                        }
                        ?>
                        <tr>
                            <td class="text-left">
                                <h5 class="font-weight-bold">ยอดอาหาร/สินค้า</h5>
                            </td>
                            <td class="text-right" colspan="3">
                                <h5 class="font-weight-bold"><?= array_sum($sumprice); ?> บาท</h5>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col text-right">
                <h4 class="font-weight-bold" style="text-decoration: underline">รวมทั้งสิ้น <?= array_sum($sumprice); ?> บาท</h4>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h6 class="font-weight-bold">ขอขอบคุณ</h6>
            </div>
        </div>
        <hr>

    </div>
    <!-- modal -->

    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <center class="modal-body">
                    <a href="<?php echo site_url('Welcome/closetable/') . $number_table; ?>" class="btn btn-danger btn-lg" id="print-btn">สิ้นสุดการสั่งซื้อ</a>
                   
                </center>

            </div>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


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
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
</style>

<body>
    <?php include("header.php"); ?>
    <br><br><br><br>
    <div class="container">
        <?php foreach ($list as $item) {
            $number =   $item->Number;
        }
        ?>
        <h2 class="text-danger">ประวัติการสั่งซื้อ Order ID : <?= $number ?></h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">เมนู</th>
                    <th scope="col">จำนวน</th>
                    <th scope="col">ราคา</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0;
                foreach ($list as $item) {
                    $i++;

                ?>
                    <tr>

                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $item->Name; ?></td>
                        <td><?php echo $item->Num; ?></td>
                        <td><?php echo $item->Price * $item->Num; ?></td>

                        <td>
                            <?php $sumprice[] = $item->Price * $item->Num; ?>
                        </td>

                    <?php } ?>
                    </tr>
                    <tr>
                        <td class="alltotal" colspan="6" align="right">รวมทั้งหมด &nbsp; <?= array_sum($sumprice); ?> บาท</td>
                    </tr>
            </tbody>
        </table>
    </div>

    <br>





</body>

</html>
<?php $em = $_SESSION['username'] ?>

<?php foreach ($detail as $index => $rs) {


    $id = $rs->Id;
    $number = $rs->Number;
    $table = $rs->Table;
    $date = $rs->Date;
    $time = $rs->Time;
    $order = $rs->Name;
} ?>

<div id="showScroll" class="container">

    <div class="receipt">
        <h1 class="logo">ร้านติดหนึบ</h1>
        <div class="address">
            <?= $date ?>&nbsp; 88/14 ถนน สวนตะไคร้
            <P>&nbsp; ตำบล วังตะกู อำเภอเมืองนครปฐม นครปฐม เบอร์โทร : 0863713338
        </div>

        <div class="transactionDetails">
            <div class="detail">ID </div>
            <div class="detail"><?= $id ?></div>
            <div class="detail">เลขที่</div>
            <div class="detail"><?= $number ?></div>

        </div>

        <div class="transactionDetails">
            Helped by: <?= $em ?>
        </div>
        <div class="centerItem bold">
            <div class="item">List Order <?= $table ?> </div>
        </div>
        <?php $i = 1;
        foreach ($detail as $index => $rs) {
            $sum[] = $rs->Num * $rs->Price; ?>

            <div class="transactionDetails">
                <div class="detail">#<?php echo $i++; ?>&nbsp;<?php echo $rs->Name; ?> #:&nbsp;&nbsp;<?php echo $rs->Price; ?> </div>
            </div>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rs->Num; ?> ITEM</p>
            <div class="paymentDetails bold">
                <div class="detail">TOTAL</div>
                <div class="detail"><?php echo $rs->Num * $rs->Price; ?></div>
            </div>

            <div class="paymentDetails">
                <div class="detail">***************</div>

            </div>

        <?php } ?>
        <div class="centerItem bold">
            <div class="item">ALL TOTAL PRICE &nbsp; <?= array_sum($sum); ?> BAHT</div>
        </div>





        <style>
            * {
                margin: 0;
                box-sizing: border-box;
                font-family: "VT323", monospace;
                color: #1f1f1f;
            }

            .container {
                background: #f1f1f1;
                padding: 20px 10px;
            }

            .bold {
                font-weight: bold;
            }

            .center {
                text-align: center;
            }

            .receipt {
                width: 300px;
                min-height: 100vh;
                height: 100%;
                background: #fff;
                margin: 0 auto;
                box-shadow: 5px 5px 19px #ccc;
                padding: 10px;
            }

            .logo {
                text-align: center;
                padding: 20px;
            }

            .barcode {
                font-family: "Libre Barcode 128", cursive;
                font-size: 42px;
                text-align: center;
            }

            .address {
                text-align: center;
                margin-bottom: 10px;
            }

            .transactionDetails {
                display: flex;
                justify-content: space-between;
                margin: 0 10px 10px;
            }

            .transactionDetails .detail {
                text-transform: uppercase;
            }

            .centerItem {
                display: flex;
                justify-content: center;
                margin-bottom: 8px;
            }

            .survey {
                text-align: center;
                margin-bottom: 12px;
            }

            .survey .surveyID {
                font-size: 20px;
            }

            .paymentDetails {
                display: flex;
                justify-content: space-between;
                margin: 0 auto;
                width: 150px;
            }

            .creditDetails {
                margin: 10px auto;
                width: 230px;
                font-size: 14px;
                text-transform: uppercase;
            }

            .receiptBarcode {
                margin: 10px 0;
                text-align: center;
            }

            .returnPolicy {
                margin: 10px 20px;
                width: 220px;
                display: flex;
                justify-content: space-between;
            }

            .coupons {
                margin-top: 20px;
            }

            .tripSummary {
                margin: auto;
                width: 255px;
            }

            .tripSummary .item {
                display: flex;
                justify-content: space-between;
                margin: auto;
                width: 220px;
            }

            .feedback {
                margin: 20px auto;
            }

            .feedback h3.clickBait {
                font-size: 30px;
                font-weight: bold;
                text-align: center;
                margin: 10px 0;
            }

            .feedback h4.web {
                font-size: 20px;
                font-weight: bold;
                text-align: center;
                margin: 10px 0;
            }

            .feedback .break {
                text-align: center;
                font-size: 18px;
                font-weight: bold;
                margin: 10px 0;
            }

            .couponContainer {
                border-top: 1px dashed #1f1f1f;
                margin-bottom: 20px;
            }

            .couponContainer .discount {
                font-size: 35px;
                text-align: center;
                margin-bottom: 10px;
            }

            .couponContainer .discountDetails {
                font-size: 20px;
                text-align: center;
                margin-bottom: 15px;
            }

            .couponContainer .barcode {
                margin: 10px 0 0;
            }

            .couponContainer .legal {
                font-size: 12px;
                margin-bottom: 12px;
            }

            .couponContainer .barcodeID {
                margin-bottom: 8px;
            }

            .couponContainer .expiration {
                display: flex;
                justify-content: space-between;
                margin: 10px;
            }

            .couponContainer .couponBottom {
                font-size: 13px;
                text-align: center;
            }
        </style>
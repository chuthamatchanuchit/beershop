<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sweet alert</title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
     <script>
       setTimeout(function() {
        swal({
            title: "ล็อคอินไม่สำเร็จ",
            type: "error"
        }, function() {
          window.location.href = "admin_login"; //หน้าที่ต้องการให้กระโดดไป
        });
    },);
</script>
</body>
</html>
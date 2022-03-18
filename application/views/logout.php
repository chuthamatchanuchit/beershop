<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Logout successfully</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#success_tic").modal('show');
    });
  </script>
</head>
<style>
  .button {
    display: inline-block;
    border-radius: 4px;
    background-color: #4CAF50;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }

  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .button:hover span {
    padding-right: 25px;
  }

  .button:hover span:after {
    opacity: 1;
    right: 0;
  }

  body {
    background-color: #e6e6e6;
    width: 100%;
    height: 100%;
  }

  #success_tic .page-body {
    max-width: 500px;
    height: 400px;
    background-color: #FFFFFF;
    margin: 10% auto;
  }

  #success_tic .page-body .head {
    text-align: center;
  }

  /* #success_tic .tic{
  font-size:186px;
} */
  #success_tic .close {
    opacity: 1;
    position: absolute;
    right: 0px;
    font-size: 30px;
    padding: 3px 15px;
    margin-bottom: 10px;
  }

  #success_tic .checkmark-circle {
    width: 150px;
    height: 150px;
    position: relative;
    display: inline-block;
    vertical-align: top;
  }

  .checkmark-circle .background {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background: #1ab394;
    position: absolute;
  }

  #success_tic .checkmark-circle .checkmark {
    border-radius: 5px;
  }

  #success_tic .checkmark-circle .checkmark.draw:after {
    -webkit-animation-delay: 300ms;
    -moz-animation-delay: 300ms;
    animation-delay: 300ms;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-name: checkmark;
    -moz-animation-name: checkmark;
    animation-name: checkmark;
    -webkit-transform: scaleX(-1) rotate(135deg);
    -moz-transform: scaleX(-1) rotate(135deg);
    -ms-transform: scaleX(-1) rotate(135deg);
    -o-transform: scaleX(-1) rotate(135deg);
    transform: scaleX(-1) rotate(135deg);
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  #success_tic .checkmark-circle .checkmark:after {
    opacity: 1;
    height: 75px;
    width: 37.5px;
    -webkit-transform-origin: left top;
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -o-transform-origin: left top;
    transform-origin: left top;
    border-right: 15px solid #fff;
    border-top: 15px solid #fff;
    border-radius: 2.5px !important;
    content: '';
    left: 35px;
    top: 80px;
    position: absolute;
  }

  @-webkit-keyframes checkmark {
    0% {
      height: 0;
      width: 0;
      opacity: 1;
    }

    20% {
      height: 0;
      width: 37.5px;
      opacity: 1;
    }

    40% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }

    100% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
  }

  @-moz-keyframes checkmark {
    0% {
      height: 0;
      width: 0;
      opacity: 1;
    }

    20% {
      height: 0;
      width: 37.5px;
      opacity: 1;
    }

    40% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }

    100% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
  }

  @keyframes checkmark {
    0% {
      height: 0;
      width: 0;
      opacity: 1;
    }

    20% {
      height: 0;
      width: 37.5px;
      opacity: 1;
    }

    40% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }

    100% {
      height: 75px;
      width: 37.5px;
      opacity: 1;
    }
  }
</style>

<body>
  <div id="success_tic" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="page-body">
          <div class="head">
            <br>
            <h2 id="logouttitle" style="margin-top:5px;">ออกจากระบบเเล้ว</h2>
          </div><br>
          <h1 style="text-align:center;">
            <div class="checkmark-circle">
              <div class="background"></div>
              <div class="checkmark draw"></div>

            </div>
            <h1><br>
              <center><span><a href="<?php echo site_url('Welcome/logout/'); ?><?php echo $number_table ?>"><button class="button" id="userlogout" style="vertical-align:middle">ตกลง</button></a></span></center>
        </div>
      </div>
    </div>



</body>

</html>
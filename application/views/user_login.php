<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TN.</title>
  <!-- Font Awesome -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300i&display=swap">


  <style>
    @import url(https://fonts.googleapis.com/css?family=Dancing+Script|Roboto);

    *,
    *:after,
    *:before {
      box-sizing: border-box;
    }

    body {
      background: #A770EF;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

      text-align: center;
      font-family: 'Roboto', sans-serif;
    }

    .face {
      width: 200px;
      height: 200px;
      background: #fff;
      border-radius: 100%;
      margin: 50px auto;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15);
      z-index: 50;
      position: relative;
    }

    .nose {
      position: absolute;
      height: 20px;
      width: 35px;
      bottom: 40px;
      left: 0;
      right: 0;
      margin: auto;
      border-radius: 50px 20px/30px 15px;
      transform: rotate(15deg);
      background: #000;
    }

    .body {
      background: #fff;
      position: absolute;
      top: 200px;
      left: -20px;
      border-radius: 100px 100px 100px 100px/126px 126px 96px 96px;
      width: 250px;
      height: 282px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    form {
      display: none;
      max-width: 480px;
      padding: 30px 50px;
      background: #FFCCFF;
      height: 375px;
      margin: auto;
      display: block;
      box-shadow: 0 20px 15px rgba(0, 0, 0, 0.15);
      transition: 0.3s;
      position: relative;
      transform: translateY(-100px);
      z-index: 500;
      border: 7px solid #000000;
    }

    form.up {
      transform: translateY(-180px);
    }

    h1 {
      color: #FF0033;
      font-family: 'Dancing Script', cursive;
      font-weight: bold;
    }

    .btn {
      padding: 5px;
      width: 150px;
      height: 35px;
      border-radius: 4px;
      margin-top: 25px;
      cursor: pointer;
      transition: 0.3s;
      border: 3px solid #000000;
      font-size: 14px;
      display: inline-block;
      color: #000000;
      font-weight: bold;
    }

    .btn:hover {
      box-shadow: 0 0 #ffffff inset;
      color: #ffffff;
    }

    .btn:focus {
      outline: none;
    }

    .form-group {
      position: relative;
      font-size: 15px;
      color: #666;
      font-weight: bold;
    }

    .form-group+.form-group {
      margin-top: 30px;
    }

    .form-group .form-label {
      position: absolute;
      z-index: 1;
      left: 0;
      top: 5px;
      transition: 0.3s;
      color: #000000;
    }

    .form-group .form-control {
      width: 100%;
      position: relative;
      z-index: 3;
      height: 35px;
      background: none;
      border: none;
      padding: 5px 0;
      transition: 0.3s;
      border-bottom: 1px solid #000000;
      color: #000000;
    }

    .form-group .form-control:invalid {
      outline: none;
    }

    .form-group .form-control:focus,
    .form-group .form-control:valid {
      outline: none;
      box-shadow: 0 1px #ffbb38;
      border-color: #ffbb38;
    }

    .form-group .form-control:focus+.form-label,
    .form-group .form-control:valid+.form-label {
      font-size: 12px;
      color: #FF4081;
      transform: translateY(-15px);
    }

    .alert {
      position: absolute;
      color: #f00;
      font-size: 16px;
      right: -180px;
      top: -300px;
      z-index: 200;
      padding: 30px 25px;
      background: #fff;
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
      border-radius: 50%;
      opacity: 0;
      transform: scale(0, 0);
      -moz-transition: linear 0.4s 0.6s;
      -o-transition: linear 0.4s 0.6s;
      -webkit-transition: linear 0.4s;
      transition: linear 0.4s 0.6s;
    }

    .alert:after,
    .alert:before {
      content: '';
      position: absolute;
      width: 25px;
      height: 25px;
      background: #fff;
      left: -19px;
      bottom: -8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      border-radius: 50%;
    }

    .alert:before {
      width: 15px;
      height: 15px;
      left: -35px;
      bottom: -25px;
    }

    .wrong-entry {
      -webkit-animation: wrong-log 0.3s;
      animation: wrong-log 0.3s;
    }

    .wrong-entry .alert {
      opacity: 1;
      transform: scale(1, 1);
    }

    @-webkit-keyframes eye-blink {
      to {
        height: 30px;
      }
    }

    @keyframes eye-blink {
      to {
        height: 30px;
      }
    }

    @-webkit-keyframes wrong-log {

      0%,
      100% {
        left: 0px;
      }

      20%,
      60% {
        left: 20px;
      }

      40%,
      80% {
        left: -20px;
      }
    }

    @keyframes wrong-log {

      0%,
      100% {
        left: 0px;
      }

      20%,
      60% {
        left: 20px;
      }

      40%,
      80% {
        left: -20px;
      }
    }
  </style>
</head>

<body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <form class="register-form" action="<?php echo site_url('./Welcome/openTable') ?>" method="post">
    <div class="hand"></div>
    <div class="hand rgt"></div>
    <h1>Tidnueb Login&nbsp;<i style='font-size:35px' class='fas'>&#xf79f;</i></h1>
    <br>
    <div class="form-group">
      <label class="form-label">Number_table</label><br>
      <input type="text" required="required" class="form-control" name="number_table" value="<?php echo $table; ?>" readonly />

    </div>
    <div class="form-group">
      <input id="password" type="text" required="required" class="form-control" name="customer_tel" />
      <label class="form-label">Tel</label>
      <br>
      <button class="btn" type="submit">Login </button>
    </div>
  </form>

  <script type="text/javascript">
    $(function() {
      $("#form").on("submit", function() {
        var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      });
    });
    $(document).ready(function() {

      var animating = false,
        submitPhase1 = 1100,
        submitPhase2 = 400,
        logoutPhase1 = 800,
        $login = $(".login"),
        $app = $(".app");

      function ripple(elem, e) {
        $(".ripple").remove();
        var elTop = elem.offset().top,
          elLeft = elem.offset().left,
          x = e.pageX - elLeft,
          y = e.pageY - elTop;
        var $ripple = $("<div class='ripple'></div>");
        $ripple.css({
          top: y,
          left: x
        });
        elem.append($ripple);
      };

      $(document).on("click", ".login__submit", function(e) {
        if (animating) return;
        animating = true;
        var that = this;
        ripple($(that), e);
        $(that).addClass("processing");
        setTimeout(function() {
          $(that).addClass("success");
          setTimeout(function() {
            $app.show();
            $app.css("top");
            $app.addClass("active");
          }, submitPhase2 - 70);
          setTimeout(function() {
            $login.hide();
            $login.addClass("inactive");
            animating = false;
            $(that).removeClass("success processing");
          }, submitPhase2);
        }, submitPhase1);
      });

      $(document).on("click", ".app__logout", function(e) {
        if (animating) return;
        $(".ripple").remove();
        animating = true;
        var that = this;
        $(that).addClass("clicked");
        setTimeout(function() {
          $app.removeClass("active");
          $login.show();
          $login.css("top");
          $login.removeClass("inactive");
        }, logoutPhase1 - 120);
        setTimeout(function() {
          $app.hide();
          animating = false;
          $(that).removeClass("clicked");
        }, logoutPhase1);
      });

    });
  </script>

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

</body>


</html>
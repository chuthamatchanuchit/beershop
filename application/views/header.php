<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="<?php echo site_url('Welcome/index'); ?>">TN<span>.</span></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="../../assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <?php

    $number_table = $this->session->userdata("number_table");
    $customer_tel   = $this->session->userdata("customer_tel");
    $cart   =  $this->session->userdata('cart')

    ?>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="<?php echo site_url('Welcome/menu'); ?>">Menu</a></li>
        <?php if ($cart == "") { ?>
          <li></li>

        <?php   } else { ?>
          <li><a class="nav-link scrollto active" href="<?php echo site_url('Welcome/cart'); ?>">Cart</a></li>
        <?php   } ?>
        <li><a class="nav-link scrollto active" href="<?php echo site_url('Welcome/list_bill/') . $customer_tel; ?>">Bill</a></li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <a class="get-started-btn scrollto">เลขโต๊ะ &nbsp; <?php echo $number_table ?></a>
  </div>
</header><!-- End Header -->

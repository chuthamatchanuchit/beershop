<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('Welcome/admin_home'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TN Admin </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Welcome/admin_home'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">

    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/admin_menu'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Menu</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/admin_addmenu'); ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Update Menu</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/admin_login'); ?>" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่?');">
            <i class="fas fa-fw fa-cog"></i>
            <span>Logout</span></a>
    </li>


</ul>
<!-- End of Sidebar -->
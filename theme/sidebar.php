<!-- Sidebar -->
<ul class="navbar-nav bg-color sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo $nav->navigate('app_dashboard')?>">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">API | POS SYSTEM <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="<?php echo $nav->navigate('app_dashboard')?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<!-- <div class="sidebar-heading">
  Pages
</div> -->
<!-- Divider -->

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item ">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#salesPages" aria-expanded="true" aria-controls="salesPages">
    <i class="fas fa-cart-plus"></i>
    <span>Sales</span>
  </a>
  <div id="salesPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <!-- <h6 class="collapse-header">Main Reports:</h6> -->
      <a class="collapse-item" href="<?php echo $nav->navigate('app_sales','add')?>">New Sale</a>
      <a class="collapse-item" href="<?php echo $nav->navigate('app_sales')?>">All Sales</a>
    </div>
  </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_products')?>">
    <i class="fas fa-box"></i>
    <span>Products</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_categories')?>">
    <i class="fas fa-folder-plus"></i>
    <span>Categories</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_suppliers')?>">
    <i class="fas fa-store"></i>
    <span>Suppliers</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_stocks')?>">
    <i class="fas fa-cubes"></i>
    <span>Stocks</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_expenses')?>">
    <i class="fas fa-money-bill-wave"></i>
    <span>Expenses</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_staff')?>">
    <i class="fas fa-users"></i>
    <span>Staff</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_debtors')?>">
    <i class="fas fa-users"></i>
    <span>Debtors</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-file-alt"></i>
    <span>Report</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Main Reports:</h6>
      <a class="collapse-item" href="<?php echo $nav->navigate('app_reports','sales_filter')?>">Sales</a>
      <a class="collapse-item" href="<?php echo $nav->navigate('app_reports','profit_filter')?>">Profit</a>
      <a class="collapse-item" href="<?php echo $nav->navigate('app_reports','loss_filter')?>">Loss</a>
      <div class="collapse-divider"></div>
      <h6 class="collapse-header">Other Reports:</h6>
      <a class="collapse-item" href="<?php echo $nav->navigate('app_reports','expenses_filter')?>">Expenses</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Heading -->
<!-- <div class="sidebar-heading">
  Others
</div> -->

<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_settings')?>">
    <i class="fas fa-cogs"></i>
    <span>Settings</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo $nav->navigate('app_contactus')?>">
    <i class="fas fa-headset"></i>
    <span>Contact Us</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

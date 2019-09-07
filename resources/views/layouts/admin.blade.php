<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Restaurant|Admin</title>
<meta content="Admin Dashboard" name="description" />
<meta content="Themesbrand" name="author" />


<!-- perticular page css -->


<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" contdashboardent="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Restaurant</title>
<meta content="Admin Dashboard" name="description" />
<meta content="Themesbrand" name="author" />
<meta name="csrf-token" content="{{csrf_token()}}">
<link rel="stylesheet" href="/css/app.css">

<link rel="shortcut icon" href="/assets/images/favicon.ico">
<link rel="stylesheet" href="/plugins/morris/morris.css">

<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper" class="admin-page">
  <flash message=""></flash>
<!-- Top Bar Start -->
<div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
<a href="index-2.html" class="logo">
<span>
  <h4 style="color:white;" class="mt-4">Restaurant</h4>
<!-- <img src="/assets/images/logo-light.png" alt="" height="18"> -->
</span>
<i>
<img src="/assets/images/logo-sm.png" alt="" height="22">
</i>
</a>
</div>

<nav class="navbar-custom">
<ul class="navbar-right d-flex list-inline float-right mb-0">
<li class="dropdown notification-list d-none d-sm-block">
<form role="search" class="app-search">
<div class="form-group mb-0">
    <input type="text" class="form-control" placeholder="Search..">
    <button type="submit"><i class="fa fa-search"></i></button>
</div>
</form>
</li>

<li class="dropdown notification-list">
<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
<i class="ti-bell noti-icon"></i>
<span class="badge badge-pill badge-danger noti-icon-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
<!-- item-->
<h6 class="dropdown-item-text">
    Notifications (258)
</h6>
<div class="slimscroll notification-item-list">
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item active">
        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item">
        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item">
        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item">
        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item">
        <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
    </a>
</div>
<!-- All-->
<a href="javascript:void(0);" class="dropdown-item text-center text-primary">
    View all <i class="fi-arrow-right"></i>
</a>
</div>
</li>
<li class="dropdown notification-list">
<div class="dropdown notification-list nav-pro-img">
<a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
    <img src="/img/admin.png" alt="user" class="rounded-circle">
</a>
<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
    <!-- item-->
    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
</div>
</div>
</li>

</ul>

<ul class="list-inline menu-left mb-0">
<li class="float-left">
<button class="button-menu-mobile open-left waves-effect">
<i class="mdi mdi-menu"></i>
</button>
</li>
<li class="d-none d-sm-block">
<div class="dropdown pt-3 d-inline-block">
<a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Create
</a>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
</li>
</ul>

</nav>

</div>
<!-- Top Bar End -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
<div class="slimscroll-menu" id="remove-scroll">

<!--- Sidemenu -->
<div id="sidebar-menu">
<!-- Left Menu Start -->
<ul class="metismenu" id="side-menu">
<li class="menu-title">Main</li>
<li>
<router-link to="/admin/dashboard" class="waves-effect">
    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span> Dashboard </span>
</router-link>
</li>

<li>
<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Products <span class="badge badge-pill badge-success float-right">6</span> </span></a>
<ul class="submenu">
    <li><router-link to="/admin/products/create">Add Product</router-link></li>
    <li><router-link to="/admin/products">Manage Products</router-link></li>


</ul>
</li>





<li>
<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>Product category<span class="badge badge-pill badge-success float-right">6</span> </span></a>
<ul class="submenu">
    <li><router-link to="/admin/category/create">Add Category</router-link></li>
    <li><router-link to="/admin/category">Manage Category</router-link></li>


</ul>
</li>

<li>
<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>Waiter<span class="badge badge-pill badge-success float-right">6</span> </span></a>
<ul class="submenu">
    <li><router-link to="/admin/waiter/create">Add Waiter</router-link></li>
    <li><router-link to="/admin/waiter">Manage Waiter</router-link></li>


</ul>
</li>

<li>
<router-link to="/admin/sales" class="waves-effect">
    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span>Sales </span>
</router-link>
</li>

<li>
<router-link to="/admin/report" class="waves-effect">
    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span>Reports </span>
</router-link>
</li>

<li>
<router-link to="/admin/payment_type/create" class="waves-effect">
    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-primary badge-pill float-right">2</span> <span>Payment type </span>
</router-link>
</li>

</ul>

</div>
<!-- Sidebar -->
<div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->



<div class="content-page">

<div class="content" >
<div class="container-fluid">
<div class="row">
<div class="col-sm-12 mt-2">



<router-view></router-view>
<!-- end row -->
</div>
</div>
</div> <!-- container-fluid -->

</div> <!-- content -->



</div>

<footer class="footer">
 <span class="d-none d-sm-inline-block">Restaurant LTD</span>
</footer>


</div>


<script type="text/javascript" src="/js/admin.js">

</script>

<script src="/assets/js/jquery.min.js"></script>

<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/metisMenu.min.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/waves.min.js"></script>
<script src="/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="/plugins/dropzone/dist/dropzone.js"></script>



<!-- App js -->
<script src="/assets/js/app.js"></script>

</body>

<!-- Mirrored from lexa-node-vert.ourdemo.website/form-elements by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Feb 2019 15:23:24 GMT -->
</html>

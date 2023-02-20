<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Penggajian | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <?php echo $__env->yieldPushContent('css'); ?>
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="<?php echo e(route('home')); ?>">
                    <span class="brand">
                        <img class="mb-3" src="<?php echo e(asset('login-asset/img/Logo.png')); ?>" style="width: 30px;" alt="logo">
                        <span class="brand-tip"> <b><?php echo e(config('app.name')); ?></b></span>
                    </span>
                    <span class="brand-mini">
                        <img class="mb-3" src="<?php echo e(asset('login-asset/img/Logo.png')); ?>" style="width: 30px;" alt="logo">
                    </span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="./assets/img/admin-avatar.png" />
                            <span></span><?php echo e(Auth::user()->name); ?><i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo e(route('user')); ?>"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="<?php echo e(route('user')); ?>"><i class="fa fa-cog"></i>Settings</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" href="<?php echo e(route('logout')); ?>"><i class="fa fa-power-off"></i>Logout</a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <?php if ($__env->exists('layouts.sidebar')) echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2023 © <b>temola_ar</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="./assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <script src="./assets/vendors/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
	<script src="<?php echo e(asset('assets/vendors/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html><?php /**PATH /Users/bahrululum/Documents/etamu/resources/views/layouts/master.blade.php ENDPATH**/ ?>
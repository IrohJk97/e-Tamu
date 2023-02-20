<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="./assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong"><?php echo e(Auth::user()->name); ?></div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="<?php echo e(route('home')); ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Home</span>
                </a>
            </li>
            <li class="heading">Data Mater</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Master</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="<?php echo e(route('devisi')); ?>"><i class="sidebar-item-icon fa fa-solid fa-sitemap"></i>Devisi</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('jabatan')); ?>"><i class="sidebar-item-icon fa fa-solid fa-star"></i>Jabatan</a>
                    </li>
                </ul>
            </li>
            <li class="heading">Data Pegawai</li>
            <li>
                <a href="<?php echo e(route('pegawai')); ?>"><i class="sidebar-item-icon fa fa-solid fa-users"></i>
                    <span class="nav-label">Pegawai</span>
                </a>
            </li>
            <li class="heading">Data Tamu</li>
            <li>
                <a href="<?php echo e(route('admintamu')); ?>"><i class="sidebar-item-icon fa fa-regular fa-user-plus"></i>
                    <span class="nav-label">Tamu</span>
                </a>
            </li>
            <li class="heading">Setting</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-solid fa-sliders"></i>
                    <span class="nav-label">Setting</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="<?php echo e(route('user')); ?>"><i class="sidebar-item-icon fa a-solid fa-user"></i>User</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav><?php /**PATH /Users/bahrululum/Documents/etamu/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/ppm.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $level; ?></p>
                

               <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
        </div>
        <!-- search form -->
        <form action="<?php echo site_url('Pegawai') ?>" method="get" class="sidebar-form">
            <div class="input-group">
                <!--<input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">-->
                    <!--<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>-->
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('DashboardADMIN') ?>"><i class="fa fa-circle-o"></i> Dashboard Admin</a></li>
                   <!-- <li><a href="<?php echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>-->
                    <!-- <li><a href="<?php echo site_url('Select_Tutorial') ?>"><i class="fa fa-circle-o"></i>  v2</a></li>-->
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Pegawai</span>
                    <span class="fa fa-angle-left pull-right"></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Pegawai') ?>"><i class="fa fa-circle-o"></i> Input Data Pegawai</a></li>
                    
                </ul>
            </li>
            
            </li>            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Dosen</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Dosen') ?>"><i class="fa fa-circle-o"></i> Input Data Dosen</a></li>
                <li><a href="<?php echo site_url('Abdimas') ?>"><i class="fa fa-circle-o"></i> Input Data Abdimas</a></li>
                <li><a href="<?php echo site_url('Penelitian') ?>"><i class="fa fa-circle-o"></i> Input Data Penelitian</a></li>
                <li><a href="<?php echo site_url('Pengajaran') ?>"><i class="fa fa-circle-o"></i> Input Data Pengajaran</a></li>
                    
                </ul>
            </li>            
            <!--<li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Program studi</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>-->
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Prodi') ?>"><i class="fa fa-circle-o"></i>Input Data Prodi</a></li>
                    <!-- <li><a href="<?php echo site_url('karyawan') ?>"><i class="fa fa-circle-o"></i> karywan</a></li>-->
                    <!--<li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li>-->
                </ul>
            </li>
            </li>
            <!--<li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Matakuliah</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>-->
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Matakuliah') ?>"><i class="fa fa-circle-o"></i>Form Matakuliah</a></li>
                    <!-- <li><a href="<?php echo site_url('karyawan') ?>"><i class="fa fa-circle-o"></i> karywan</a></li>-->
                    <!--<li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li>-->
                </ul>
            </li>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Form Jabatan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Jabatan') ?>"><i class="fa fa-circle-o"></i>Input Data Jabatan</a></li>
                    <!-- <li><a href="<?php echo site_url('karyawan') ?>"><i class="fa fa-circle-o"></i> karywan</a></li>-->
                    <!--<li><a href="#"><i class="fa fa-circle-o"></i> Editors</a></li>-->
                </ul>
            </li>
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
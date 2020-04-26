<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>PPOB - <?=$judul;?></title>
        <link rel="stylesheet" href="<?=base_url()?>asset/modules/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/modules/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/css/style.min.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/css/components.min.css">
    </head>
    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar">
                    <form class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        </ul>
                    </form>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="<?=base_url()?>asset/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                                <div class="d-sm-none d-lg-inline-block">Hi, <?=$this->session->userdata('nama_admin')?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?=base_url('Admin/admin_logout')?>" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="<?=base_url('');?>">PPOB</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="<?=base_url('');?>">PB</a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">MAIN</li>
                            <li class="<?= ($active == "Dashboard") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Dashboard')?>">
                                    <i class="fas fa-home"></i><span>Dashboard</span>
                                </a>
                            </li>
                        <?php if ($this->session->userdata('level') == 1) { ?>
                            <li class="menu-header">Master Data</li>
                            <li class="<?= ($active == "Pelanggan") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Pelanggan/data_pelanggan')?>">
                                    <i class="fas fa-user"></i><span>Data Pelanggan</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Admin") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Admin/data_admin')?>">
                                    <i class="fas fa-eye"></i><span>Data Admin</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Tarif") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Tarif/data_tarif')?>">
                                    <i class="fas fa-dollar-sign"></i><span>Data Tarif</span>
                                </a>
                            </li>
                            <li class="menu-header">Transaksi</li>
                            <li class="<?= ($active == "Penggunaan") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Transaksi/penggunaan_pelanggan')?>">
                                    <i class="fas fa-list-alt"></i><span>Penggunaan Pelanggan</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Verifikasi") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Transaksi/verifikasi_pembayaran')?>">
                                    <i class="fas fa-check-double"></i><span>Verifikasi Pembayaran</span>
                                </a>
                            </li>
                            <li class="<?= ($active == "Histori") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Transaksi/histori_transaksi')?>">
                                    <i class="fas fa-history"></i><span>Histori Transaksi</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="menu-header">Transaksi</li>
                            <li class="<?= ($active == "Histori") ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?=base_url('Transaksi/histori_transaksi')?>">
                                    <i class="fas fa-history"></i><span>Histori Transaksi</span>
                                </a>
                            </li>
                        <?php } ?>
                        </ul>
                    </aside>
                </div>
                <div class="main-content">
                    <?php
                        $this->load->view($konten);
                    ?>
                </div>
                <footer class="main-footer">
                    <div class="footer-left">
                        Copyright &copy; 2019 Dian F. Arif<div class="bullet"></div>All Rights Reserved.
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?=base_url()?>asset/modules/jquery.min.js"></script>
        <script src="<?=base_url()?>asset/modules/tooltip.js"></script>
        <script src="<?=base_url()?>asset/modules/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>asset/modules/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?=base_url()?>asset/js/stisla.js"></script>
        <script src="<?=base_url()?>asset/js/page/index-0.js"></script>
        <script src="<?=base_url()?>asset/js/scripts.js"></script>
        <script src="<?=base_url()?>asset/js/custom.js"></script>
    </body>
</html>

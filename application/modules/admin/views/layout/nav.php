<?php

$id_user = $this->session->userdata('id_user');
$role = $this->session->userdata('role');

?>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>

            <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/dashboard')
                                        ?>"><i class="fa fa-home"></i> <span>Menu Utama</span></a></li>

            <li class="<?php if ($this->uri->segment(2) == "jenis") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/jenis')
                                        ?>"><i class="fa fa-industry"></i> <span>Jenis Diare</span></a></li>
            <li class="<?php if ($this->uri->segment(2) == "gejala") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/gejala')
                                        ?>"><i class="fa fa-heartbeat"></i> <span>Gejala</span></a></li>
            <li class="<?php if ($this->uri->segment(2) == "pengetahuan") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/pengetahuan')
                                        ?>"><i class="fa fa-flask"></i> <span>Pengetahuan</span></a></li>
            <li class="<?php if ($this->uri->segment(2) == "pasien") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/pasien')
                                        ?>"><i class="fa fa-hotel"></i> <span>Data Pasien</span></a></li>



            <li class="treeview <?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-user"></i> <span>Manajemen User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/user') ?>">List User</a></li>
                </ul>
            </li>

            <li class="treeview <?php if ($this->uri->segment(2) == "konfigurasi") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-cogs"></i> <span>Konfigurasi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "index") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/index') ?>">Umum</a></li>
                    <li class="<?php if ($this->uri->segment(3) == "banner") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/banner') ?>">Banner</a></li>
                    <li class="<?php if ($this->uri->segment(3) == "panduan") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/panduan') ?>">Panduan</a></li>
                </ul>
            </li>

            <li class="<?php if ($this->uri->segment(2) == "logout") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/logout')
                                        ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>



        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">
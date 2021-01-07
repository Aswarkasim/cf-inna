<!-- Begin Page Content -->
<div class="row">
    <div class="col-lg-12">
        <i class="fa fa-home fa-3x">Beranda</i><br>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success">
            <p>
                <i class="fa fa-user"></i>
                Selamat datang <?= $user->nama_user ?> di aplikasi sistem pakar diare
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= count($jenis) ?></h3>

                <p>Jenis Diare</p>
            </div>
            <div class="icon">
                <i class="fa fa-industry"></i>
            </div>
            <a href="<?= base_url('admin/jenis') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= count($gejala) ?></h3>

                <p>Gejala</p>
            </div>
            <div class="icon">
                <i class="fa fa-heartbeat"></i>
            </div>
            <a href="<?= base_url('admin/gejala') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= count($pengetahuan) ?></h3>

                <p>Pengetahuan</p>
            </div>
            <div class="icon">
                <i class="fa fa-flask"></i>
            </div>
            <a href="<?= base_url('admin/pengetahuan') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= count($pasien) ?></h3>

                <p>Pasien</p>
            </div>
            <div class="icon">
                <i class="fa fa-hotel"></i>
            </div>
            <a href="<?= base_url('admin/pasien') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
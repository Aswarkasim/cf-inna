<section class="jumbotron bg-white">
    <div class="container">
        <form action="<?= base_url('home/diagnosa/ask') ?>" method="post" class="form-signin">
            <div class="offset-md-3 col-md-6">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>'); ?>

                <div class="form-group">
                    <label for=""><strong>NAMA PASIEN</strong></label>
                    <input class="form-control" name="nama_pasien" placeholder="Nama Pasien" type="text" value="<?= set_value('nama_pasien') ?>">
                </div>

                <div class="form-group">
                    <label for=""><strong>Jenis Kelamin</strong></label>
                    <select name="jenis_kelamin" class="form-control" id="">
                        <option value="">-- Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for=""><strong>Umur</strong></label>
                    <input class="form-control" name="umur" placeholder="Umur" type="number" value="<?= set_value('umur') ?>">
                </div>

                <div class="float-right">
                    <!-- <a href="<?= base_url('home/diagnosa/ask') ?>" class="btn btn-warning text-white">Selanjutnya</a> -->
                    <button type="submit" class="btn btn-warning text-white"><i class="fa fa-arrow-right"></i> Selanjutnya</button>
                </div>

            </div>
        </form>
    </div>
</section>
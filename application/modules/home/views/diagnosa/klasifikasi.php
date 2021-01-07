<section class="jumbotron">
    <div class="container">
        <a href="<?= base_url('home/diagnosa/') ?>" class="btn btn-success">Pasien Baru</a><br>
        <form action="<?= base_url('home/diagnosa/proses') ?>" method="post" class="form-signin">

            <input type="hidden" name="nama_pasien" value="<?= $nama_pasien ?>">
            <input type="hidden" name="jenis_kelamin" value="<?= $jenis_kelamin ?>">
            <input type="hidden" name="umur" value="<?= $umur ?>">
            <hr>
            <h3><b>Data Pasien</b></h3>
            <table class="table">
                <tr>
                    <td width="200px"><b>Nama Pasien</b></td>
                    <td>: <?= $nama_pasien ?></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>: <?= $jenis_kelamin ?></td>
                </tr>
                <tr>
                    <td><b>Umur</b></td>
                    <td>: <?= $umur . ' Tahun' ?></td>
                </tr>

            </table>
            <hr>
            <h3><b>Pilih Gejala</b></h3>

            <div class="row pb-2">
                <div class="col-md-12">
                    <a href="<?= base_url('home/diagnosa/ask/P01/' . $nama_pasien . '/' . $jenis_kelamin . '/' . $umur); ?>" class="btn btn-success btn-block py-3">Apakah anda BAB kurang dari 3X dalam sehari?</a>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col-md-12">
                    <a href="<?= base_url('home/diagnosa/ask/P02/' . $nama_pasien . '/' . $jenis_kelamin . '/' . $umur); ?>" class="btn btn-success btn-block py-3">Apakah anda BAB lebih dari 3X dalam sehari?</a>
                </div>
            </div>


            <div class="row pb-2">
                <div class="col-md-12">
                    <a href="<?= base_url('home/diagnosa/ask/P03/' . $nama_pasien . '/' . $jenis_kelamin . '/' . $umur); ?>" class="btn btn-success btn-block py-3">Apakah anda BAB lebih dari 5X dalam sehari?</a>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col-md-12">
                    <a href="#" class="btn btn-success btn-block py-3 tanpa-gejala">Tidak memiliki gejala apapun</a>
                </div>
            </div>

            <br>
            <!-- <a href="<?= base_url('home/diagnosa/proses') ?>" class="btn btn-primary text-white float-right">Test Proses Diagnosa</a> -->
            <!-- <button type="submit" class="btn btn-warning text-white float-right">Proses Diagnosa</button> -->
        </form>
    </div>
</section>
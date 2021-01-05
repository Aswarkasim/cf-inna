<section class="jumbotron">
    <div class="container">
        <a href="<?= base_url('home/diagnosa/') ?>" class="btn btn-success">Pasien Baru</a><br>
        <form action="<?= base_url('home/diagnosa/proses') ?>" method="post" class="form-signin">

            <input type="hidden" name="nama_pasien" value="<?= $nama_pasien ?>">
            <input type="hidden" name="jenis_kelamin" value="<?= $jenis_kelamin ?>">
            <input type="hidden" name="umur" value="<?= $umur ?>">
            <input type="hidden" name="kode_penyakit" value="<?= $kode_penyakit ?>">
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



            <?php $no = 1;
            foreach ($ask as $row) { ?>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span><?= $no++ . '. ' . $row->nama_gejala ?></span>
                        <p><?= $row->pertanyaan ?></p>
                        <input type="hidden" name="kode_pengetahuan<?= $row->kode_pengetahuan ?>" value="<?= $row->kode_pengetahuan ?>">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" required name="jawabPasien<?= $row->kode_pengetahuan ?>" id="inlineRadio<?= $row->kode_pengetahuan ?>1" value="0">
                            <label class="form-check-label" for="inlineRadio<?= $row->kode_pengetahuan ?>1">Tidak Yakin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" required name="jawabPasien<?= $row->kode_pengetahuan ?>" id="inlineRadio<?= $row->kode_pengetahuan ?>2" value="0.4">
                            <label class="form-check-label" for="inlineRadio<?= $row->kode_pengetahuan ?>2">Cukup Yakin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" required name="jawabPasien<?= $row->kode_pengetahuan ?>" id="inlineRadio<?= $row->kode_pengetahuan ?>3" value="0.8">
                            <label class="form-check-label" for="inlineRadio<?= $row->kode_pengetahuan ?>3">Yakin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" required name="jawabPasien<?= $row->kode_pengetahuan ?>" id="inlineRadio<?= $row->kode_pengetahuan ?>4" value="1">
                            <label class="form-check-label" for="inlineRadio<?= $row->kode_pengetahuan ?>4">Sangat Yakin</label>
                        </div>
                    </div>
                </div>

                <hr>

            <?php } ?>


            <!-- <a href="<?= base_url('home/diagnosa/proses') ?>" class="btn btn-primary text-white float-right">Test Proses Diagnosa</a> -->
            <button type="submit" class="btn btn-warning text-white float-right">Proses Diagnosa</button>
        </form>
    </div>
</section>
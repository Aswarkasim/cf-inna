<section class="jumbotron bg-white">
    <div class="container">
        <hr>
        <!-- <table class="table">
            <tr>
                <td>No</td>
                <td>Gejala</td>
                <td>Nilai Cf</td>
                <td>Nilai Cf Root</td>
                <td>Hasil Jumlah Cf</td>
                <td>Jumlah</td>
            </tr>

            <?php $no = 1;
            foreach ($data as $key => $row) { ?>
                <tr>
                    <td width="100px"><?= $no++ ?></td>
                    <td><?= $row['nama_gejala'] ?></td>
                    <td><?= $row['nilai_cf'] ?></td>
                    <td><?= $row['cf_root'] ?></td>
                    <td><?= $row['cf_hasil'] ?></td>
                    <td>
                        <?= $key ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table> -->

        <?php
        $i = 0;
        $cf_1 = 0;
        $cf_2 = 0;
        $cf_old = 0;
        foreach ($data as $key => $value) {

            if ($key == 0) {
                $cf_1 = $value['cf_hasil'];
            }
            if ($key == 1) {
                $cf_2 = $value['cf_hasil'];
            }
        }
        $cf_old = $cf_1 + $cf_2 * (1 - $cf_1);
        //echo $cf_old . '</br>';

        foreach ($data as $key => $value) {
            $cf_old = $cf_old + $value['cf_hasil'] * (1 - $cf_old);
            //echo $cf_old . '</br>';
        }
        // echo $cf_old . '</br>';

        $persentase = $cf_old * 100;
        // echo $persentase;

        $jenis = $this->Crud_model->listing('tbl_jenis');


        ?>

        <div class="offset-md-3 col-md-6">


            <div class="form-group">
                <label for=""><strong>JENIS PENYAKIT</strong></label><br>
                <?php

                echo "<span class = 'text-danger'>" . $penyakit->nama_jenis . "</span>";

                // $kode_penyakit = '';
                // if ($persentase <= 0) {
                //     echo ' <span>Tidak menderita diare</span>';
                // } else if (($persentase > 0) && $persentase <= 40) {
                //     $jenis = $this->Crud_model->listingOne('tbl_jenis', 'parameter', '40');
                //     $kode_penyakit = $jenis->kode_jenis;
                //     echo ' <span>' . $jenis->nama_jenis . '</span>';
                // } else if (($persentase >= 41) && $persentase <= 90) {
                //     $jenis = $this->Crud_model->listingOne('tbl_jenis', 'parameter', '90');
                //     echo ' <span>' . $jenis->nama_jenis . '</span>';
                //     $kode_penyakit = $jenis->kode_jenis;
                // } else if (($persentase >= 91) && $persentase <= 100) {
                //     $jenis = $this->Crud_model->listingOne('tbl_jenis', 'parameter', '100');
                //     echo ' <span>' . $jenis->nama_jenis . '</span>';
                //     $kode_penyakit = $jenis->kode_jenis;
                // } else {
                //     echo 'Diagnosa tidak terdeteksi';
                // }
                ?>

            </div>
            <hr>
            <div class="form-group">
                <label for=""><strong>Tingkat</strong></label><br>
                <span><?php

                        $tingkat = '';
                        if (($persentase >= 0) && $persentase <= 44) {
                            $tingkat = 'Rendah';
                            echo ' <span class = "text-danger">Rendah</span>';
                        } else if (($persentase >= 45) && $persentase <= 74) {
                            $tingkat = 'Menengah';
                            echo ' <span class = "text-danger">Menengah</span>';
                        } else if (($persentase >= 75) && $persentase <= 100) {
                            $tingkat = 'Tinggi';
                            echo ' <span class = "text-danger">Tinggi</span>';
                        } else {
                            echo 'Diagnosa tidak terdeteksi';
                        }
                        ?></span>
            </div>
            <hr>
            <div class="form-group">
                <label for=""><strong>PERSENTASE</strong></label><br>
                <span class="text-danger"><?= $persentase . '%' ?></span>
            </div>
            <hr>
            <div class="form-group">
                <label for=""><strong>PENANGANAN</strong></label><br>
                <?php


                $this->load->model('home/Home_model', 'HM');
                $kode_penyakit = $this->uri->segment('5');
                $penanganan = $this->HM->listPenanganan($kode_penyakit, $tingkat);

                if ($penanganan) {
                    echo $penanganan->deskripsi;
                } else {
                    echo 'Tidak memerlukan penanganan khusus';
                }
                ?>
            </div>
            <hr>
            <div class="float-right">
                <form action="<?= base_url('home/diagnosa/simpanDiagnosaPasien/' . $id_pasien . '/' . $kode_penyakit); ?>" method="post">
                    <input type="hidden" value="<?= $persentase; ?>" name="akumulasi_cf">
                    <input type="hidden" value="<?= $tingkat; ?>" name="tingkat">
                    <input type="hidden" value="<?= $penyakit->nama_jenis; ?>" name="nama_penyakit">

                    <a href="<?= base_url('home/diagnosa/hapusData/' . $id_pasien); ?>" class="btn btn-secondary text-white tombol-hapus"><i class="fa fa-trash"></i> Buang</a>

                    <?php if ($dataPasien->tingkat == '') { ?>
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                    <?php } else { ?>
                        <a href="<?= base_url('home/diagnosa/cetak/' . $id_pasien); ?>" class="btn btn-warning text-white" target="blank"><i class="fa fa-save"></i> Cetak</a>
                    <?php } ?>
                </form>

            </div>

        </div>
    </div>
</section>
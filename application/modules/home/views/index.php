<style>
    .banner_part {
        height: 800px;
        display: flex;
        align-items: center;
        position: relative;
        background-image: url("<?= base_url('assets/uploads/' . $data->banner); ?>");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<section class="banner_part">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-md-6">
                <div class="banner_text">
                    <h2><b><?= $data->topik_banner; ?></b></h2>
                    <span><?= $data->deskripsi_banner; ?></span><br>
                    <a href="<?= base_url('home/diagnosa') ?>" class="btn_1">Mulai<span class="ti-angle-right"></span> </a><br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- 
.SKIP Tampilannya penguji mnta perbaiki - 
.DONE Menu isi data pasien yg umur di ganti jadi pilih tgl lahir tapi masih bisa di isi khusus umur 5 sampai 12 THN sja
.DONE Bagian klasifikasi yg pilih 4 pilihan itu tambahkan keterangan di bawahnya. Keterangan nnti ku isi sendiri
.DONE -  Di bagian admin yg form data pasien di ubah jadi form riwayat konsultasi.  Terus bagian field nya di tambahkan tgl konsultasi jadi yg paling atas nnti yg paling terkahir konsultasi.
.DONE Pas di cetak bisa di pilih cetak/ bln atau / THN.
.SKIP Pengujinya mnta toh di buatkan klasifikasi nntinya. Misal dalam 1 THN penyakit yg paling banyak di derita apa. -->
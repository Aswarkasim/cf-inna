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
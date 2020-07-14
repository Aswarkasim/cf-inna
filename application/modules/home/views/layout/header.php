<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<!--::header part start::-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">SISTEM PAKAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarColor01">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($this->uri->segment(1) == '') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link " href="<?= base_url() ?>">HOME</a>
                </li>
                <li class="nav-item <?php if ($this->uri->segment(2) == 'diagnosa') {
                                        echo 'active';
                                    } ?>">
                    <a class=" nav-link" href="<?= base_url() ?>home/diagnosa">DIAGNOSA</a>
                </li>

                <li class="nav-item <?php if ($this->uri->segment(2) == 'panduan') {
                                        echo 'active';
                                    } ?>">
                    <a class=" nav-link" href="<?= base_url() ?>home/panduan">PANDUAN</a>
                    <!-- <li class="nav-item <?php if ($this->uri->segment(2) == 'kontak') {
                                                    echo 'active';
                                                } ?>">
                    <a class=" nav-link" href="<?= base_url() ?>home/kontak">KONTAK</a> -->
                </li>

            </ul>

        </div>
    </div>
</nav>
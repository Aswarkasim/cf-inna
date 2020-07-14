<div class="box">
    <div class="container-fluid">
        <div class="box-header">
            <h3 class="box-title"><strong>Edit Gejala</strong></h3><br><br>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">

            <form action="<?= base_url($edit) ?>" method="post">
                <input type="hidden" value="<?= $pengetahuan->kode_pengetahuan ?>">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                        if ($this->session->flashdata('msg')) {
                            echo '<div class="alert alert-warning"><i class="fa fa-check"></i>';
                            echo $this->session->flashdata('msg');
                            echo '</div>';
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-3"><strong>JENIS DIARE <small class="text-danger">*</small><span class="pull-right">:</span></strong></div>
                            <div class="col-md-9">
                                <select name="kode_jenis" class="form-control select2">
                                    <option value="">--Jenis--</option>
                                    <?php foreach ($jenis as $row) { ?>
                                        <option value="<?= $row->kode_jenis ?>" <?php if ($row->kode_jenis == $pengetahuan->kode_jenis) {
                                                                                    echo "selected";
                                                                                } ?>><?= $row->nama_jenis ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-3"><strong>GEJALA <small class="text-danger">*</small><span class="pull-right">:</span></strong></div>
                            <div class="col-md-9">
                                <select name="kode_gejala" class="form-control select2">
                                    <option value="">--Gejala--</option>
                                    <?php foreach ($gejala as $row) { ?>
                                        <option value="<?= $row->kode_gejala ?>" <?php if ($row->kode_gejala == $pengetahuan->kode_gejala) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $row->nama_gejala ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div><br>
                        <div class="row pt10">
                            <div class="col-md-3"><strong>Pertanyaan<small class="text-danger">*</small><span class="pull-right">:</span></strong></div>
                            <div class="col-md-9">
                                <textarea name="pertanyaan" id="" cols="30" rows="10" class="form-control"><?= $pengetahuan->pertanyaan ?></textarea>
                            </div>
                        </div><br>
                        <!-- <div class="row pt10">
                            <div class="col-md-3"><strong>NILAI CF <small class="text-danger">*</small><span class="pull-right">:</span></strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?= $pengetahuan->nilai_cf ?>" name="nilai_cf">
                            </div>
                        </div><br> -->
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button class="btn btn-primary" type="submit"><i class="fa fa-edit"></i> Edit</button>
                            </div>
                        </div><br>
                    </div>
            </form>
            <div class="col-md-6">
                <p>
                    1. Isikan semua field <br>
                    2. Tanda * wajib untuk di isi
                </p>
            </div>
        </div>
    </div>
</div>
<!-- /.box-body -->
</div>
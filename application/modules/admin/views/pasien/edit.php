<div class="box">
    <div class="container-fluid">
        <div class="box-header">
            <h3 class="box-title"><strong>Edit Penyakit</strong></h3><br><br>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">

            <form action="<?= base_url($edit) ?>" method="post">
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
                        <div class="row pt10">
                            <div class="col-md-3"><strong>KODE PENYAKIT <small class="text-danger">*</small><span class="pull-right">:</span></strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="kode" disabled value="<?= $jenis->kode_jenis ?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3"><strong>NAMA PENYAKIT <small class="text-danger">*</small><span class="pull-right">:</span></strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama" value="<?= $jenis->nama_jenis ?>">
                            </div>
                        </div><br>

                    </div>

                    <div class="col-md-6">

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"></i> Edit</button>
                        </div>
                    </div><br>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
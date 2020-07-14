<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
  <div class="col-md-6">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Edit Banner</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <?php
        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
        ?>
        <?= form_open_multipart(base_url('admin/konfigurasi/banner')) ?>
        <form action="" method="post">

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Topik</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="topik_banner" class="form-control" value="<?= $konfigurasi->topik_banner ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Deskripsi</label>
              </div>
              <div class="col-md-9">
                <textarea name="deskripsi_banner" class="form-control" id="" cols="30" rows="10"><?= $konfigurasi->deskripsi_banner ?></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Gambar</label>
              </div>
              <div class="col-md-9">
                <input type="hidden" name="bantuan" value="aa">
                <input type="file" class="form-control" name="banner">
                <p>
                  Ukuran gambar maksimal 2 MB <br>
                  Dimensi gambar sebesar : Lebar = 1900 pixel, Tinggi = 800 pixel
                </p>
                <br>
                <img src="<?= base_url('assets/uploads/' . $konfigurasi->banner) ?>" alt="" width="100%">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-9">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>

        </form>
        <?= form_close() ?>



      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>




<!-- /.modal -->
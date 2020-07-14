<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
  <div class="col-md-9">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Edit Panduan</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <?php
        echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
        ?>
        <?= form_open_multipart(base_url('admin/konfigurasi/panduan')) ?>
        <form action="" method="post">

          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Judul</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="head_panduan" class="form-control" value="<?= $konfigurasi->head_panduan ?>">
              </div>
            </div>
          </div>
          <script src="<?= base_url('assets/') ?>js/ckeditor/ckeditor.js"></script>
          <div class="form-group">
            <div class="row">
              <div class="col-md-3">
                <label for="" class="pull-right">Panduan</label>
              </div>
              <div class="col-md-9">
                <textarea id="editor" name="panduan" class="form-control"><?= $konfigurasi->panduan ?></textarea>
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
<script>
  CKEDITOR.replace("editor");
</script>



<!-- /.modal -->
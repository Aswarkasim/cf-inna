<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#UbahThumnail<?= $row->id_penanganan ?>">
  <i class="fa fa-edit"></i> Edit Penanganan
</button>

<!-- Modal -->
<div class="modal fade" id="UbahThumnail<?= $row->id_penanganan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Penanganan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?= form_open(base_url('admin/jenis/ubahPenanganan/' . $row->id_penanganan . '/' . $row->kode_jenis)) ?>
      <form action="" method="POST">

        <div class="modal-body">
          <div class="form-group">
            <label for="">Deskripsi</label>
            <script src="<?= base_url('assets/admin/') ?>bower_components/jquery/dist/jquery.min.js"></script>
            <script src="<?= base_url('assets/') ?>js/ckeditor/ckeditor.js"></script>
            <textarea name="deskripsi" class="form-control" cols="30" rows="10" id="editor<?= $row->id_penanganan; ?>"><?= $row->deskripsi; ?>"</textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      <?php form_close() ?>
    </div>
  </div>
</div>

<script>
  CKEDITOR.replace("editor<?= $row->id_penanganan; ?>");
</script>
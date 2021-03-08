<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UbahThumnailAS">
  <i class="fa fa-print"></i> Cetak
</button>
<!-- Modal -->
<div class="modal fade" id="UbahThumnailAS" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Penanganan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action=" <?= base_url('admin/pasien/cetakTabulasi') ?>" method="POST" target="_blank">

        <div class="modal-body">
          <div class="form-group">
            <label for="">Dari</label>
            <input type="date" class="form-control" name="date_start">
          </div>

          <div class="form-group">
            <label for="">Sampai</label>
            <input type="date" class="form-control" name="date_end">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Cetak</button>
        </div>
      </form>
    </div>
  </div>
</div>
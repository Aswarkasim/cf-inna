<div class="box">
  <div class="box-header">
    <h3 class="box-title"></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">



    <div class="container-fluid">
      <!-- <p>
        <a href="<?= base_url($add) ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
      </p> -->



      <table class="table table table-bordered table-striped DataTable">
        <thead>
          <tr>
            <th width="30px">NO</th>
            <th width="">NAMA PASIEN</th>
            <th width="">JENIS KELAMIN</th>
            <th width="">UMUR</th>
            <th width="">AKUMULASI CF</th>
            <th width="">DIAGNOSA</th>
            <th width="100px">ACTION</th>
          </tr>
        </thead>
        <tbody>

          <?php $no = 1;
          foreach ($pasien as $row) { ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $row->nama_pasien ?></td>
              <td><?= $row->jenis_kelamin ?></td>
              <td><?= $row->umur ?></td>
              <td><?= $row->akumulasi_cf ?></td>
              <td><?= $row->nama_jenis ?></td>
              <td>
                <div class="btn-group">
                  <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-cogs"></i></button>
                  <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li> <a href="<?= base_url('home/diagnosa/cetak/' . $row->id_pasien); ?>" target="_blank"><i class="fa fa-save"></i> Cetak</a></li>
                    <li><a href="<?= base_url($delete . $row->id_pasien) ?>" class="tombol-hapus"><i class="fa fa-trash"></i>Hapus</a></li>
                  </ul>
                </div>
              </td>
            </tr>
          <?php $no++;
          } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.box-body -->
</div>
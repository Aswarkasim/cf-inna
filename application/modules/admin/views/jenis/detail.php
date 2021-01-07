<?php

$this->load->helper('text');

?>
<div class="box">
  <div class="box-header">
    <h3 class="box-title"></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">


    <div class="container-fluid">

      <div class="row">
        <div class="col-md-6">


          <table>

            <?php foreach ($penanganan as $row) { ?>
              <tr>
                <td>
                  <strong><?= $row->tingkat; ?></strong>
                  <?php include('edit_penanganan.php') ?>
                </td>
              </tr>

              <tr>
                <td><?= $row->deskripsi; ?></td>
              </tr>

              <tr>
                <td>--</td>
              </tr>

            <?php } ?>
          </table>


        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
<div class="container-fluid" style="margin-top: 20px">

  <head>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
          <a href="<?php echo base_url('Home/tambah_medali'); ?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i></a>

      </div>
      <div class="card-body">
        <?php echo $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Medali</th>
                <th>Kontingen</th>
                <th>Event</th>
                <th>Cabang Olahraga</th>
                <th style="width: 125px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;

              foreach ($medali  as $mdl) :
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $mdl['medali_nama']; ?></td>
                  <td><?php echo $mdl['kontingen_nama']; ?></td>
                  <td><?php echo $mdl['event_nama']; ?></td>
                  <td><?php echo $mdl['cabor_nama']; ?></td>
                  <td>
                    <a href="<?php echo base_url() ?>Home/edit_medali/<?php echo $mdl['id']; ?>" class="badge badge-primary"><i class="fas fa-edit"></i></a>

                    <a href="<?php echo base_url() ?>Home/hapus_medali/<?php echo $mdl['id']; ?>" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

</div>
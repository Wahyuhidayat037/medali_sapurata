<div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Halaman Tambah Medali</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('Home/proses_tambah_medali/'.$event_id) ?>">
  <?php 
  // if ($event_id>0) { 
    ?>

     <div class="form-group row">
      <label for="event_id" class="col-sm-3 col-form-label">Event</label>
      <div class="col-sm-5">
        <select name="event_id" class="form-control" id="event_id">
            <option value="">- Pilih -</option>
            <?php foreach ($eventdata as $mdl): ?>
              <option value="<?php echo $mdl['event_id']; ?>" 
                <?php if ($event_id== $mdl['event_id']): ?>
               selected 
              <?php endif ?>
                ><?php echo $mdl['event_nama']; ?></option>
            <?php endforeach ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="medali_id" class="col-sm-3 col-form-label">Medali</label>
    <div class="col-sm-5">
       <select name="medali_id" class="form-control" id="medali_id">
          <option value="">- Pilih -</option>
          <?php foreach ($medaliref as $evt): ?>
            <option value="<?php echo $evt['medali_id']; ?>"
              
              ><?php echo $evt['medali_nama']; ?></option>
          <?php endforeach ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="kontingen_id" class="col-sm-3 col-form-label">Kontingen</label>
    <div class="col-sm-5">
      <select name="kontingen_id" class="form-control" id="kontingen_id">
          <option value="">- Pilih -</option>
          <?php foreach ($kontingendata as $mdl): ?>
            <option value="<?php echo $mdl['kontingen_id']; ?>"><?php echo $mdl['kontingen_nama']; ?></option>
          <?php endforeach ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="nama_atlet" class="col-sm-3 col-form-label">Nama Atlet</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_atlet" required="">
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
      <button type="submit" class="btn btn-primary">Tambah</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
    <?php 
  // }
   ?>

</form>
     
      </div>
    </div>
  </div>
</div>

	
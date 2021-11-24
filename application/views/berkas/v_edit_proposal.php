<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Input Data Berkas</h4><br>
            <?php foreach ($edit_proposal as $u) : ?>
              <form class="forms-sample" action="<?php echo base_url(); ?>proposal/update" method="post">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $u->id ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1" required>Nama Kegiatan</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $u->nama_kegiatan ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" required>Nama Ormawa</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $u->nama_ormawa ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Deskripsi</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $u->deskripsi ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Bentuk</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $u->bentuk ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Status</label>
                  <select name="status" id="status" class="form-control" required>
                    <option value="Revisi">Revisi</option>
                    <option value="Diterima">Diterima</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Berkas</label>
                  <input type="file" class="form-control" id="fileToUpload" value="<?php echo $u->berkas ?>" required>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
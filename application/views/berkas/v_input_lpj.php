<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Input Data Berkas</h4><br>
            <form class="forms-sample" action="<?php echo site_url() . '/proposal/tambah_aksi'; ?>" method="post">
              <div class="form-group">
                <label for="exampleInputUsername1" required>Nama Kegiatan</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama Kegiatan" name="nama_kegiatan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" required>Nama Ormawa</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Ormawa" name="nama_ormawa" required>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Deskripsi</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Deskripsi" name="deskripsi">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Bentuk</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Bentuk" name="bentuk" required>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Status</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Status" name="status" required>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Jenis Berkas</label>
                <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Jenis Berkas" name="jenis_berkas" required>
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Berkas</label>
                <input type="file" class="form-control" id="exampleInputConfirmPassword1" placeholder="Berkas" name="berkas" id="fileToUpload" required>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

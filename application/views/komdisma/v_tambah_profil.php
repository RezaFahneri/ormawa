<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Profil</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo base_url('profil/tambahprofilaksi') ?>">
                                <div class="form-group">
                                    <label>Nama Ormawa </label>
                                    <input type="text" name="nama_ormawa" class="form-control" required>
                                    <?php echo form_error('nama_ormawa', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Sejarah </label>
                                    <input type="text" name="sejarah" class="form-control" required>
                                    <?php echo form_error('sejarah', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Visi Misi </label>
                                    <input type="text" name="visi_misi" class="form-control" required>
                                    <?php echo form_error('visi_misi', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Sekretariat</label>
                                    <input type="text" name="sekretariat" class="form-control" required>
                                    <?php echo form_error('sekretariat', '<div class="text-small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Kontak </label>
                                    <input type="text" name="kontak" class="form-control" required>
                                    <?php echo form_error('kontak', '<div class="text-small text-danger"></div>') ?>
                                </div>


                                <button type="submit" class="btn btn-primary"><a onclick="return confirm('Profil berhasil ditambahkan!')">Submit</a></button>&nbsp &nbsp
                                <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>profil">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
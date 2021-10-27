<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>beranda_komdisma" aria-expanded="false">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>akun">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Akun</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profil.php" aria-expanded="false">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="proker.php" aria-expanded="false">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Program Kerja</span>
            </a>
        </li>
    </ul>
</nav>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary">Edit Data Akun</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($akun_edit as $to) : ?>
                            <form method="POST" action="<?php echo base_url('akun/updatedataaksi'); ?>">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $to->nama ?>">
                                    <?php echo form_error('nama', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control-file"><br>
                                    <img src="<?php echo base_url() . 'assets/images/faces/' . $to->foto ?>">
                                    <p><b><?php echo $to->foto ?></b></p>
                                    <?php echo form_error('foto', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Status </label></br>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">--pilih--</option>
                                        <option value="Ormawa">Ormawa</option>
                                        <option value="DPM">DPM</option>
                                        <option value="Komdisma">komdisma</option>
                                        <option value="Pembina Ormawa">Pembina Ormawa</option>
                                        <option value="Pimpinan">Pimpinan</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $to->username ?>">
                                    <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $to->password ?>">
                                    <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                                </div>


                                <button type="submit" class="btn btn-primary">Save</button>
                                <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>akun">Cancel</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>beranda/komdisma" aria-expanded="false">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>akun" aria-expanded="false">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Akun</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>profil" aria-expanded="false" >
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>proker" >
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
                        <h4 class="m-0 font-weight-bold text-primary">Edit Data Program Kerja</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($edit_proker as $to) : ?>
                            <form method="POST" action="<?php echo base_url('proker/updatedataaksi')?>">
                                <div class="form-group">
                                    <label>Nama Ormawa</label>
                                    <input type="hidden" name="id_proker" class="form-control" value="<?php echo $to->id_proker ?>" >
                                    <input type="text" name="nama_ormawa" class="form-control" value="<?php echo $to->nama_ormawa ?>">
                                    <?php echo form_error('nama_ormawa', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Nama Program Kerja</label>
                                    <input type="text" name="nama_proker" class="form-control" value="<?php echo $to->nama_proker ?>">
                                    <?php echo form_error('nama_proker', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" value="<?php echo $to->deskripsi ?>">
                                    <?php echo form_error('deskripsi', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Target</label>
                                    <input type="text" name="target" class="form-control" value="<?php echo $to->target ?>">
                                    <?php echo form_error('target', '<div class="text-small text-danger"></div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" value="<?php echo $to->tanggal ?>">
                                    <?php echo form_error('tanggal', '<div class="text-small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name="status" class="form-control" value="<?php echo $to->status ?>">
                                    <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
                                </div>


                                <button type="submit" class="btn btn-primary">Save</button>
                                <a class="btn btn-outline-dark" href="<?php echo base_url(); ?>proker">Cancel</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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
            <a class="nav-link" href="<?php echo base_url(); ?>profil">
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
                        <h3 class="m-0 font-weight-bold text-primary">Profil Ormawa</h3><br>
                        <a href="<?php echo base_url(); ?>profil/tambahprofil" class="btn btn-primary">Tambah Profil</a>
                        <hr>
                    </div>
                    <div class="card-body">
                        <table class="table table-no-bordered">
                            <?php $no = 1;
                            foreach ($profil as $p) : ?>
                                <tr>
                                    <th>No </th>
                                    <td><?php echo $no++ ?></td>
                                </tr>
                                <tr>
                                    <th>Ormawa </th>
                                    <td><?php echo $p->nama_ormawa ?></td>
                                </tr>
                                <tr>
                                    <th>Sejarah </th>
                                    <td><?php echo $p->sejarah ?></td>
                                </tr>
                                <tr>
                                    <th>Visi Misi </th>
                                    <td><?php echo $p->visi_misi ?></td>
                                </tr>
                                <tr>
                                    <th>Sekretariat </th>
                                    <td><?php echo $p->sekretariat ?></td>
                                </tr>
                                <tr>
                                    <th>Kontak </th>
                                    <td><?php echo $p->kontak ?></td>
                                </tr>
                                <tr>
                                    <th><a class="btn btn-primary" href="<?php echo base_url('profil/' . $p->id_profil) ?>">Edit</a>
                                        <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger" href="<?php echo base_url('profil' . $p->id_profil) ?> ">Delete</a>
                                    </th>
                                </tr>
                                <tr>
                                    <th></br> </th>
                                    <td></br></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
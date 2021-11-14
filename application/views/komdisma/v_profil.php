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
            <a class="nav-link" href="<?php echo base_url(); ?>proker" aria-expanded="false">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Program Kerja</span>
            </a>
        </li>
    </ul>
</nav>

<?php
include "assets/spreadsheet.php";
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h3 class="m-0 font-weight-bold text-primary">Profil Ormawa</h3><br>
                                <a href="<?php echo base_url(); ?>profil/tambahprofil" class="btn btn-primary">Tambah Profil</a>
                                <hr>
                            </div>
                            <div class="card-body">
                                <?php
                                include "assets/spreadsheet/panggildata.php";

                                ?>
                                <table class="table table-center table-no-bordered" style="padding:100px">
                                    <?php $no = 1;
                                    foreach ($profil as $p) : ?>
                                        <div class="col-md-12">
                                            <tr>
                                                <th scope="col">No </th>
                                                <td scope="row"><span><?php echo $no++ ?></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Ormawa </th>
                                                <td scope="row"><span><?php echo $p->nama_ormawa ?></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Sejarah </th>
                                                <td scope="row"><?php echo $p->sejarah ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Visi Misi </th>
                                                <td scope="row"><span>
                                                        <p><?php echo $p->visi_misi ?>
                                                    </span></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Sekretariat </th>
                                                <td scope="row"><span><?php echo $p->sekretariat ?></span></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Kontak </th>
                                                <td scope="row"><span><?php echo $p->kontak ?></span></td>
                                            </tr>
                                            <tr>
                                                <th><a class="btn btn-primary" href="<?php echo base_url('profil/updatedata/' . $p->id_profil) ?> ">Edit</a>
                                                    <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger" href="<?php echo base_url('profil/deletedata/' . $p->id_profil) ?> ">Delete</a>
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
</div>
</div>
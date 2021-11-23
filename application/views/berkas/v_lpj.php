<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin ">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between m-auto">
                            <h4 class="">LPJ</h4>
                            <a href="<?php echo base_url(); ?>lpj/tambah" class="btn btn-sm btn-outline-info ti-plus"> Tambah LPJ</a>
                        </div>
                        <p class="card-description">

                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kegiatan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        $no = 1;
                                        foreach ($data_lpj as $u) {
                                        ?>
                                    <tr>
                                        <td><?= date("d/m/y, H:i:s") ?></td>
                                        <td><?php echo $u->nama_kegiatan ?></td>
                                        <td><?php if ($u->status = "Diterima") { ?>
                                                <label class="badge badge-success"><?php echo $u->status ?></label>
                                            <?php } else { ?><label class="badge badge-warning"><?php echo $u->status ?></label><?php }
                                                                                                                        } ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-link ti-zoom-in" href=""></a> |
                                            <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-link ti-download" href=""></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategori LPJ</h4>
                        <p class="card-description">

                        </p>
                        <a class="btn btn-sm btn-outline-success">Verifikasi</a> |
                        <a class="btn btn-sm btn-outline-warning">Revisi</a> |
                        <a class="btn btn-sm btn-outline-secondary">Pending</a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Simpan ke Drive</h4>
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'proposal'; ?>">
                            Pilih File:
                            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                            <br>
                            <a class="btn btn-sm btn-success" href="https://drive.google.com/drive/u/0/folders/1xWnJAfVqiojGURXdS_CCXeXelZQJczZk">Upload Drive</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
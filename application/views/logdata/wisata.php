<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <nav aria-label="breadcrumb mb-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wisata</li>
        </ol>
    </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Wisata</h6>
                </div>
                <div class="col-6 clearfix">
                    <a href="<?php echo base_url(); ?>logdata/wisata/tambah" class="btn btn-sm btn-success float-right ml-1 mr-1">
                        <i class="fa fa-plus"></i>
                        Tambah Wisata
                    </a>
                    <a target="_blank" href="<?php echo base_url(); ?>logdata/wisata/cetak" class="btn btn-sm btn-primary float-right ml-1 mr-1">
                        <i class="far fa-file-excel"></i>
                        Export Excel
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Alamat</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($wisata as $a) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $a->nama; ?></td>
                            <td><?php echo $a->kategori; ?></td>
                            <td><?php echo $a->alamat; ?></td>
                            <td><?php echo $a->deskripsi; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>logdata/wisata/info?id=<?php echo $a->id; ?>" class="btn btn-sm btn-info btn-circle">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/wisata/edit?id=<?php echo $a->id; ?>" class="btn btn-sm btn-warning btn-circle">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/wisata/hapus?id=<?php echo $a->id; ?>" class="btn btn-sm btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
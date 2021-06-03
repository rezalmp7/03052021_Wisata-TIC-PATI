<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <nav aria-label="breadcrumb mb-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengunjung</li>
        </ol>
    </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Pengunjung</h6>
                </div>
                <div class="col-6 clearfix">
                    <a href="<?php echo base_url(); ?>logdata/pengunjung/tambah" class="btn btn-sm btn-success float-right">
                        <i class="fas fa-user-plus"></i>
                        Tambah Pengunjung
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
                            <th>Username</th>
                            <th>No Telephone</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($pengunjung as $a) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $a->nama; ?></td>
                            <td><?php echo $a->username; ?></td>
                            <td><?php echo $a->no_hp; ?></td>
                            <td><?php echo $a->alamat; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>logdata/pengunjung/info?id=<?php echo $a->id; ?>" class="btn btn-sm btn-info btn-circle">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/pengunjung/edit?id=<?php echo $a->id; ?>" class="btn btn-sm btn-warning btn-circle">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/pengunjung/hapus?id=<?php echo $a->id; ?>" class="btn btn-sm btn-danger btn-circle btn-sm">
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
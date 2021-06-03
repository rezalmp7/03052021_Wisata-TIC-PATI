<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <nav aria-label="breadcrumb mb-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
        </ol>
    </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
                </div>
                <div class="col-6 clearfix">
                    <a href="<?php echo base_url(); ?>logdata/kategori/tambah" class="btn btn-sm btn-success float-right">
                        <i class="fa fa-plus"></i>
                        Tambah Kategori
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
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($kategori as $a) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $a->id; ?></td>
                            <td><?php echo $a->nama; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>logdata/kategori/edit?id=<?php echo $a->id; ?>" class="btn btn-sm btn-warning btn-circle">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/kategori/hapus?id=<?php echo $a->id; ?>" class="btn btn-sm btn-danger btn-circle btn-sm">
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
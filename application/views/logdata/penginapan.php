<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <nav aria-label="breadcrumb mb-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Penginapan</li>
        </ol>
    </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Penginapan</h6>
                </div>
                <div class="col-6 clearfix">
                    <a href="<?php echo base_url(); ?>logdata/penginapan/tambah" class="btn btn-sm btn-success float-right ml-1 mr-1">
                        <i class="fa fa-plus"></i>
                        Tambah Penginapan
                    </a>
                    <a target="_blank" href="<?php echo base_url(); ?>logdata/penginapan/cetak" class="btn btn-sm btn-primary float-right ml-1 mr-1">
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
                            <th>Nama Hotel</th>
                            <th>Alamat</th>
                            <th>Telepon/FAX</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($penginapan as $a) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                <?php echo $a->nama; ?>
                                <?php
                                for($b=1;$b<=$a->bintang;$b++)
                                {
                                    echo "<span style='color: #b3b30b;'><i class='fas fa-star'></i></span>";
                                }
                                ?>
                            </td>
                            <td><?php echo $a->alamat; ?></td>
                            <td><?php echo $a->telepon; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>logdata/penginapan/edit?id=<?php echo $a->id; ?>" class="btn btn-sm btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/penginapan/hapus?id=<?php echo $a->id; ?>" class="btn btn-sm btn-danger btn-circle btn-sm">
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
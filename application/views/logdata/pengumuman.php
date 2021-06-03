<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <nav aria-label="breadcrumb mb-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
        </ol>
    </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Pengumuman</h6>
                </div>
                <div class="col-6 clearfix">
                    <a href="<?php echo base_url(); ?>logdata/pengumuman/tambah" class="btn btn-sm btn-success float-right"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Photo</th>
                            <th>Tgl Berakhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($pengumuman as $a) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo date('d-m-Y h:i:s', strtotime($a->tgl_input)); ?></td>
                            <td><?php echo $a->judul; ?></td>
                            <td><img style="width: 100px" src="<?php echo base_url(); ?>assets/img/pengumuman/<?php echo $a->photo; ?>"></td>
                            <td><?php echo $a->tgl_berakhir; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>logdata/pengumuman/info?id=<?php echo $a->id; ?>" class="btn btn-sm btn-info btn-circle">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/pengumuman/edit?id=<?php echo $a->id; ?>" class="btn btn-sm btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/pengumuman/hapus?id=<?php echo $a->id; ?>" class="btn btn-sm btn-danger btn-circle btn-sm">
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
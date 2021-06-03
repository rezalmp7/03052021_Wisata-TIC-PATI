
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <nav aria-label="breadcrumb mb-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-primary">User</h6>
                        </div>
                        <div class="col-6 clearfix">
                            <a href="<?php echo base_url(); ?>logdata/user/tambah" class="btn btn-sm btn-success float-right">
                                <i class="fas fa-user-plus"></i>
                                Tambah User
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
                        <th>Email</th>
                        <th>Level</th>
                        <th>Object Wisata</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($user as $a) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $a->nama; ?></td>
                            <td><?php echo $a->username; ?></td>
                            <td><?php echo $a->email; ?></td>
                            <td><?php if($a->level == 1) echo "admin"; else echo "pengurus"; ?></td>
                            <td><?php echo $a->nm_wisata; ?> </td>
                            <td>
                                <a href="<?php echo base_url(); ?>logdata/user/info?id=<?php echo $a->id; ?>" class="btn btn-sm btn-info btn-circle">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/user/edit?id=<?php echo $a->id; ?>" class="btn btn-sm btn-warning btn-circle">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>logdata/user/hapus?id=<?php echo $a->id; ?>" class="btn btn-sm btn-danger btn-circle btn-sm">
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
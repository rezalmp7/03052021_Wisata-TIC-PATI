
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <nav aria-label="breadcrumb mb-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/user">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Info</li>
                </ol>
            </nav>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-primary">Info User</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless col-md-6" cellspacing="0">
                            <tr>
                                <th>Nama</th>
                                <td><?php echo $user->nama; ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?php echo $user->username; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $user->email; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><?php echo $user->alamat; ?></td>
                            </tr>
                            <tr>
                                <th>No. Telephone</th>
                                <td><?php echo $user->no_hp; ?></td>
                            </tr>
                            <tr>
                                <th>Sebagai</th>
                                <td><?php if($user->level == 1) echo "admin"; else echo "pengelola"; ?></td>
                            </tr>
                            <tr>
                                <th>Objek Wisata</th>
                                <td><?php echo $user->nm_wisata; ?></td>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  
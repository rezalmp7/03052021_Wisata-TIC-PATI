
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <nav aria-label="breadcrumb mb-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/pengunjung">Pengunjung</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Info</li>
                </ol>
            </nav>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-primary">Info Pengunjung</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless col-md-12" cellspacing="0">
                            <tr>
                                <th>Nama</th>
                                <td><?php echo $pengunjung->nama; ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?php echo $pengunjung->username; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><?php echo $pengunjung->alamat; ?></td>
                            </tr>
                            <tr>
                                <th>No. Telephone</th>
                                <td><?php echo $pengunjung->no_hp; ?></td>
                            </tr>
                            <tr>
                                <th>TTL</th>
                                <td><?php echo $pengunjung->tempat_lahir; ?>, <?php echo date("d-m-Y", strtotime($pengunjung->tanggal_lahir)); ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><?php echo $pengunjung->jenis_kelamin; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Daftar</th>
                                <td><?php echo date("d-m-Y", strtotime($pengunjung->tgl_register)); ?></td>
                            </tr>
                        </table>
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="rating-tab" data-toggle="tab" href="#rating" role="tab" aria-controls="rating" aria-selected="true">Rating</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="photo-tab" data-toggle="tab" href="#photo" role="tab" aria-controls="photo" aria-selected="false">Photo</a>
                                </li>
                            </ul>
                            <div class="tab-content p-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="rating" role="tabpanel" aria-labelledby="rating-tab">
                                            
                                    <h4>Saran dan Kritik</h4>
                                    <div class="col-md-12 m-0 p-2">
                                        <div class="col-md-12 m-0 p-2">
                                            <div class="col-md-12 m-0 p-2 rounded-lg">
                                                <h5 class="text-dark p-0 m-0"><b>Kebun Jollong <span data-color="#FFD700" class="jstars" data-value="5"></span> 5</b></h5>
                                                <small>17-06-2020</small>
                                                <p>Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum,Lorem Ipsum,Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-0 p-2">
                                            <div class="col-md-12 m-0 p-2 rounded-lg">
                                                <h5 class="text-dark p-0 m-0"><b>Rezal Wahyu Pratama</b></h5>
                                                <small>17-06-2020</small>
                                                <p>Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum,Lorem Ipsum,Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-0 p-2">
                                            <div class="col-md-12 m-0 p-2 rounded-lg">
                                                <h5 class="text-dark p-0 m-0"><b>Rezal Wahyu Pratama</b></h5>
                                                <small>17-06-2020</small>
                                                <p>Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum,Lorem Ipsum,Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-0 p-2">
                                            <div class="col-md-12 m-0 p-2 rounded-lg">
                                                <h5 class="text-dark p-0 m-0"><b>Rezal Wahyu Pratama</b></h5>
                                                <small>17-06-2020</small>
                                                <p>Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum,Lorem Ipsum,Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="photo" role="tabpanel" aria-labelledby="photo-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  
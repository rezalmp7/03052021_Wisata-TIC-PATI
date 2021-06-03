
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <nav aria-label="breadcrumb mb-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/pengumuman">Pengumuman</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Info</li>
                </ol>
            </nav>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-primary">Info Pengumuman</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive col-md-12 m-0 p-1">
                            <table class="table table-borderless col-md-12" cellspacing="0">
                                <tr>
                                    <th>Judul</th>
                                    <td><?php echo $pengumuman->judul; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Upload</th>
                                    <td><?php echo date('d-m-Y', strtotime($pengumuman->tgl_input)); ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Berakhir</th>
                                    <td><?php echo date('d-m-Y', strtotime($pengumuman->tgl_berakhir)); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <img src="<?php echo base_url(); ?>assets/img/pengumuman/<?php echo $pengumuman->photo; ?>" height="250px" class="mx-auto d-block">
                    <div class="p-1 pt-4">
                        <?php echo $pengumuman->isi; ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  
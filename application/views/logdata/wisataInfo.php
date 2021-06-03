
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <nav aria-label="breadcrumb mb-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>logdata/wisata">Wisata</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Info</li>
                </ol>
            </nav>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="m-0 font-weight-bold text-primary">Info Wisata <?php echo $wisata->nm_wisata; ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive col-md-6 m-0 p-1">
                            <table class="table table-borderless col-md-12" cellspacing="0">
                                <tr>
                                    <th>Nama</th>
                                    <td><?php echo $wisata->nm_wisata; ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis</th>
                                    <td><?php echo $wisata->jenis_alam.", ".$wisata->jenis_budaya.", ".$wisata->jenis_buatan; ?></td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td><?php echo $wisata->nm_kategori; ?></td>
                                </tr>
                                <tr>
                                    <th>Sub Kategori</th>
                                    <td><?php echo $wisata->nm_sub_kategori; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><?php echo $wisata->alamat; ?></td>
                                </tr>
                                <tr>
                                    <th>Kontak</th>
                                    <td><?php echo $wisata->kontak.", ".$wisata->kontak_no." (".$wisata->kontak_nama.")"; ?></td>
                                </tr>
                                <tr>
                                    <th>Izin Usaha</th>
                                    <td><?php echo $wisata->izin_usaha; ?></td>
                                </tr>
                                <tr>
                                    <th>Kepemilikan</th>
                                    <td><?php echo $wisata->milik; ?></td>
                                </tr>
                                <tr>
                                    <th>Luas Objek Wisata</th>
                                    <td><?php echo $wisata->luas_dtw; ?></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">Tenaga Kerja</th>
                                    <td><?php echo $wisata->tenaga_kerja_l." laki-laki"; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $wisata->tenaga_kerja_p." Perempuan"; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="table-responsive col-md-6 p-1">
                            <table class="table table-borderless col-md-12" cellspacing="0">
                                <tr>
                                    <th>Asuransi</th>
                                    <td colspan="2"><?php echo $wisata->asuransi; ?></td>
                                </tr>
                                <tr>
                                    <th>Kondisi Jalan</th>
                                    <td colspan="2"><?php echo $wisata->kondisi_jalan; ?></td>
                                </tr>
                                <tr>
                                    <th>Petunjuk Arah</th>
                                    <td colspan="2"><?php echo $wisata->petunjuk_arah; ?></td>
                                </tr>
                                <tr>
                                    <th>Jarak Kota</th>
                                    <td colspan="2"><?php echo $wisata->jarak_kota; ?></td>
                                </tr>
                                <tr>
                                    <th>Kantor</th>
                                    <td colspan="2"><?php echo $wisata->kantor; ?></td>
                                </tr>
                                <tr>
                                    <th>Toilet</th>
                                    <td colspan="2"><?php echo $wisata->toilet; ?></td>
                                </tr>
                                <tr>
                                    <th>Parkir</th>
                                    <td colspan="2"><?php echo $wisata->parkir; ?></td>
                                </tr>
                                <tr>
                                    <th>Mushola</th>
                                    <td colspan="2"><?php echo $wisata->mushola; ?></td>
                                </tr>
                                <tr>
                                    <th>TIC</th>
                                    <td colspan="2"><?php echo $wisata->tic; ?></td>
                                </tr>
                                <tr>
                                    <th>Alat Kesehatan</th>
                                    <td colspan="2"><?php echo $wisata->alat_kesehatan; ?></td>
                                </tr>
                                <tr>
                                    <th>ATM</th>
                                    <td colspan="2"><?php echo $wisata->atm; ?></td>
                                </tr>
                                <tr>
                                    <th>Pemandangan</th>
                                    <td colspan="2"><?php echo $wisata->pemandangan; ?></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">HTM Weekday</th>
                                    <td>Dewasa</td>
                                    <td>Rp. <?php echo $wisata->htm_weekday_d; ?></td>
                                </tr>
                                <tr>
                                    <td>Anak</td>
                                    <td>Rp. <?php echo $wisata->htm_weekday_a; ?></td>
                                </tr>
                                <tr>
                                    <th rowspan="2">HTM Weekend</th>
                                    <td>Dewasa</td>
                                    <td>Rp. <?php echo $wisata->htm_weekend_d; ?></td>
                                </tr>
                                <tr>
                                    <td>Anak</td>
                                    <td>Rp. <?php echo $wisata->htm_weekend_a; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
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
                                            
                                <h4>Saran dan Kritik [<?php echo $jumlah_sarankritik_wisata; ?>]</h4>
                                <div class="col-md-12 m-0 p-2">
                                    <?php
                                    foreach ($sarankritik_wisata as $b) {
                                    ?>
                                    <div class="col-md-12 m-0 p-2">
                                        <div class="col-md-12 m-0 p-2 rounded-lg">
                                            <h5 class="text-dark p-0 m-0"><b><?php echo $b->nama; ?> <span data-color="#FFD700" class="jstars" data-value="<?php echo $b->rating; ?>"></span></b></h5>
                                            <small><?php echo date('d-m-Y h:m:s', strtotime($b->tgl_input)); ?></small>
                                            <p><?php echo $b->saran_kritik; ?></p>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                                <div class="row">
                                    <?php
                                    foreach ($photo_wisata as $a) {
                                    ?>
                                    <div class="m-1 shadow d-block rounded-lg" alt="<?php echo $a->nama; ?>" style="background-position: center; background-repeat: no-repeat; height: 200px; width: 200px; background-size: cover; background-image: url('<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $a->photo; ?>');">
                                        <a href="<?php echo base_url(); ?>logdata/wisata/hapus_photo?id=<?php echo $a->id; ?>" class="btn btn-sm ml-1 mt-1 btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <a href="#" class="btn btn-sm ml-1 mt-1 btn-primary" data-toggle="modal" data-target="#modal-image-<?php echo $a->id; ?>"><i class="fas fa-info"></i></a>
                                    </div>
                                    <div class="modal fade" id="modal-image-<?php echo $a->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $a->nama; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $a->photo; ?>" class="col-12">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="m-1">
                                        <a class="btn btn-success" href="<?php echo base_url(); ?>logdata/wisata/tambah_photo?id=<?php echo $wisata->id; ?>"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->  
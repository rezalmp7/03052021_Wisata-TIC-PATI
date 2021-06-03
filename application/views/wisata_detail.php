        <div class="col-md-12 m-0 p-0" id="wisata_detail">
            <div class="col-md-12 m-0 p-2 p-md-5" id="body">
                <?php
                if(isset($_GET['msg']) && $_GET['msg'] == 1)
                {
                ?>
                <div class="alert alert-warning" role="alert">
                    <strong>Terima Kasih</strong> saran dan kritiknya
                </div>
                <?php
                }
                if(isset($_GET['msg']) && $_GET['msg'] == 2)
                {
                ?>
                <div class="alert alert-warning" role="alert">
                    <strong>Photo</strong> Gagal Diupload Cek Format & file size
                </div>
                <?php
                }
                if(isset($_GET['msg']) && $_GET['msg'] == 1)
                {
                ?>
                <div class="alert alert-warning" role="alert">
                    <strong>Photo</strong> berhasil di upload
                </div>
                <?php
                }
                ?>
                <div class="col-md-12 m-0 p-2 clearfix">
                    <div class="col-md-6 m-0 p-2 d-block float-right">
                        <div class="col-md-12 m-0 p-0 pt-4" id="gallery">
                            <div class="col-md-12 m-0 p-2">
                                <div class="col-md-12 m-0 p-0 gallery d-flex align-content-stretch flex-wrap bd-highlight">
                                    <?php
                                    foreach ($photo_wisata as $a) {
                                    ?>
                                    <a href="<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $a->photo; ?>" class="col-6 col-md-4 big p-1 flex-fill bd-highlight" rel="rel1">
                                        <img src="<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $a->photo; ?>" class="col-md-12 m-0 p-0" alt=""
                                            title="<?php echo $a->nama." | ".$a->uploader; ?>">
                                    </a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 m-0 p-2 d-block float-left">
                        <h2><?php echo $wisata->nama; ?></h2>
                        <h4>Harga Masuk</h4>
                        <div>
                            Senin - Jumat
                            <table class="table-borderless mb-2">
                                <tr>
                                    <th>Dewasa</th>
                                    <td> : </td>
                                    <td> <?php echo $wisata->htm_weekday_d; ?><td>
                                </tr>
                                <tr>
                                    <th>Anak - anak</th>
                                    <td> : </td>
                                    <td> <?php echo $wisata->htm_weekday_a; ?><td>
                                </tr>
                            </table>
                            Sabtu - Minggu
                            <table class="table-borderless">
                                <tr>
                                    <th>Dewasa</th>
                                    <td> : </td>
                                    <td> <?php echo $wisata->htm_weekend_d; ?><td>
                                </tr>
                                <tr>
                                    <th>Anak - anak</th>
                                    <td> : </td>
                                    <td> <?php echo $wisata->htm_weekend_a; ?><td>
                                </tr>
                            </table>
                            <br>
                        </div>
                        <h4>Lokasi</h4>
                        <p><?php echo $wisata->alamat; ?></p>
                        <h4>Deskripsi</h4>
                        <div><?php echo $wisata->deskripsi; ?></div>
                        <div class="col-md-12 m-0 p-2">
                            <?php
                            if($this->session->userdata('status') != null && $this->session->userdata('status') == 'login_client_ticpati')
                            {
                            ?><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#sarankritik">
                                <i class="fas fa-angle-double-down"></i> Saran dan Kritik
                            </button>
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#photo">
                                <i class="fas fa-camera-retro"></i> Upload Gambar
                            </button>
                            <?php
                            }
                            else
                            {
                            ?>
                            <a href="<?php echo base_url(); ?>login" class="btn btn-sm btn-warning">
                                <i class="fas fa-angle-double-down"></i> Saran dan Kritik
                            </a>
                            <a href="<?php echo base_url(); ?>login" class="btn btn-sm btn-warning">
                                <i class="fas fa-camera-retro"></i> Upload Gambar
                            </a>
                            <?php
                            }
                            ?>
                            <!-- Modal -->
                            <div class="modal fade" id="sarankritik" tabindex="-1" role="dialog" aria-labelledby="sarankritikLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Saran Dan Kritik</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?php echo base_url(); ?>wisata/sarankritik_aksi">
                                                <input type="hidden" name="id_wisata" value="<?php echo $this->input->get('id'); ?>">
                                                <div class="rating">
                                                    <label>
                                                        <input type="radio" name="rating" value="1" required>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="2" required>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="3" required>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="4" required>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating" value="5" required>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Saran dan Kritik <span style="color: red; ">*</span></label>
                                                    <textarea name="sarankritik" class="form-control"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="photoLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload Photo</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?php echo base_url(); ?>wisata/photo_aksi" enctype="multipart/form-data">
                                                <input type="hidden" name="id_wisata" value="<?php echo $this->input->get('id'); ?>">
                                                <input type="hidden" name="nama_wisata" value="<?php echo $wisata->nama; ?>">
                                                <input type="hidden" name="id_photo" value="<?php echo $max_id_wisata; ?>">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Judul</label>
                                                    <input type="text" name="judul" class="form-control" maxlength="50" placeholder="Maksimal Karakter 50">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Upload Photo</label>
                                                    <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
                                                    <small id="emailHelp" class="form-text text-muted">Extensi File jpg|jpeg|png|jfif, max size 100 mb.</small>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
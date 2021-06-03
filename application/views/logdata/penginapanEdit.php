
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Penginapan</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="<?php echo base_url(); ?>logdata/penginapan/edit_aksi">
                        <input type="hidden" value="<?php echo $penginapan->id; ?>" name="id">
                        <div class="row">
                            <div class="col-md-12 p-3">
                                <div class="form-group">
                                    <label><span style="color: black;">Nama</span> <span style="color: red">*</span></label>
                                    <input type="text" name="nama" value="<?php echo $penginapan->nama; ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Bintang</span> <span style="color: red">*</span></label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio0" name="bintang" value="0" <?php if($penginapan->bintang == 0) echo "checked"; ?> class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio0">Belum</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="bintang" value="1" <?php if($penginapan->bintang == 1) echo "checked"; ?> class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio1"><i class="fas fa-star"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="bintang" value="2" <?php if($penginapan->bintang == 2) echo "checked"; ?> class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio2"><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="bintang" value="3" <?php if($penginapan->bintang == 3) echo "checked"; ?> class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="bintang" value="4" <?php if($penginapan->bintang == 4) echo "checked"; ?> class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="bintang" value="5" <?php if($penginapan->bintang == 5) echo "checked"; ?> class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kecamatan</span> <span style="color: red">*</span></label>
                                    <select class="form-control" name="kecamatan" required>
                                        <option>-- Pilih Kecamatan --</option>
                                        <option value="1" <?php if($penginapan->kecamatan == 1) echo "selected"; ?>>Batangan</option>
                                        <option value="2" <?php if($penginapan->kecamatan == 2) echo "selected"; ?>>Cluwak</option>
                                        <option value="3" <?php if($penginapan->kecamatan == 3) echo "selected"; ?>>Dukuhseti</option>
                                        <option value="4" <?php if($penginapan->kecamatan == 4) echo "selected"; ?>>Gabus</option>
                                        <option value="5" <?php if($penginapan->kecamatan == 5) echo "selected"; ?>>Gembong</option>
                                        <option value="6" <?php if($penginapan->kecamatan == 6) echo "selected"; ?>>Gunungwungkal</option>
                                        <option value="7" <?php if($penginapan->kecamatan == 7) echo "selected"; ?>>Jaken</option>
                                        <option value="8" <?php if($penginapan->kecamatan == 8) echo "selected"; ?>>Jakenan</option>
                                        <option value="9" <?php if($penginapan->kecamatan == 9) echo "selected"; ?>>Juwana</option>
                                        <option value="10" <?php if($penginapan->kecamatan == 10) echo "selected"; ?>>Kayen</option>
                                        <option value="11" <?php if($penginapan->kecamatan == 11) echo "selected"; ?>>Margorejo</option>
                                        <option value="12" <?php if($penginapan->kecamatan == 12) echo "selected"; ?>>Margoyoso</option>
                                        <option value="13" <?php if($penginapan->kecamatan == 13) echo "selected"; ?>>Pati</option>
                                        <option value="14" <?php if($penginapan->kecamatan == 14) echo "selected"; ?>>Pucakwangi</option>
                                        <option value="15" <?php if($penginapan->kecamatan == 15) echo "selected"; ?>>Sukolilo</option>
                                        <option value="16" <?php if($penginapan->kecamatan == 16) echo "selected"; ?>>Tambakromo</option>
                                        <option value="17" <?php if($penginapan->kecamatan == 17) echo "selected"; ?>>Tayu</option>
                                        <option value="18" <?php if($penginapan->kecamatan == 18) echo "selected"; ?>>Tlogowungu</option>
                                        <option value="19" <?php if($penginapan->kecamatan == 19) echo "selected"; ?>>Trangkil</option>
                                        <option value="20" <?php if($penginapan->kecamatan == 20) echo "selected"; ?>>Wedarijaksa</option>
                                        <option value="21" <?php if($penginapan->kecamatan == 21) echo "selected"; ?>>Winong</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Alamat</span></label>
                                    <textarea class="form-control" name="alamat" required><?php echo $penginapan->alamat; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Telepon</span></label>
                                    <input type="text" name="telepon" class="form-control" placeholder="telepon" value="<?php echo $penginapan->telepon; ?>">
                                </div>
                            </div>
                        </div>
                        <button style="submit" class="btn btn-primary rounded-pill pr-5 pl-5">
                            Edit
                        </button>
                  </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      
      
      <!-- End of Main Content -->
      
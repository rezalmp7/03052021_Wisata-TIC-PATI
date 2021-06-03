
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Penginapan</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="<?php echo base_url(); ?>logdata/penginapan/tambah_aksi">
                        <div class="row">
                            <div class="col-md-12 p-3">
                                <div class="form-group">
                                    <label><span style="color: black;">Nama</span> <span style="color: red">*</span></label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Bintang</span> <span style="color: red">*</span></label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio0" name="bintang" value="0" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio0">Belum</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="bintang" value="1" class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio1"><i class="fas fa-star"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="bintang" value="2" class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio2"><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="bintang" value="3" class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="bintang" value="4" class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="bintang" value="5" class="custom-control-input">
                                        <label style="color: #b3b30b;" class="custom-control-label" for="customRadio5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kecamatan</span> <span style="color: red">*</span></label>
                                    <select class="form-control" name="kecamatan" required>
                                        <option>-- Pilih Kecamatan --</option>
                                        <option value="1">Batangan</option>
                                        <option value="2">Cluwak</option>
                                        <option value="3">Dukuhseti</option>
                                        <option value="4">Gabus</option>
                                        <option value="5">Gembong</option>
                                        <option value="6">Gunungwungkal</option>
                                        <option value="7">Jaken</option>
                                        <option value="8">Jakenan</option>
                                        <option value="9">Juwana</option>
                                        <option value="10">Kayen</option>
                                        <option value="11">Margorejo</option>
                                        <option value="12">Margoyoso</option>
                                        <option value="13">Pati</option>
                                        <option value="14">Pucakwangi</option>
                                        <option value="15">Sukolilo</option>
                                        <option value="16">Tambakromo</option>
                                        <option value="17">Tayu</option>
                                        <option value="18">Tlogowungu</option>
                                        <option value="19">Trangkil</option>
                                        <option value="20">Wedarijaksa</option>
                                        <option value="21">Winong</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Alamat</span></label>
                                    <textarea class="form-control" name="alamat" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Telepon</span></label>
                                    <input type="text" name="telepon" class="form-control" placeholder="telepon">
                                </div>
                            </div>
                        </div>
                        <button style="submit" class="btn btn-primary rounded-pill pr-5 pl-5">
                            Tambah
                        </button>
                  </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      
      
      <!-- End of Main Content -->
      

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="<?php echo base_url(); ?>logdata/wisata/tambah_aksi">
                        <div class="row">
                            <div class="col-md-6 p-3">
                                <div class="form-group">
                                    <label><span style="color: black;">Nama</span> <span style="color: red">*</span></label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Jenis</span> <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="alam" name="jenis_alam">
                                        <label class="form-check-label" for="inlineCheckbox1">Alam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="budaya" name="jenis_budaya">
                                        <label class="form-check-label" for="inlineCheckbox2">Budaya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="buatan" name="jenis_buatan">
                                        <label class="form-check-label" for="inlineCheckbox3">Buatan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kategori</span> <span style="color: red">*</span></label>
                                    <select class="form-control" name="kategori" id="kategori" required>
                                        <option value="">-- Pilih Kategori --</option>
                                        <?php
                                        foreach ($kategori as $a) {
                                        ?>
                                        <option value="<?php echo $a->id; ?>"><?php echo $a->nama; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Sub Kategori</span> <span style="color: red">*</span></label>
                                    <select class="sub_kategori form-control" name="sub_kategori" required>
                                        <option value="">-- Pilih Sub Kategori --</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Maps Embed</span> <a href="#" data-toggle="popover" data-content="Buka https://www.google.co.id/maps -> Cari Lokasi -> bagikan -> sematkan peta / embed maps -> salin html -> paste disini"><i class="fas fa-question-circle"></i></a></label>
                                    <textarea class="form-control" name="maps" required></textarea>
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
                                    <label><span style="color: black;">Kontak</span></label>
                                    <input type="text" name="kontak" class="form-control" placeholder="kontak">
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="text" name="nama_kontak" class="form-control" placeholder="nama_kontak">
                                    </div>
                                    <div class="form-group col">
                                        <input type="text" name="no_kontak" class="form-control" placeholder="no_kontak">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Milik</span> <span style="color: red;">*</span></label>
                                    <input type="text" name="milik" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Luas (ha)</span></label>
                                    <input type="text" name="luas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Pekerja</span></label>
                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="number" name="tenaga_kerja_l" class="form-control" placeholder="Laki - laki">
                                        </div>
                                        <div class="form-group col">
                                            <input type="number" name="tenaga_kerja_p" class="form-control" placeholder="Perempuan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Jarak Kota (Km)</span></label>
                                    <input class="form-control" type="number" name="jarak_kota">
                                </div>
                            </div>
                            <div class="col-md-6 p-3">
                                <div class="form-group">
                                    <label><span style="color: black;">Izin Usaha</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="izin_usaha" id="izin_usaha_ada" value="ada">
                                        <label class="form-check-label" for="izin_usaha_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="izin_usaha" id="izin_usaha_belum" value="belum">
                                        <label class="form-check-label" for="izin_usaha_belum">Belum</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="izin_usaha" id="izin_usaha_proses" value="proses">
                                        <label class="form-check-label" for="izin_usaha_proses">Proses</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Asurasi</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="asuransi" id="asuransi_ada" value="ada" required>
                                        <label class="form-check-label" for="asuransi_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="asuransi" id="asuransi_belum" value="belum" required>
                                        <label class="form-check-label" for="asuransi_belum">Belum</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="asuransi" id="asuransi_proses" value="proses" required>
                                        <label class="form-check-label" for="asuransi_proses">Proses</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kondisi Jalan</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kondisi_jalan" id="kondisi_jalan_baik" value="baik" required>
                                        <label class="form-check-label" for="kondisi_jalan_baik">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kondisi_jalan" id="kondisi_jalan_jelek" value="jelek" required>
                                        <label class="form-check-label" for="kondisi_jalan_jelek">Jelek</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kantor</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kantor" id="kantor_ada" value="ada" required>
                                        <label class="form-check-label" for="kantor_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kantor" id="kantor_belum" value="belum" required>
                                        <label class="form-check-label" for="kantor_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Toilet</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="toilet" id="toilet_ada" value="ada" required>
                                        <label class="form-check-label" for="toilet_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="toilet" id="toilet_belum" value="belum" required>
                                        <label class="form-check-label" for="toilet_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Parkir</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="parkir" id="parkir_ada" value="ada" required>
                                        <label class="form-check-label" for="parkir_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="parkir" id="parkir_belum" value="belum" required>
                                        <label class="form-check-label" for="parkir_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Mushola</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mushola" id="mushola_ada" value="ada" required>
                                        <label class="form-check-label" for="mushola_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mushola" id="mushola_belum" value="belum" required>
                                        <label class="form-check-label" for="mushola_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">TIC</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tic" id="tic_ada" value="ada" required>
                                        <label class="form-check-label" for="tic_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tic" id="tic_belum" value="belum" required>
                                        <label class="form-check-label" for="tic_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Alat Kesehatan</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="alat_kesehatan" id="alat_kesehatan_ada" value="ada" required>
                                        <label class="form-check-label" for="alat_kesehatan_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="alat_kesehatan" id="alat_kesehatan_belum" value="belum" required>
                                        <label class="form-check-label" for="alat_kesehatan_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">ATM</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="atm" id="atm_ada" value="ada" required>
                                        <label class="form-check-label" for="atm_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="atm" id="atm_belum" value="belum" required>
                                        <label class="form-check-label" for="atm_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Biaya Masuk (Rp)</span></label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>Biasa</label>
                                        <div class="form-group col">
                                            <input type="text" name="htm_weekday_d" class="form-control" placeholder="Dewasa">
                                        </div>
                                        <div class="form-group col">
                                            <input type="text" name="htm_weekday_a" class="form-control" placeholder="Anak">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>Libur</label>
                                        <div class="form-group col">
                                            <input type="text" name="htm_weekend_d" class="form-control" placeholder="Dewasa">
                                        </div>
                                        <div class="form-group col">
                                            <input type="text" name="htm_weekend_a" class="form-control" placeholder="Anak">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Pemandangan</span> <span style="color: red">*</span></label>
                                    <input type="text" name="pemandangan" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><span style="color: black; ?>">Deskripsi</span> <span style="color: red;">*</span></label>
                            <textarea name="deskripsi" id="editor" required>
                            </textarea>
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
      
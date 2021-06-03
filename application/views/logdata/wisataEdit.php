
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Wisata</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="<?php echo base_url(); ?>logdata/wisata/edit_aksi">
                        <input type="hidden" name="id" value="<?php echo $wisata->id; ?>">
                        <div class="row">
                            <div class="col-md-6 p-3">
                                <div class="form-group">
                                    <label><span style="color: black;">Nama</span> <span style="color: red">*</span></label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $wisata->nama; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Jenis</span> <span style="color: red">*</span></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="alam" name="jenis_alam" <?php if($wisata->jenis_alam != null) echo "checked"; ?> >
                                        <label class="form-check-label" for="inlineCheckbox1">Alam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="budaya" name="jenis_budaya" <?php if($wisata->jenis_budaya != null) echo "checked"; ?> >
                                        <label class="form-check-label" for="inlineCheckbox2">Budaya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="buatan" name="jenis_buatan" <?php if($wisata->jenis_buatan != null) echo "checked"; ?> >
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
                                        <option value="<?php echo $a->id; ?>" <?php if($wisata->kategori == $a->id) echo "selected"; ?>><?php echo $a->nama; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Sub Kategori</span> <span style="color: red">*</span></label>
                                    <select class="sub_kategori form-control" name="sub_kategori" required>
                                        <option value="">-- Pilih Sub Kategori --</option>
                                        <?php
                                        foreach ($sub_kategori as $b) {
                                            if($b->id_kategori != $wisata->kategori)
                                            {
                                                continue;
                                            }
                                            else {
                                        ?>
                                        <option value="<?php echo $b->id; ?>" <?php if($b->id == $wisata->sub_kategori) echo "selected"; ?>><?php echo $b->nama; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Maps Embed</span> <a href="#" data-toggle="popover" data-content="Buka https://www.google.co.id/maps -> Cari Lokasi -> bagikan -> sematkan peta / embed maps -> salin html -> paste disini"><i class="fas fa-question-circle"></i></a></label>
                                    <textarea class="form-control" name="maps" required><?php echo $wisata->maps; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kecamatan</span> <span style="color: red">*</span></label>
                                    <select class="form-control" name="kecamatan" required>
                                        <option>-- Pilih Kecamatan --</option>
                                        <option value="1" <?php if($wisata->kecamatan == '1') echo "selected"; ?>>Batangan</option>
                                        <option value="2" <?php if($wisata->kecamatan == '2') echo "selected"; ?>>Cluwak</option>
                                        <option value="3" <?php if($wisata->kecamatan == '3') echo "selected"; ?>>Dukuhseti</option>
                                        <option value="4" <?php if($wisata->kecamatan == '4') echo "selected"; ?>>Gabus</option>
                                        <option value="5" <?php if($wisata->kecamatan == '5') echo "selected"; ?>>Gembong</option>
                                        <option value="6" <?php if($wisata->kecamatan == '6') echo "selected"; ?>>Gunungwungkal</option>
                                        <option value="7" <?php if($wisata->kecamatan == '7') echo "selected"; ?>>Jaken</option>
                                        <option value="8" <?php if($wisata->kecamatan == '8') echo "selected"; ?>>Jakenan</option>
                                        <option value="9" <?php if($wisata->kecamatan == '9') echo "selected"; ?>>Juwana</option>
                                        <option value="10" <?php if($wisata->kecamatan == '10') echo "selected"; ?>>Kayen</option>
                                        <option value="11" <?php if($wisata->kecamatan == '11') echo "selected"; ?>>Margorejo</option>
                                        <option value="12" <?php if($wisata->kecamatan == '12') echo "selected"; ?>>Margoyoso</option>
                                        <option value="13" <?php if($wisata->kecamatan == '13') echo "selected"; ?>>Pati</option>
                                        <option value="14" <?php if($wisata->kecamatan == '14') echo "selected"; ?>>Pucakwangi</option>
                                        <option value="15" <?php if($wisata->kecamatan == '15') echo "selected"; ?>>Sukolilo</option>
                                        <option value="16" <?php if($wisata->kecamatan == '16') echo "selected"; ?>>Tambakromo</option>
                                        <option value="17" <?php if($wisata->kecamatan == '17') echo "selected"; ?>>Tayu</option>
                                        <option value="18" <?php if($wisata->kecamatan == '18') echo "selected"; ?>>Tlogowungu</option>
                                        <option value="19" <?php if($wisata->kecamatan == '19') echo "selected"; ?>>Trangkil</option>
                                        <option value="20" <?php if($wisata->kecamatan == '20') echo "selected"; ?>>Wedarijaksa</option>
                                        <option value="21" <?php if($wisata->kecamatan == '21') echo "selected"; ?>>Winong</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Alamat</span></label>
                                    <textarea class="form-control" name="alamat" required><?php echo $wisata->alamat; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kontak</span></label>
                                    <input type="text" name="kontak" class="form-control" value="<?php echo $wisata->kontak; ?>" placeholder="kontak">
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="text" name="nama_kontak" class="form-control" value="<?php echo $wisata->kontak_nama; ?>" placeholder="nama_kontak">
                                    </div>
                                    <div class="form-group col">
                                        <input type="text" name="no_kontak" class="form-control" value="<?php echo $wisata->kontak_no; ?>" placeholder="no_kontak">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Milik</span> <span style="color: red;">*</span></label>
                                    <input type="text" name="milik" class="form-control" value="<?php echo $wisata->milik; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Luas (ha)</span></label>
                                    <input type="number" name="luas" value="<?php echo $wisata->luas_dtw; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Pekerja</span></label>
                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="number" name="tenaga_kerja_l" class="form-control" value="<?php echo $wisata->tenaga_kerja_l; ?>" placeholder="Laki - laki">
                                        </div>
                                        <div class="form-group col">
                                            <input type="number" name="tenaga_kerja_p" class="form-control" value="<?php echo $wisata->tenaga_kerja_p; ?>" placeholder="Perempuan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Jarak Kota (Km)</span></label>
                                    <input class="form-control" type="number" value="<?php echo $wisata->jarak_kota; ?>" name="jarak_kota">
                                </div>
                            </div>
                            <div class="col-md-6 p-3">
                                <div class="form-group">
                                    <label><span style="color: black;">Izin Usaha</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="izin_usaha" id="izin_usaha_ada" <?php if($wisata->izin_usaha == 'ada') echo "checked"; ?> value="ada">
                                        <label class="form-check-label" for="izin_usaha_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="izin_usaha" id="izin_usaha_belum" <?php if($wisata->izin_usaha == 'belum') echo "checked"; ?> value="belum">
                                        <label class="form-check-label" for="izin_usaha_belum">Belum</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="izin_usaha" id="izin_usaha_proses" <?php if($wisata->izin_usaha == 'proses') echo "checked"; ?> value="proses">
                                        <label class="form-check-label" for="izin_usaha_proses">Proses</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Asurasi</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="asuransi" id="asuransi_ada" value="ada" <?php if($wisata->asuransi == 'ada') echo "checked"; ?> required>
                                        <label class="form-check-label" for="asuransi_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="asuransi" id="asuransi_belum" value="belum" <?php if($wisata->asuransi == 'belum') echo "checked"; ?> required>
                                        <label class="form-check-label" for="asuransi_belum">Belum</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="asuransi" id="asuransi_proses" value="proses" <?php if($wisata->asuransi == 'proses') echo "checked"; ?> required>
                                        <label class="form-check-label" for="asuransi_proses">Proses</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kondisi Jalan</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kondisi_jalan" id="kondisi_jalan_baik" value="baik" <?php if($wisata->kondisi_jalan == 'baik') echo "checked"; ?> required>
                                        <label class="form-check-label" for="kondisi_jalan_baik">Baik</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kondisi_jalan" id="kondisi_jalan_rusak" value="rusak" <?php if($wisata->kondisi_jalan == 'rusak') echo "checked"; ?> required>
                                        <label class="form-check-label" for="kondisi_jalan_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Kantor</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kantor" id="kantor_ada" value="ada" <?php if($wisata->kantor == 'ada') echo "checked"; ?> required>
                                        <label class="form-check-label" for="kantor_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kantor" id="kantor_belum" value="belum" <?php if($wisata->kantor == 'belum') echo "checked"; ?> required>
                                        <label class="form-check-label" for="kantor_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Toilet</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="toilet" id="toilet_ada" value="ada" <?php if($wisata->toilet == 'ada') echo "checked"; ?> required>
                                        <label class="form-check-label" for="toilet_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="toilet" id="toilet_belum" value="belum" <?php if($wisata->toilet == 'belum') echo "checked"; ?> required>
                                        <label class="form-check-label" for="toilet_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Parkir</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="parkir" id="parkir_ada" value="ada" <?php if($wisata->parkir == 'ada') echo "checked"; ?> required>
                                        <label class="form-check-label" for="parkir_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="parkir" id="parkir_belum" value="belum" <?php if($wisata->parkir == 'belum') echo "checked"; ?> required>
                                        <label class="form-check-label" for="parkir_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Mushola</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mushola" id="mushola_ada" value="ada" <?php if($wisata->mushola == 'ada') echo "checked"; ?> required>
                                        <label class="form-check-label" for="mushola_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mushola" id="mushola_belum" value="belum" <?php if($wisata->mushola == 'belum') echo "checked"; ?> required>
                                        <label class="form-check-label" for="mushola_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">TIC</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tic" id="tic_ada" value="ada" <?php if($wisata->tic == 'ada') echo "checked"; ?> required>
                                        <label class="form-check-label" for="tic_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tic" id="tic_belum" value="belum" <?php if($wisata->tic == 'belum') echo "checked"; ?> required>
                                        <label class="form-check-label" for="tic_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Alat Kesehatan</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="alat_kesehatan" id="alat_kesehatan_ada" value="ada" <?php if($wisata->alat_kesehatan == 'ada') echo "checked"; ?> required>
                                        <label class="form-check-label" for="alat_kesehatan_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="alat_kesehatan" id="alat_kesehatan_belum" value="belum" <?php if($wisata->alat_kesehatan == 'belum') echo "checked"; ?> required>
                                        <label class="form-check-label" for="alat_kesehatan_belum">Belum</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">ATM</span>  <span style="color: red">*</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="atm" id="atm_ada" value="ada" <?php if($wisata->atm == 'ada') echo "checked"; ?> required>
                                        <label class="form-check-label" for="atm_ada">Ada</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="atm" id="atm_belum" value="belum" <?php if($wisata->atm == 'belum') echo "checked"; ?> required>
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
                                            <input type="text" name="htm_weekday_d" class="form-control" value="<?php echo $wisata->htm_weekday_d; ?>" placeholder="Dewasa">
                                        </div>
                                        <div class="form-group col">
                                            <input type="text" name="htm_weekday_a" class="form-control" value="<?php echo $wisata->htm_weekday_a; ?>" placeholder="Anak">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>Libur</label>
                                        <div class="form-group col">
                                            <input type="text" name="htm_weekend_d" class="form-control" value="<?php echo $wisata->htm_weekend_d; ?>" placeholder="Dewasa">
                                        </div>
                                        <div class="form-group col">
                                            <input type="text" name="htm_weekend_a" class="form-control" value="<?php echo $wisata->htm_weekend_a; ?>" placeholder="Anak">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><span style="color: black;">Pemandangan</span> <span style="color: red">*</span></label>
                                    <input type="text" name="pemandangan" class="form-control" value="<?php echo $wisata->pemandangan; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><span style="color: black; ?>">Deskripsi</span> <span style="color: red;">*</span></label>
                            <textarea name="deskripsi" id="editor" required><?php echo $wisata->deskripsi; ?>
                            </textarea>
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

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Pengunjung</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="user" method="POST" action="<?php echo base_url(); ?>logdata/pengunjung/edit_aksi">
                        <input type="hidden" name="id" value="<?php echo $pengunjung->id; ?>">
                        <input type="hidden" name="password_lama" value="<?php echo $pengunjung->password; ?>">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $pengunjung->nama; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $pengunjung->username; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No Telephone</label>
                            <input type="number" name="no_telephone" class="form-control" value="<?php echo $pengunjung->no_hp; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3"><?php echo $pengunjung->alamat; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $pengunjung->tempat_lahir; ?>" required>
                                </div>
                                <div class="col-6">
                                    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $pengunjung->tanggal_lahir; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</labeh><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php if($pengunjung->jenis_kelamin == "laki-laki") echo "checked"; ?> required>
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php if($pengunjung->jenis_kelamin == "perempuan") echo "checked"; ?> required>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill pr-5 pl-5">
                            Edit
                        </button>
                  </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
        
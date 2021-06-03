
        <div class="col-md-12 m-0 p-0" id="contact">
            <div class="col-md-12 m-0 p-2 pl-md-5 pr-md-5 pb-4 row" id="body">
                <div class="col-md-8 m-0 p-0 pl-md-5 pt-4 mt-2">
                    <h3 class="mb-3">Akun</h3>
                    <form method="post" action="<?php echo base_url(); ?>akun/edit_aksi">
                        <div class="alert alert-warning" id="msg" role="alert">
                            Password Tidak Sama
                        </div>
                        <?php
                        if(isset($_GET['msg']) && $_GET['msg'] == 2)
                        {
                        ?>
                        <div class="alert alert-warning" id="msg" role="alert">
                            Username Sudah Terpakai
                        </div>
                        <?php
                        }
                        ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $user->nama; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="hidden" name="password_lama" value="<?php echo $user->password; ?>" required>
                            <input type="password" name="password" class="form-control" placeholder="isi jika ingin password baru...">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $user->email; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>No Handphone</label>
                            <input type="number" name="no_handphone" class="form-control" value="<?php echo $user->no_hp; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3" required><?php echo $user->alamat; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $user->tempat_lahir; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $user->tanggal_lahir; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenkel" id="exampleRadios1" value="laki-laki" <?php if($user->jenis_kelamin == 'laki-laki') echo 'checked'; ?> required>
                                <label class="form-check-label" for="exampleRadios1">
                                    Laki - laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenkel" id="exampleRadios2" value="perempuan" <?php if($user->jenis_kelamin == 'perempuan') echo 'checked'; ?> required>
                                <label class="form-check-label" for="exampleRadios2">
                                    Password
                                </label>
                            </div>
                        </div>
                        <button type="submit" id="submit_register" class="btn btn-primary btn-sm">Register</button>
                    </form>
                </div>
            </div>
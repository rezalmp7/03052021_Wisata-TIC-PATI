
        <div class="col-md-12 m-0 p-0" id="contact">
            <div class="col-md-12 m-0 p-2 pl-md-5 pr-md-5 pb-4 row" id="body">
                <div class="col-md-6 p-2 p-md-3 pt-md-4 mt-2">
                    <div class="col-12 p-3 border rounded-lg bg-light shadow">
                        <h5 class="text-center">Register</h5>
                        <form method="post" action="<?php echo base_url(); ?>login/daftar_aksi">
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
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Re-Password</label>
                                <input type="password" name="repassword" id="repassword" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input type="number" name="no_handphone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenkel" id="exampleRadios1" value="laki-laki" required>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Laki - laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenkel" id="exampleRadios2" value="perempuan" required>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Password
                                    </label>
                                </div>
                            </div>
                            <button type="submit" id="submit_register" class="btn btn-primary btn-sm">Register</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 p-2 p-md-3 pt-md-4 mt-2">
                    <div class="col-12 p-3 border rounded-lg bg-light shadow">
                        <h5 class="text-center">Login</h5>
                        <?php
                        if(isset($_GET['ps']) && $_GET['ps'] == 2)
                        {
                        ?>
                        <div class="alert alert-warning" id="msg" role="alert">
                            <strong>Username</strong> dan <strong>Password</strong> tidak ditemukan
                        </div>
                        <?php
                        }
                        if(isset($_GET['ps']) && $_GET['ps'] == 1)
                        {
                        ?>
                        <div class="alert alert-warning" id="msg" role="alert">
                            Username dan Password belum terisi
                        </div>
                        <?php
                        }
                        ?>
                        <form method="post" action="<?php echo base_url(); ?>login/login_aksi">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username..." required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password..." required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        </form>
                    </div>
                </div>
            </div>
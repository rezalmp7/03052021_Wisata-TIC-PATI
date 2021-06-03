
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
                    <form class="user" method="POST" action="<?php echo base_url(); ?>logdata/user/tambah_aksi">
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
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>No Telephone</label>
                            <input type="number" name="no_telephone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control" id="level" required>
                                <option value="">-- Select Level --</option>
                                <option value="1">Admin</option>
                                <option value="2">Pengurus</option>
                            </select>
                        </div>
                        <div class="form-group" id="ow">
                            <label>Object Wisata</label>
                            <select name="wisata" class="form-control" id="level" required>
                                <option value="">-- Select Object Wisata --</option>
                                <?php
                                foreach ($wisata as $a) {
                                ?>
                                <option value="<?php echo $a->id; ?>"><?php echo $a->nama; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill pr-5 pl-5">
                            Tambah
                            </button>
                  </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
        
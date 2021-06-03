
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Sub Kategori</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="user" method="POST" action="<?php echo base_url(); ?>logdata/sub_kategori/edit_aksi">
                        <input type="hidden" name="id" value="<?php echo $sub_kategori->id; ?>">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="">-- Kategori --</option>
                                <?php
                                foreach ($kategori as $a) {
                                ?>
                                <option value="<?php echo $a->id; ?>" <?php if($sub_kategori->id_kategori==$a->id) echo "selected"; ?>><?php echo $a->nama; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $sub_kategori->nama; ?>" required>
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
      
        
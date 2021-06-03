
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
                    <form class="user" method="post" action="<?php echo base_url(); ?>logdata/wisata/tambah_photo_aksi" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><span style="color: black;">ID PHOTO</span> <span style="color: red">*</span></label>
                            <input type="text" name="id_photo" value="<?php echo $max_id_wisata; ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label><span style="color: black;">Wisata</span> <span style="color: red">*</span></label>
                            <input type="text" name="wisata" value="<?php echo $data_wisata->nama; ?>" class="form-control" readonly>
                            <input type="hidden" name="id_wisata" value="<?php echo $data_wisata->id; ?>">
                        </div>
                        <div class="form-group">
                            <label><span style="color: black;">Nama</span> <span style="color: red">*</span></label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Photo</label>
                            <input type="file" class="form-control-file" name="photo_wisata" id="exampleFormControlFile1">
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
      
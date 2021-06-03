
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Pengumuman</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="<?php echo base_url(); ?>logdata/pengumuman/tambah_aksi" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><span style="color: black;">ID</span> <span style="color: red">*</span></label>
                            <input type="text" name="id" class="form-control" value="<?php echo $max_id_pengumuman; ?>" readonly required>
                        </div>
                        <div class="form-group">
                            <label><span style="color: black;">Judul</span> <span style="color: red">*</span></label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input type="file" class="form-control-file" name="gambar_pengumuman" id="exampleFormControlFile1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pengumuman Berakhir</label>
                            <input type="date" name="tgl_berakhir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><span style="color: black; ?>">Isi</span> <span style="color: red;">*</span></label>
                            <textarea name="isi" id="editor" required>
                                
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
      
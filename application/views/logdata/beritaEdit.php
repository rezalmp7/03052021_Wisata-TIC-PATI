
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Berita</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="<?php echo base_url(); ?>logdata/berita/edit_aksi" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><span style="color: black;">ID</span> <span style="color: red">*</span></label>
                            <input type="text" name="id" class="form-control" value="<?php echo $berita->id; ?>" readonly required>
                        </div>
                        <div class="form-group">
                            <label><span style="color: black;">Judul</span> <span style="color: red">*</span></label>
                            <input type="text" name="judul" value="<?php echo $berita->judul; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar</label>
                            <input type="hidden" name="gambar_berita_lama" value="<?php echo $berita->gambar; ?>">
                            <input type="file" class="form-control-file" name="gambar_berita" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label><span style="color: black; ?>">Isi</span> <span style="color: red;">*</span></label>
                            <textarea name="isi" id="editor" required>
                                <?php echo $berita->isi; ?>
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
      
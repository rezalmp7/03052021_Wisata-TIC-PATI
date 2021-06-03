        <div class="col-md-12 m-0 p-0" id="berita_detail">
            <div class="col-md-12 m-0 p-2 p-md-5" id="body">
                <nav aria-label="breadcrumb" class="mb-4 mt-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">berita</li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $berita->judul; ?></li>
                    </ol>
                </nav>
                <div class="col-md-10 mx-auto m-0 p-2 row">
                    <div class="col-md-2 m-0 p-2 mb-3 pr-md-1 pt-md-5 text-md-right">
                        <small class="text-black-50">Admin <i class="fas fa-user"></i></small><br>
                        <small class="text-black-50"><?php echo date('d M Y', strtotime($berita->tanggal)); ?> <i class="far fa-calendar-alt"></i></small>
                    </div>
                    <div class="col-md-10 m-0 p-0 pl-md-3 pr-md-3 pl-md-1 text-center">
                        <h4><?php echo $berita->judul; ?></h4>
                        <img class="col-6 d-block mx-auto mt-2 mb-2" src="<?php echo base_url(); ?>assets/img/berita/<?php echo $berita->gambar; ?>">
                        <div style="text-align: justify;"><?php echo $berita->isi; ?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 m-0 p-0" id="contact">
            <div class="col-md-12 m-0 p-2 pl-md-5 pr-md-5 pb-4 row" id="body">
                <div class="col-md-8 m-0 p-0 pl-md-5 pt-4 mt-2">
                    <h3>Akun</h3>
                    <div class="mt-2 mb-3 clearfix">
                        <a href="<?php echo base_url(); ?>akun/edit" class="btn btn-warning float-right btn-sm ml-1 mr-1"><i class="far fa-edit"></i> Edit</a> 
                        <a href="<?php echo base_url(); ?>login/logout" class="btn btn-danger float-right btn-sm ml-1 mr-1"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                    </div>
                    <div class="mt-2 mb-2">
                        <h6>Nama</h6>
                        <small class="text-muted border-bottom col-12 d-block"><?php echo $user->nama; ?></small>
                    </div>
                    <div class="mt-2 mb-2">
                        <h6>Username</h6>
                        <small class="text-muted border-bottom col-12 d-block"><?php echo $user->username; ?></small>
                    </div>
                    <div class="mt-2 mb-2">
                        <h6>No Handphone</h6>
                        <small class="text-muted border-bottom col-12 d-block"><?php echo $user->no_hp; ?></small>
                    </div>
                    <div class="mt-2 mb-2">
                        <h6>Email</h6>
                        <small class="text-muted border-bottom col-12 d-block"><?php echo $user->email; ?></small>
                    </div>
                    <div class="mt-2 mb-2">
                        <h6>Alamat</h6>
                        <small class="text-muted border-bottom col-12 d-block"><?php echo $user->alamat; ?></small>
                    </div>
                    <div class="mt-2 mb-2">
                        <h6>TTL</h6>
                        <small class="text-muted border-bottom col-12 d-block"><?php echo $user->tempat_lahir.", ".date('d/m/Y', strtotime($user->tanggal_lahir)); ?></small>
                    </div>
                    <div class="mt-2 mb-2">
                        <h6>Jenis Kelamin</h6>
                        <small class="text-muted border-bottom col-12 d-block"><?php echo $user->jenis_kelamin; ?></small>
                    </div>
                    <div class="mt-2 mb-2">
                        <h6>Tanggal Register</h6>
                        <small class="text-muted border-bottom col-12 d-block"><?php echo date('d-m-Y', strtotime($user->tgl_register)); ?></small>
                    </div>
                </div>
                <div class="col-md-4 m-0 p-0 pl-md-5 pt-4 mt-2">
                    <h3>Photo di Wisata</h3>
                    <br>
                    <div class="clearfix">
                    <?php
                    foreach ($photo as $b) {
                    ?>
                    <img src="<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $b->photo; ?>" style="height: 75px" class="rounded float-left m-1" alt="...">
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
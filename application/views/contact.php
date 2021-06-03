
        <div class="col-md-12 m-0 p-0" id="contact">
            <div class="col-md-12 m-0 p-md-2 pl-md-5 pr-md-5 mt-5 mb-3 mb-md-5" id="title">
                <div class="col-12 pl-md-5">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="col-md-12 m-0 p-2 pl-md-5 pr-md-5 pb-4 row" id="body">
                <div class="col-md-8 m-0 p-0 pl-md-5 pt-4 mt-2 text-center" id="gallery">
                    <h5>About</h5>
                    <p>TIC PATI merupakan Kantor Pusat Informasi Pariwisata di Kabupaten Pati.</p>
                    <br>
                    <h5><i class="fas fa-heart"></i></h5>
                    <p><i class="fab fa-instagram"></i> dinporapar.pati<br><i class="fab fa-facebook-square"></i> TIC Pati</p>
                    <br>
                    <h5><i class="fas fa-mobile-alt"></i></h5>
                    <p>0295 - 385457</p>
                    <br>
                    <h5><i class="fas fa-map-marker-alt"></i></h5>
                    <p>Jl. P. Sudirman No.12 Pati Jawa Tengah</p>
                    <br>
                </div>
                <div class="col-md-4 p-2 p-md-3 pt-md-4 mt-2">
                    <div class="border rounded-lg p-2">
                        <h6>Pesan Ke Kami</h6>
                        <?php
                        if(isset($_GET['msg']) && $_GET['msg'] == 1)
                        {
                        ?>
                        <div class="alert alert-warning" role="alert">
                            <strong>Pesan</strong> telah terkirim
                        </div>
                        <?php
                        }
                        ?>
                        <form method="post" action="<?php echo base_url(); ?>contact/tambah_pesan">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email..">
                            </div>
                            <div class="form-group">
                                <label>Pesan</label>
                                <textarea class="form-control" name="pesan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            <iframe class="col-12 m-0 p-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1585493817342!2d111.02710941474979!3d-6.750509895120217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d37014d61adf%3A0xca22050e2be70dbc!2sDinporapar%20Kab.%20Pati!5e0!3m2!1sid!2sid!4v1607691776249!5m2!1sid!2sid" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
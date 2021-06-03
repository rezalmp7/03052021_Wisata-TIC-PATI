
            <!--                 Footer                  -->
            <div class="col-md-12 m-0 p-3" id="footer">
                <div class="col-md-12 m-0 p-1 row">
                    <div class="col-md p-3">
                        <h2>Website Terkait</h2>
                        <ul>
                            <li><a href="#">DINPORAPAT KABUPATEN PATI</a></li>
                            <li><a href="#">KABUPATEN PATI</a></li>
                        </ul>
                    </div>
                    <div class="col-md p-3">
                        <h2>Kontak Kami</h2>
                        <ul>
                            <li><span style="font-weight: bold;">Office: </span>Jl. P. Sudirman No.12 Pati Jawa Tengah</li>
                            <li><span style="font-weight: bold;">Telp: </span>0295 - 385457</li>
                        </ul>
                    </div>
                    <div class="col-md p-3">
                        <h2>Follow Kami:</h2>
                        <ul>
                            <li><i class="fab fa-facebook-square"></i> TIC Pati</li>
                            <li><i class="fab fa-instagram-square"></i> dinporapar.pati </li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-12 m-0 p-2 text-right" id="copyright">
                    &copy; Dinporapar. All rights reserved
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 m-0 p-3 row" id="headerMobile">
        <nav id="nav">
            <ul class="nav float-right">
                <li class="nav-item">
                    <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>"><span>
                            <div id="iconNav"><i class="fas fa-home"></i></div>HOME
                        </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>wisata"><span>
                            <div id="iconNav"><i class="fas fa-mountain"></i></div>WISATA
                        </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>galeri"><span>
                            <div id="iconNav"><i class="fas fa-images"></i></div>GALERI
                        </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>contact"><span>
                            <div id="iconNav"><i class="fas fa-address-card"></i></div>CONTACT
                        </span></a>
                </li>
                <?php
                if($this->session->userdata != null && $this->session->userdata('status') == "login_client_ticpati")
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>akun"><span>
                            <div id="iconNav"><i class="fas fa-id-badge"></i></div>AKUN
                        </span></a>
                </li>
                <?php
                }
                else {
                ?>
                <li class="nav-item">
                    <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>login"><span>
                            <div id="iconNav"><i class="fas fa-sign-in-alt"></i></div>LOGIN
                        </span></a>
                </li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/client/vendor/jssor/js/jssor.slider.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="<?php echo base_url(); ?>assets/client/vendor/lightgallery/dist/js/lightgallery-all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/client/vendor/lightgallery/lib/jquery.mousewheel.min.js"></script>

<script src="<?php echo base_url(); ?>assets/client/vendor/simplelightbox-master/dist/simple-lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/client/vendor/simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/client/js/main.js"></script>
</html>
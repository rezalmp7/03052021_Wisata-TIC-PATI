
        <div class="col-md-12 m-0 p-0" style="overflow: hidden;" id="home">
            <div class="col-12 m-0 p-0">
                <div id="jssor_1"
                    style="position:relative;margin:0;padding:0;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin"
                        style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:0;position:relative;top:50%;width:38px;height:38px;"
                            src="<?php echo base_url();?>assets/client/vendor/jssor/svg/loading/static-svg/spin.svg" />
                    </div>
                    <div data-u="slides" class="jssor1_009_akhir">
                        <div style="background-color:#ff7c28;">
                            <div id="caption"
                                style="position:absolute;top:50px;left:50px;width:450px;height:62px;z-index:0;font-size:16px;color:#000000;line-height:24px;text-align:left;padding:5px;box-sizing:border-box;">
                                Selamat Datang di Website TIC Kabupaten Pati<br />
                                Informasi Lengkap tentang pariwisata dan penginapan di kabupaten pati<br /><br /><br />
                                <i>By: Admin TIC PATI</i>
                            </div>
                            <div data-u="thumb">Welcome</div>
                        </div>
                        <?php
                        foreach ($photo_wisata_10 as $a) {
                        ?>
                        <div>
                            <div data-u="image" style="background-image: url(<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $a->photo; ?>); background-size:cover; background-position: center" ></div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator"
                        style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
                        <div data-u="slides">
                            <div data-u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                                <div data-u="thumbnailtemplate"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2"
                        data-scale="0.75" data-scale-left="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2"
                        data-scale="0.75" data-scale-right="0.75">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-12 m-0 p-0 row">
                <div class="col-md-10 m-0 p-1 garis-kanan">
                    <div class="col-md-12 m-0 p-2 p-md-5" id="wisata">
                        <h1>Galery</h1>
                        <div class="col-md-12 m-0 p-2">
                            <div id="aniimated-thumbnials">
                                <?php
                                foreach ($photo_wisata_20 as $c) {
                                ?>
                                <a href="<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $c->photo; ?>" data-sub-html="<h4><?php echo $c->nama; ?></h4>">
                                    <img src="<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $c->photo; ?>"/>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 m-0 p-1 p-md-5" id="berita">
                        <h1>Berita</h1>
                        <div class="col-md-12 m-0 p-1 row">
                            <?php
                            foreach ($berita as $d) {
                            ?>
                            <div class="col-md-6 m-0 p-2">
                                <a href="<?php echo base_url(); ?>home/berita?id=<?php echo $d->id; ?>" class="col-12 m-0 p-1 row rounded-lg" id="content">
                                    <div class="col-md-4 m-0 p-1">
                                        <img class="col-12 col-12 mx-auto d-block m-0 p-0" src="<?php echo base_url(); ?>assets/img/berita/<?php echo $d->gambar; ?>">
                                    </div>
                                    <div class="col-md-8 m-0 p-1">
                                        <h6><?php echo $d->judul; ?></h6>
                                        <?php echo substr($d->isi, 0, 175) . '...'; ?>
                                    </div>
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 m-0 p-1">
                    <div class="col-md-12 m-0 p-1 mt-5" id="pengumuman">
                        <h1>Pengumuman</h1>
                        <?php
                        foreach ($pengumuman as $e) {
                        ?>
                        <div class="col-md-12 m-0 p-2">
                            <a class="row p-2 rounded-lg" href="<?php echo base_url(); ?>home/pengumuman?id=<?php echo $e->id; ?>">
                                <div class="col-12 m-0 p-0">
                                    <img class="col-12 m-0 p-0 mx-auto d-block" src="<?php echo base_url(); ?>assets/img/pengumuman/<?php echo $e->photo; ?>">
                                </div>
                                <div class="col p-0 pt-1">
                                    <h6 class="m-0 p-0"><?php echo $e->judul; ?></h6>
                                    <small class="m-0 p-0 text-black-50">Sampai <?php echo date('d M Y', strtotime($e->tgl_berakhir)); ?></small>
                                    <?php echo substr($e->isi, 0, 150) . "..."; ?>
                                </div>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
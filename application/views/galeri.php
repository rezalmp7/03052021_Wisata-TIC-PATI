        <div class="col-md-12 m-0 p-0" id="galery">
            <div class="col-md-12 m-0 p-2 pl-md-5 pr-md-5 pt-5 mb-md-5 row" id="title">
                <div class="col-12 pl-md-5">
                    <h1>GALERY</h1>
                </div>
            </div>
            <div class="col-md-12 m-0 p-2 pl-md-5 pr-md-5" id="header">
                <div class="col-md-12 m-0 p-0 pt-4" id="photo">
                    <div class="col-md-12 m-0 p-2">
                        <div class="filter p-3">
                            <a class="mt-1 mb-1 btn btn-filter active" id="all">All</a>
                            <a class="mt-1 mb-1 btn btn-filter" id="alam">Alam</a>
                            <a class="mt-1 mb-1 btn btn-filter" id="buatan">Buatan</a>
                            <a class="mt-1 mb-1 btn btn-filter" id="budaya">Budaya</a>

                        </div>
                        
                        <div class="boxes gallery" id="parent">
                            <?php
                            foreach ($photo as $a) {
                            ?>
                            <div class="wadah p-1 m-0 box <?php echo $a->jenis_alam.' '.$a->jenis_buatan.' '.$a->jenis_budaya; ?>">
                                <a id="link" href="<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $a->photo; ?>" class="col-md-12 m-0 p-0">
                                    <img class="m-0 p-0" title="<?php echo $a->nama; ?>" src="<?php echo base_url(); ?>assets/img/pariwisata/<?php echo $a->photo; ?>">
                                </a>
                                <a class="col-md-12 m-0 p-2 d-block" href="<?php echo base_url(); ?>wisata/detail?id=<?php echo $a->id_wisata; ?>" id="title"><?php echo $a->nama_wisata; ?></a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
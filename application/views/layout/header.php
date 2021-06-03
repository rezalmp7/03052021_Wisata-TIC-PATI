<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TIC - PATI</title>

    <link href="<?php echo base_url(); ?>assets/img/web/favicon.ico" rel="icon" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>assets/client/vendor/simplelightbox-master/dist/simple-lightbox.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/client/vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/style.css">

</head>

<body>
    <div class="col-md-12 m-0 p-0" >
        <div class="col-md-12 m-0 p-3 row" id="header">
            <div class="pl-3 row" id="logo">
                <div>
                    <img src="<?php echo base_url(); ?>assets/client/img/web/logoPati.png" height="50px">
                </div>
                <div class="pl-2" id="text">
                    <h1 class="m-0 p-1">TOURISM INFORMATION CENTER</h1>
                    <hr class="m-0 p-0">
                    <h1 class="m-0 p-1">KABUPATEN PATI</h1>
                </div>
            </div>
            <nav class="col clearfix" id="nav">
                <ul class="nav float-right">
                    <li class="nav-item">
                        <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>"><span>HOME</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>wisata"><span>WISATA</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>galeri"><span>GALERI</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>contact"><span>CONTACT</span></a>
                    </li>
                    <?php
                    if($this->session->userdata != null && $this->session->userdata('status') == "login_client_ticpati")
                    {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>akun"><span>AKUN</span></a>
                    </li>
                    <?php
                    }
                    else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link p-md-3 p-2" href="<?php echo base_url(); ?>login"><span>LOGIN</span></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
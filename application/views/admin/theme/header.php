<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Hijab Shop</title>
    <link type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
    <!-- <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' -->
    <!-- rel='stylesheet'> -->
</head>

<body>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                &nbsp;
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>
                <a class="brand" href="index.html">
                    <img src="<?= base_url('assets/images/banana/logo1.png') ?>" alt="" width="270">
                </a>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav nav-icons">
                        <li>
                            Lumajang, Jawa Timur 67371 <br>
                            Telegram : t.me/bananahijab <br>
                            Fanspage : Banana Hijab <br> &nbsp;
                        </li>
                    </ul>
                    <ul class="nav pull-right">
                        <form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>

    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">

                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <div class="module-body">
                                <div class="control-group">
                                    <div class="controls clearfix">&nbsp;</div>
                                    <div class="controls row-fluid">
                                        <input class="span12" type="text" id="" placeholder="Username">
                                        <input class="span12" type="password" id="" placeholder="Password">
                                        <a href="" class="span5 btn small pull-right">login</a>
                                        <a href="" class="span5 btn small pull-left">Register</a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                        <!--/.widget-nav-->


                        <ul class="widget widget-menu unstyled">
                            <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>Kategori </a>
                                <ul id="togglePages" class="collapse unstyled">
                                    <li><a href="<?= base_url('admin/khimar')?>"><i class="icon-inbox"></i>Khimar </a></li>
                                    <li><a href=""><i class="icon-inbox"></i>Niqob </a></li>
                                    <li><a href=""><i class="icon-inbox"></i>Gamis </a></li>
                                    <li><a href=""><i class="icon-inbox"></i>Aksesoris </a></li>
                                    <li><a href=""><i class="icon-inbox"></i>Produk Ikhwan </a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="menu-icon"></i>Konfirmasi</a></li>
                            <li><a href="#"><i class="menu-icon"></i>Check Out</a></li>
                            <li><a href="#"><i class="menu-icon"></i>Person (nav atas phone email)</a></li>
                        </ul>
                        <!--/.widget-nav-->
                    </div>

                </div>

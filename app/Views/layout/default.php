<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>dakadu.kuningankab</title>



        <!-- General CSS Files -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet"
            href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

        <!-- CSS Libraries -->

        <!-- Template CSS -->
        <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
        <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar">
                    <form class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                        class="fas fa-bars"></i></a></li>
                            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                        class="fas fa-search"></i></a></li>
                        </ul>
                        <div class="search-element">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                data-width="250">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            <div class="search-backdrop"></div>
                            <div class="search-result">
                                <div class="search-header">
                                    Pencarian Terpopuler
                                </div>
                                <div class="search-item">
                                    <a href="#">Arsip Data RKA/DPA Pertahun</a>
                                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="search-item">
                                    <a href="#">Arsip Data Dokumen SPJ Pertahun</a>

                                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="search-item">
                                    <a href="#">Arsip Data Dokumen Pajak Pertahun</a>

                                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="search-item">
                                    <a href="#">Arsip Data LK Pertahun</a>

                                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                                </div>

                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav navbar-right">

                        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="<?=base_url()?>/template/assets/img/avatar/avatar-1.png"
                                    class="rounded-circle mr-1">
                                <div class="d-sm-none d-lg-inline-block">Hi, <?=session()->get('username_user')?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">


                                <a href="<?=site_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>

                        </li>
                    </ul>
                </nav>
                <div class="main-sidebar">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="<?=site_url()?> "><img src="<?=base_url()?>/template/assets/img/logo_dakadu.png"
                                    style="width: 200px; margin-top:10px; margin-bottom:40px;"> </a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="<?=site_url()?> "><img src="<?=base_url()?>/template/assets/img/logogif.gif"
                                    style="width: 40px;"></a>
                        </div>
                        <ul class="sidebar-menu">

                            <?=$this->include('layout/menu')?>

                        </ul>

                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a href=" " class="btn btn-primary btn-sm btn-block btn-icon-split">
                                <i class="fas fa-rocket"></i> Admin
                            </a>
                        </div>
                    </aside>
                </div>

                <!-- Main Content -->
                <div class="main-content">

                    <?=$this->renderSection('content')?>
                </div>
                <footer class="main-footer">
                    <div class="footer-left">
                        Copyright &copy; 2021 <div class="bullet"></div> Developed By <a href="">QpProjectWebsite</a>
                    </div>
                    <div class="footer-right">
                        V.1.0
                    </div>
                </footer>
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
        <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>

        <!-- JS Libraies -->

        <!-- Template JS File -->
        <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
        <script src="<?=base_url()?>/template/assets/js/custom.js"></script>

        <!-- Page Specific JS File -->
    </body>

</html>
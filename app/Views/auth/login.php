<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Login-dakadu.kuningankab</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.css">
        <!-- CSS Libraries -->
        <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap-social/bootstrap-social.css">

        <!-- Template CSS -->
        <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
        <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">
    </head>

    <body class="bg-white">
        <div id="app">
            <section class="section">
                <div class="d-flex flex-wrap align-items-stretch" style="margin-top: 30px;">
                    <div class="col-lg-4 col-md-8  order-lg-1  bg-white">
                        <div class="p-3 m-3">
                            <center>
                                <div class="mb-4">
                                    <img src="<?=base_url()?>/template/assets/img/logogif.gif" alt="Image"
                                        class="img-fluid" style="width: 100px; margin-bottom: 20px;">

                                    <h4 style="color: #006080;"><b>LOG-IN DAKADU</h4></b>
                                    <b class="mb-4" style="color: #006080;">BADAN PENGELOLA PENDAPATAN DAERAH <br />
                                        KABUPATEN KUNINGAN
                                    </b>

                                </div>
                            </center>
                            <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">x</button>
                                    <b>Error !</b>
                                    <?=session()->getFlashdata('error');?>
                                </div>
                            </div>
                            <?php endif;?>
                            <form method="POST" action="<?=site_url('auth/loginProcess')?>" class="needs-validation"
                                novalidate="">
                                <?=csrf_field()?>
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input id="username" type="username" class="form-control" name="username_user"
                                        tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password_user"
                                        tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                            id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <a href="auth-forgot-password.html" class="float-left mt-3">
                                        Forgot Password?
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right"
                                        tabindex="4">
                                        Login
                                    </button>
                                </div>


                            </form>

                            <div class="text-center mt-5 text-small">
                                Copyright &copy; QpProjectWebsite. Made with by Stisla

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-white center">
                        <center>
                            <img src="<?=base_url()?>/template/assets/img/logo_dakadu.png" alt="Image" class="img-fluid"
                                style="width: 650px;">
                            <img src="<?=base_url()?>/template/assets/img/bg_2.png" alt="Image" class="img-fluid"
                                style="width: 700px; margin-top: -40px;">
                        </center>
                    </div>
                </div>
            </section>
        </div>

        <!-- General JS Scripts -->
        <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
        <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>


        <!-- JS Libraies -->

        <!-- Template JS File -->
        <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
        <script src="<?=base_url()?>/template/assets/js/custom.js"></script>


        <!-- Page Specific JS File -->
    </body>

</html>
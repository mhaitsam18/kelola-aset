<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login Admin</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url() ?>asset4/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url() ?>asset4/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url() ?>asset4/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>asset4/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url() ?>asset4/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                              <center><H1>LOGIN</H1></center>
                        </div>
                        <div class="login-form">
                            <form  method="post" action="<?php echo base_url()?>controladmin/aksi_login">
                                <div class="form-group">
                                    <label>Ussername</label>
                                    <input class="au-input au-input--full" type="text" name="ussername" placeholder="Nama" >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Ingatkan saya
                                    </label>
                                    <label>
                                        <a href="#">Lupa Password?</a>
                                    </label>
                                </div>
                                <button  class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url() ?>asset4/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url() ?>asset4/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url() ?>asset4/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url() ?>asset4/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url() ?>asset4/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url() ?>asset4/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url() ?>asset4/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url() ?>asset4/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>asset4/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url() ?>asset4/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url() ?>asset4/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url() ?>asset4/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>asset4/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>asset4/js/main.js"></script>

</body>

</html>

<!-- end document-->
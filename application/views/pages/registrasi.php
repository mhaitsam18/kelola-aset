<!-- <?php
//$this->load->view('main/header');
?> -->
<!-- <br> -->
<!-- <br> -->
<!-- <br> -->
<!-- <br> -->
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
    <title>Register</title>

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
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
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
                            <H2>Registrasi</H2>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo base_url('c_control1/daftar') ?>" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="au-input au-input--full" type="text" name="nama" placeholder="Nama" value="<?php if(isset($data->nama)) echo $data->nama;?>">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                <select name="jabatan" value="<?php if(isset($data->jabatan)) echo $data->jabatan;?>">
                                    <option value="pengelola aset dan BHP">Pengelola aset dan BHP</option>
                                    <option value="pengelola limbah">Pengelola limbah</option>
                                 </select>
                                </div>
                                 <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="au-input au-input--full" type="text" name="alamat" placeholder="Username" value="<?php if(isset($data->alamat)) echo $data->alamat;?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="<?php if(isset($data->email)) echo $data->email;?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" value="<?php if(isset($data->password)) echo $data->password;?>">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Daftar</button>
                                
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $judul; ?></title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">
</head>

<body>  

     <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url(); ?>assets/login/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url(); ?>home/v_index" class="login-image-link">Batal!</a>
                    </div>
                    <?php echo form_open('home/aksi_login');?>
                    <div class="signin-form">
                        <h2 class="form-title">LOGIN</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="username" name="username" id="username" placeholder="Masukan Username *"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Masukan Password *"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Simpan</label>
                            </div>
                            <div class="form-group form-button">
                                <?php echo form_submit('submit', 'MASUK', 'class="form-submit"','value="Masuk"'); ?>
                            </div>
                        </form>
                        <?php echo form_close() ;?>
                        <div class="social-login">
                            <span class="social-label">Masuk Dengan:</span>
                            <ul class="socials">
                                <li><a href="<?php echo base_url(); ?>home/v_login"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>home/v_login"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>home/v_login"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


      <!-- JS -->
    <script src="<?php echo base_url(); ?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
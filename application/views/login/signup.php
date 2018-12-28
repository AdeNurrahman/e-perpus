      <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">DAFTAR</h2>
                        <?php echo form_open('home/signup'); ?>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text"  value="<?php echo set_value('nama'); ?>" name="nama" id="name" placeholder="Masukan Nama*"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email"  value="<?php echo set_value('email'); ?>" name="email" id="email" placeholder="Masukan Email *"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password"  value="<?php echo set_value('password'); ?>" name="password" id="password" placeholder="Masukan Password *"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" value="<?php echo set_value('confirmpassword'); ?>" name="confirmpassword" id="confirmpassword" placeholder="Ulangi password *"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Lanjut &<a href="<?php echo base_url(); ?>assets/signup/#" class="term-service"> Menyetujui Semua Pernyataan!</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="daftar" id="daftar" class="form-submit" value="DAFTAR"/>
                            </div>
                        </form>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url(); ?>assets/signup/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url(); ?>home/login" class="signup-image-link">Masuk Admin</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
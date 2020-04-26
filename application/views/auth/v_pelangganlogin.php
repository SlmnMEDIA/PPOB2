<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>PPOB - Login Pelanggan</title>
        <link rel="stylesheet" href="<?=base_url()?>asset/modules/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/modules/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/css/style.css">
        <link rel="stylesheet" href="<?=base_url()?>asset/css/components.css">
    </head>
    <body>
        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="login-brand">
                                Payment Point Online Bank
                            </div>
                            <?php if ($this->session->flashdata('pesan') != null) { ?>
                                <?php echo $this->session->flashdata('pesan');?>
                            <?php } ?>
                            <div class="card card-primary">
                                <div class="card-header"><h4>Login Pelanggan</h4></div>
                                <div class="card-body">
                                    <form method="POST" action="<?=base_url('Pelanggan/pelanggan_login')?>">
                                        <div class="form-group">
                                            <div class="d-block">
                                	            <label for="username" class="control-label">Username</label>
                                            </div>
                                            <input type="text" class="form-control" name="username" tabindex="2" autocomplete="off" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                	            <label for="password" class="control-label">Password</label>
                                            </div>
                                            <input id="password" type="password" class="form-control" name="password" tabindex="2" autocomplete="off" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-5 text-muted text-center">
                                Tidak punya akun? <a href="<?=base_url('Pelanggan/register')?>">Daftar disini!</a>
                            </div>
                            <div class="simple-footer">
                                Copyright &copy; 2019 Dian F. Arif<div class="bullet"></div>All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="<?=base_url()?>asset/modules/jquery.min.js"></script>
        <script src="<?=base_url()?>asset/modules/tooltip.js"></script>
        <script src="<?=base_url()?>asset/modules/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>asset/modules/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?=base_url()?>asset/js/stisla.js"></script>
        <script src="<?=base_url()?>asset/js/scripts.js"></script>
        <script src="<?=base_url()?>asset/js/custom.js"></script>
    </body>
</html>

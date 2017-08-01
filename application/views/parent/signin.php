<!DOCTYPE html>
<html lang="en">
    <?php include "head.php" ?>
    <body>
        
        <header class="header-front">
            <nav class="navbar navbar-default navbar-front">
                <div class="container">
                    <div class="col-xs-12">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo URL_IMG?>logo-salam.inc.png" width="130" height="73" alt="Logo Salam Inc." class="img-responsive">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url()?>signup">Sign Up</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
         
        <section class="content-front">
            <div class="container">
                <div class="col-md-7">
                    <img src="<?php echo URL_IMG?>thumbnails/go-pray-sign-in.png" width="653" height="449" alt="Go Pray Sign In Thumbnails" class="img-responsive">
                </div>
                <div class="col-md-5 form-sign-in">
                    <ul class="nav nav-pills front-tabs">
                        <li role="presentation">
                            <a href="<?php echo base_url()?>signup">Sign Up</a>
                        </li>
                        <li role="presentation" class="active">
                            <a href="#">Sign In</a>
                        </li>
                    </ul>
                    <form name="formSignin" id="formSignin" method="POST" action="<?php echo base_url()?>signin/do_signin" class="front-form">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <a href="#" class="form-link">Forgot Password ?</a>
                        </div>
                        <div class="form-btn">
                            <button type="submit" class="btn btn-green" name="btnSubmit" id="btnSubmit">Sign In</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
        
        <footer></footer>
        <?php include "foot.php" ?>

        <script type="text/javascript">
            // Form submit handler
            $('#formSignin').on('submit', function(e) {
                e.preventDefault();
                doSignin();
            });

            function doSignin() {
                var defaultBtn = $('#btnSubmit').html();
                var email = $('#email').val() || '';
                var password = $('#password').val() || '';

                $.ajax({
                    url: $('#formSignin').attr('action'),
                    type: 'post',
                    data: {
                        'email': email, 'password': password
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $('#btnSubmit').html('Memproses...');
                        $('#btnSubmit').prop('disabled', true);
                    },
                    success: function(response, status) {
                        console.log(status);
                        $('#btnSubmit').html(defaultBtn);
                        $('#btnSubmit').prop('disabled', false);
                        if(response.status == 1) {
                            $.alert({
                                theme: 'bootstrap',
                                type: 'green',
                                title: 'Berhasil!',
                                content: response.message,
                                autoClose: 'ok|1000',
                                buttons: {
                                    ok: {
                                        btnClass: 'btn-dark',
                                        text: 'Ok',
                                        action: function() {
                                            window.location.replace("<?php echo base_url()?>timeline");
                                        }
                                    }
                                }
                            });
                        } else {
                            $.alert({
                                theme: 'bootstrap',
                                type: 'red',
                                title: 'Gagal!',
                                content: response.message,
                                autoClose: 'ok|4000',
                                buttons: {
                                    ok: {
                                        btnClass: 'btn-dark',
                                        text: 'Ok',
                                        action: function() {}
                                    }
                                }
                            });
                        }
                    },
                    error: function(jqXHR, status, errorThrown) {
                        console.log(status);
                        $('#btnSubmit').html(defaultBtn);
                        $('#btnSubmit').prop('disabled', false);
                        $.alert({
                            theme: 'bootstrap',
                            type: 'red',
                            title: 'Perhatian!',
                            content: 'Terjadi kesalahan dalam proses Sign In',
                            autoClose: 'ok|4000',
                            buttons: {
                                ok: {
                                    btnClass: 'btn-dark',
                                    text: 'Ok',
                                    action: function() {}
                                }
                            }
                        });
                    }
                })
            }
        </script>
        
    </body>
</html>
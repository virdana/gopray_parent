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
                                <li><a href="<?php echo base_url()?>signin">Sign In</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
         
        <section class="content-front">
            <div class="container">
                <div class="col-md-5 form-sign-up">
                    <ul class="nav nav-pills front-tabs">
                        <li role="presentation" class="active">
                            <a href="#">Sign Up</a>
                        </li>
                        <li role="presentation">
                            <a href="#">Sign In</a>
                        </li>
                    </ul>
                    <form name="formSignup" id="formSignup" method="POST" action="<?php echo base_url()?>signup/do_signup" class="front-form">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="nama" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor HP</label>
                            <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="Nomor HP">
                        </div>
                        <div class="form-group">
                            <label for="kerabat">Kerabat</label>
                            <input type="text" name="kerabat" id="kerabat" class="form-control" placeholder="Kerabat">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <label for="re_password">Re-Enter Password</label>
                            <input type="password" name="re_password" id="re_password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-btn">
                            <button type="submit" class="btn btn-green" name="btnSubmit" id="btnSubmit">Sign Up</button>
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-7">
                    <img src="<?php echo URL_IMG?>thumbnails/go-pray-sign-up.png" width="699" height="480" alt="Go Pray Sign Up Thumbnails" class="img-responsive">
                </div>
            </div>
        </section>
        
        <footer></footer>
        <?php include "foot.php" ?>

        <script type="text/javascript">
            // Form submit handler
            $('#formSignup').on('submit', function(e) {
                e.preventDefault();
                doSignup();
            });

            function doSignup() {
                var defaultBtn = $('#btnSubmit').html();
                var password = $('#password').val() || '';
                var rePassword = $('#re_password').val() || '';

                if((password != '' && password != '') && (password === rePassword)) {
                    $.ajax({
                        url: $('#formSignup').attr('action'),
                        type: 'post',
                        data: $('#formSignup').serialize(),
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
                                window.location.replace("<?php echo base_url()?>timeline");
                            }
                        },
                        error: function(jqXHR, status, errorThrown) {
                            console.log(status);
                            $('#btnSubmit').html(defaultBtn);
                            $('#btnSubmit').prop('disabled', false);
                        }
                    });
                }
                else {
                    $('#re_password').tooltip({
                        'trigger': 'focus', 
                        'placement': 'right',
                        'title': 'Konfirmasi Password tidak valid!'
                    });
                    $("#re_password").focus();

                    
                    // alert('Konfirmasi password tidak valid');
                    /*$.alert({
                        theme: 'material',
                        type: 'orange',
                        icon: 'fa fa-warning',
                        backgroundDismiss: true, // this will just close the modal
                        title: 'Perhatian!',
                        content: 'Konfirmasi password tidak valid!'
                    });*/
                    //alert
                }

            }
        </script>
        
    </body>
</html>
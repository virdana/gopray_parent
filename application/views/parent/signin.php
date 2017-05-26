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
                            <a href="#">Sign Up</a>
                        </li>
                        <li role="presentation" class="active">
                            <a href="#">Sign In</a>
                        </li>
                    </ul>
                    <form name="signup" id="signup" method="" action="" class="front-form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <div class="form-group">
                            <a href="#" class="form-link">Forgot Password ?</a>
                        </div>
                        
                        <div class="form-btn">
                            <input type="submit" class="btn btn-green" name="submitsignup" value="Sign In">
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
        
        <footer></footer>
        <?php include "foot.php" ?>
        
    </body>
</html>
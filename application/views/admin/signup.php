<!DOCTYPE html>
<html lang="en">
    <?php include "sign_head.php" ?>
    
    <body>
        <?php include "sign_header.php" ?>
         
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
                            <label for="exampleInputPassword1">Re-Enter Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <div class="form-btn">
                            <input type="submit" class="btn btn-green" name="submitsignup" value="Sign Up">
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-7">
                    <img src="<?php echo URL_IMG?>/thumbnails/go-pray-sign-up.png" width="699" height="480" alt="Go Pray Sign Up Thumbnails" class="img-responsive">
                </div>
            </div>
        </section>
        
        <footer></footer>
        <?php include "sign_foot.php" ?>
        
        <script type="text/javascript">
            // put this page's specific js here
        </script>

    </body>
</html>
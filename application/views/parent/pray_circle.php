<!DOCTYPE html>
<html lang="en">
    <?php include "head.php" ?>
    <body>
        <div class="admin-container animated right">
            
            <header class="admin-header">
                <nav class="navbar navbar-default navbar-admin">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active" role="presentation"><a href="#praycircle" aria-controls="timeline" role="tab" data-toggle="tab">Pray Circle</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbar-notif">
                            <a href="#" class="notif-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-bell-o"><i class="fa fa-circle"></i></span>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-notif">
                                <li class="not-read">
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                               <img class="media-object" src="<?php echo URL_IMG?>icons/trophy.png" width="31" height="31" alt="Ikon Trofi Go Pray">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Selamat! Anda mendapatkan trophy baru</h4>
                                                <p class="media-time">09.10 a.m</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                               <img class="media-object" src="<?php echo URL_IMG?>icons/trophy.png" width="31" height="31" alt="Ikon Trofi Go Pray">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Selamat! Anda mendapatkan trophy baru</h4>
                                                <p class="media-time">1 Bulan yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                               <img class="media-object" src="<?php echo URL_IMG?>icons/trophy.png" width="31" height="31" alt="Ikon Trofi Go Pray">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Selamat! Anda mendapatkan trophy baru</h4>
                                                <p class="media-time">1 Bulan yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                               <img class="media-object" src="<?php echo URL_IMG?>icons/check.png" width="24" height="18" alt="Ikon Trofi Go Pray">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Konfirmasi keluarga telah di terima</h4>
                                                <p class="media-time">1 Bulan yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                               <img class="media-object" src="<?php echo URL_IMG?>icons/check.png" width="24" height="18" alt="Ikon Trofi Go Pray">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Konfirmasi keluarga telah di terima</h4>
                                                <p class="media-time">1 Bulan yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                               <img class="media-object" src="<?php echo URL_IMG?>icons/check.png" width="24" height="18" alt="Ikon Trofi Go Pray">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Konfirmasi keluarga telah di terima</h4>
                                                <p class="media-time">1 Bulan yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                               <img class="media-object" src="<?php echo URL_IMG?>icons/trophy-disabled.png" width="31" height="31" alt="Ikon Trofi Go Pray">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Selamat! Anda mendapatkan trophy baru</h4>
                                                <p class="media-time">1 Bulan yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                               <img class="media-object" src="<?php echo URL_IMG?>icons/trophy-disabled.png" width="31" height="31" alt="Ikon Trofi Go Pray">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Selamat! Anda mendapatkan trophy baru</h4>
                                                <p class="media-time">1 Bulan yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                    </ul>
                </nav>
            </header>
            
            <?php include "sidebar.php" ?>
            
            <div class="tab-content">
                <section class="admin-content tab-pane fade in active" role="tabpanel" id="praycircle">
                    <div class="row">
                        <div class="col-sm-4 col-md-3 detail-rightmenu visible-xs">
                            <p class="title">Keluarga</p>
                            
                            <?php if(isset($data_kerabat)) { 
                                $foto_url = "http://s3.amazonaws.com/37assets/svn/765-default-avatar.png";
                                foreach ($data_kerabat as $key => $kerabat) { 
                                    if(isset($kerabat->foto_profil)) {
                                        if(!empty($kerabat->foto_profil)) { $foto_url = $kerabat->foto_profil; } 
                                    } 
                                ?>
                                <div class="media media-family">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php echo $foto_url?>" width="60" height="60" alt="Go Pray Parent Profile">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="media-heading"><?php echo $kerabat->nama?></h4>
                                        <p class="status"><?php echo $kerabat->kerabat?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            <?php } ?>                            
                        </div>
                        
                        <div class="col-sm-8 col-md-9 detail-content">
                            <div class="panel panel-default panel-timeline panel-circle">
                                <form class="circle-form">
                                    <div class="media media-timeline">
                                        <div class="media-left">
                                            <a href="#">
                                                <?php $profile_picture = !empty($data_parent->profile_picture) ? $data_parent->profile_picture : 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png'?>
                                                <img class="media-object" src="<?php echo $profile_picture?>" width="50" height="50" alt="Go Pray User Photo Profile">
                                            </a>
                                        </div>
                                        <div class="media-body circle-body">
                                            <div class="form-group circle-for">
                                                <span class="pointer">Untuk </span>
                                                <input type="text" class="form-control awesomplete" list="circleList" placeholder="">
                                                <datalist id="circleList">
                                                    <option>tidak ada</option>
                                                    <?php foreach($data_kerabat as $key => $kerabat) { ?>
                                                    <option><?php echo $kerabat->email?></option>
                                                    <?php } ?>
                                                </datalist>
                                            </div>
                                            <div class="form-group circle-message">
                                                <textarea class="form-control" placeholder="Tulis pesan disini"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="circle-button">
                                        <button class="btn btn-white">
                                            <span class="fa fa-camera"></span> Pray Daily
                                        </button>
                                        <input type="submit" class="btn btn-green pull-right" value="Post">
                                    </div>
                                </form>
                            </div>
                            
                            <div class="panel panel-default panel-timeline circle-timeline">
                                <div class="media media-timeline">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php echo URL_IMG?>photos/bitmap.png" width="50" height="50" alt="Go Pray User Photo Profile">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Allie Carson</h4>
                                        <p class="media-time">09.10 a.m</p>
                                    </div>
                                </div>
                                <p class="timeline-detail">
                                    The last time you had a cheeseburger was too long ago. Try not to drool when you think about the slightly 
                                    charred, medium-rare meat nestled between soft brioche, cradled in crisp iceberg lettuce and flavour 
                                    amplifying condiments. Why are you still reading this- go get a cheeseburger.
                                </p>
                            </div>
                            
                            <div class="panel panel-default panel-timeline circle-timeline">
                                <div class="media media-timeline">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php echo URL_IMG?>photos/user-5.png" width="50" height="50" alt="Go Pray User Photo Profile">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Kenneth Santiago</h4>
                                        <p class="media-time">09.10 a.m</p>
                                    </div>
                                </div>
                                <p class="timeline-detail">
                                    The last time you had a cheeseburger was too long ago. Try not to drool when you think about the slightly 
                                    charred, medium-rare meat nestled between soft brioche, cradled in crisp iceberg lettuce and flavour 
                                    amplifying condiments. Why are you still reading this- go get a cheeseburger.
                                </p>
                            </div>
                            
                            <div class="panel panel-default panel-timeline circle-timeline">
                                <div class="media media-timeline">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php echo URL_IMG?>photos/user-5.png" width="50" height="50" alt="Go Pray User Photo Profile">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Kenneth Santiago</h4>
                                        <p class="media-time">09.10 a.m</p>
                                    </div>
                                </div>
                                <p class="timeline-detail">
                                    <img src="<?php echo URL_IMG?>thumbnails/praycircle/picture-1.png" width="659" height="581" alt="Go Pray Circle Picture" class="img-responsive">
                                </p>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-4 col-md-3 detail-rightmenu hidden-xs">
                            <p class="title">Keluarga</p>
                            
                            <?php if(isset($data_kerabat)) { 
                                $foto_url = "http://s3.amazonaws.com/37assets/svn/765-default-avatar.png";
                                foreach ($data_kerabat as $key => $kerabat) { 
                                    if(isset($kerabat->foto_profil)) {
                                        if(!empty($kerabat->foto_profil)) { $foto_url = $kerabat->foto_profil; } 
                                    } 
                                ?>
                                <div class="media media-family">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="<?php echo $foto_url?>" width="60" height="60" alt="Go Pray Parent Profile">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="media-heading"><?php echo $kerabat->nama?></h4>
                                        <p class="status"><?php echo $kerabat->kerabat?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        
                    </div>
                </section>
                
            </div>
            
        </div>
        
        <footer></footer>
        <?php include "foot.php" ?>
        
        <script type="text/javascript">
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                nav: true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: false,
                margin: 20,
                autoHeight: true,
                autoHeightClass: 'owl-height',
                responsiveClass:true,
                responsive:{
                    0:{ items:1 },
                    400:{ items:2 },
                    600:{ items:3 },
                    1200:{ items:6 }
                }
            });
        </script>
        
        <!-- Dial Panel Toggle Button -->
        <script type="text/javascript">
            $(document).ready(function() {
                var action = 1;

                $("[data-toggle=offcanvas]").on("click", viewSomething);

                function viewSomething() {
                    if ( action == 1 ) {
                        $('.right').addClass('active');
                        $('.left').addClass('active');

                        $('.animated').addClass('slideInLeft');
                        $('.animated').removeClass('slideInRight');

                        action = 2;
                    } else {
                        $('.animated').removeClass('slideInLeft');
                        $('.animated').addClass('slideInRight');

                        $('.right').removeClass('active');
                        $('.left').removeClass('active');

                        action = 1;
                    }
                }
            });
        </script>
        
    </body>
</html>
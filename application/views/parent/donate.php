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
                        <li class="active" role="presentation"><a href="#donate" aria-controls="donate" role="tab" data-toggle="tab">Donate</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbar-notif">
                            <a href="#" class="notif-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-bell-o"></span>
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
                <section class="admin-content tab-pane fade in active" role="tabpanel" id="donate">
                    <div class="row">
                        <div class="col-xs-12 detail-content">
                            <div class="panel panel-default panel-timeline panel-donate">
                                <p class="donate-desc">
                                    Think of cheeseburgers like a Tinder match. They might not all be your soulmate but you’ve gotta find 
                                    out to be sure. It can get a little messy and that’s just part of the fun. Some are cheesy, others can 
                                    be a little dry, and the rare few are a disaster. There are so many cheeseburgers out there it can be 
                                    hard to commit to just one favourite. That being said, when you know, you just know. Everyone has  
                                    their perfect match. Sometimes it’s just around the corner, other times you have to travel the world 
                                    in search of it. Wherever your perfect cheeseburger is, it’s out
                                </p>
                                <div class="table-responsive bank-donate">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>BANK</th>
                                                <th class="an">A/N</th>
                                                <th>NO. REKENING</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo URL_IMG?>icons/BNI.png" width="68" height="22" alt="Logo Bank Negara Indonesia 46" class="img-responsive">
                                                </td>
                                                <td class="an">PT. GoPray</td>
                                                <td>011-22-33-444</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo URL_IMG?>icons/BCA.png" width="70" height="22" alt="Logo Bank Central Asia" class="img-responsive">
                                                </td>
                                                <td class="an">PT. GoPray</td>
                                                <td>8610094610</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo URL_IMG?>icons/BankMandiri.png" width="76" height="22" alt="Logo Bank Mandiri" class="img-responsive">
                                                </td>
                                                <td class="an">PT. GoPray</td>
                                                <td>111-22-0555555-1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>

                <section class="admin-content tab-pane fade" role="tabpanel" id="summary">
                    <div class="container">
                        <div class="row">
                            <p>a</p>
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
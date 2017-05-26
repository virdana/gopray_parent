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
                        <li class="active" role="presentation"><a href="#trophy" aria-controls="trophy" role="tab" data-toggle="tab">Trophy</a></li>
                        <li role="presentation"><a href="#mysticker" aria-controls="mysticker" role="tab" data-toggle="tab">My Sticker</a></li>
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
                <section class="admin-content tab-pane fade in active" role="tabpanel" id="trophy">
                    <div class="row">
                        <div class="col-xs-12 detail-content trophy-content">
                            
                            <!-- User Dropdown -->
                            <div class="btn-group user-menu">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> Putri Feranda <span class="fa fa-angle-down"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            
                            <div class="panel panel-default panel-timeline panel-collection">
                                
                                <!-- Info Trophy -->
                                <div class="collection-trophy">
                                    <a href="#" class="btn btn-info-trophy" data-toggle="modal" data-target="#trophyModal">Info Trophy</a>
                                    <div class="modal fade modal-white" id="trophyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content infotrophy-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Info Trophy</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="infotrophy-list">
                                                        <span class="table-trophy bronze-trophy"></span>
                                                        <p>Bronze Trophy</p>
                                                        <p class="pull-right">0 - 500 Poin</p>
                                                    </div>
                                                    <div class="infotrophy-list">
                                                        <span class="table-trophy silver-trophy"></span>
                                                        <p>Bronze Trophy</p>
                                                        <p class="pull-right">0 - 500 Poin</p>
                                                    </div>
                                                    <div class="infotrophy-list">
                                                        <span class="table-trophy gold-trophy"></span>
                                                        <p>Bronze Trophy</p>
                                                        <p class="pull-right">0 - 500 Poin</p>
                                                    </div>
                                                    <div class="infotrophy-list">
                                                        <span class="table-trophy platinum-trophy"></span>
                                                        <p>Bronze Trophy</p>
                                                        <p class="pull-right">0 - 500 Poin</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-green" data-dismiss="modal">Done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="collection-overview">
                                    <h2 class="collection-congrat">Selamat! Putri Feranda Mendapatkan Gold Trophy</h2>
                                    <img src="<?php echo URL_IMG?>icons/trophy.png" width="120" height="120" alt="Go Pray Parent Trophy" class="img-responsive icon-trophy">
                                    <p class="collection-poin">1450 Poin</p>
                                    <p class="table-title">Berikut adalah daftar Trophy yang diperoleh Putri Feranda tiap periode dengan jumlah poinya :</p>
                                </div>
                                
                                <div class="table-responsive bank-donate table-collection">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Periode</th>
                                                <th class="trophy-icon">Trophy</th>
                                                <th>Poin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Januari 2016</td>
                                                <td class="trophy-icon"><span class="table-trophy gold-trophy"></span></td>
                                                <td>1250</td>
                                            </tr>
                                            <tr>
                                                <td>Februari 2016</td>
                                                <td class="trophy-icon"><span class="table-trophy silver-trophy"></span></td>
                                                <td>640</td>
                                            </tr>
                                            <tr>
                                                <td>Maret 2016</td>
                                                <td class="trophy-icon"><span class="table-trophy gold-trophy"></span></td>
                                                <td>1350</td>
                                            </tr>
                                            <tr>
                                                <td>April 2016</td>
                                                <td class="trophy-icon"><span class="table-trophy silver-trophy"></span></td>
                                                <td>740</td>
                                            </tr>
                                            <tr>
                                                <td>Mei 2016</td>
                                                <td class="trophy-icon"><span class="table-trophy gold-trophy"></span></td>
                                                <td>1230</td>
                                            </tr>
                                            <tr>
                                                <td>Juni 2016</td>
                                                <td class="trophy-icon"><span class="table-trophy gold-trophy"></span></td>
                                                <td>1120</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
                <section class="admin-content tab-pane fade" role="tabpanel" id="mysticker">
                    <div class="row">
                        <div class="col-xs-12 detail-content">
                            <p>Coming soon</p>
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
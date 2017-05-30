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
                        <li class="active" role="presentation"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
                        <li role="presentation"><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">Summary</a></li>
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
                <section class="admin-content tab-pane fade in active" role="tabpanel" id="timeline">
                    <div class="row">
                        <div class="col-sm-4 col-md-3 detail-rightmenu visible-xs">
                            <p class="title">Keluarga</p>
                            
                            <div class="media media-family">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo URL_IMG?>photos/bitmap.png" width="60" height="60" alt="Go Pray Parent Profile">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading">Allie Carson</h4>
                                    <p class="status">Bunda</p>
                                </div>
                            </div>
                            
                            <div class="media media-family">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo URL_IMG?>photos/user-4.png" width="60" height="60" alt="Go Pray Parent Profile">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading">Kenneth Santiago</h4>
                                    <p class="status">Bapak</p>
                                </div>
                            </div>
                            
                            <div class="media media-family">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo URL_IMG?>photos/user-5.png" width="60" height="60" alt="Go Pray Parent Profile">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading">Chester Schultz</h4>
                                    <p class="status">Om</p>
                                </div>
                            </div>
                            
                            <div class="right-btn">
                                <a href="#" class="btn btn-green"><span class="fa fa-plus"></span> Add Family</a>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-8 col-md-9 detail-content">
                            <?php if(isset($list_timeline)) {
                                foreach ($list_timeline as $timeline) {
                                ?>
                                <div class="panel panel-default panel-timeline">
                                    <div class="media media-timeline">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="<?php echo $timeline['foto']?>" width="40" height="41" alt="Go Pray User Photo Profile">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><?php echo $timeline['info']?></h4>
                                            <p class="media-time"><?php echo $timeline['time']?></p>
                                        </div>
                                    </div>
                                    <!-- <p class="timeline-detail"> Detail </p> -->
                                </div>        
                                    <?php
                                }
                            } ?>
                        </div>
                        
                        <div class="col-sm-4 col-md-3 detail-rightmenu hidden-xs">
                            <p class="title">Keluarga</p>
                            
                            <div class="media media-family">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo URL_IMG?>photos/bitmap.png" width="60" height="60" alt="Go Pray Parent Profile">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading">Allie Carson</h4>
                                    <p class="status">Bunda</p>
                                </div>
                            </div>
                            
                            <div class="media media-family">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo URL_IMG?>photos/user-4.png" width="60" height="60" alt="Go Pray Parent Profile">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading">Kenneth Santiago</h4>
                                    <p class="status">Bapak</p>
                                </div>
                            </div>
                            
                            <div class="media media-family">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo URL_IMG?>photos/user-5.png" width="60" height="60" alt="Go Pray Parent Profile">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h4 class="media-heading">Chester Schultz</h4>
                                    <p class="status">Om</p>
                                </div>
                            </div>
                            
                            <div class="right-btn">
                                <a href="#" class="btn btn-green"><span class="fa fa-plus"></span> Add Family</a>
                            </div>
                            
                        </div>
                        
                    </div>
                </section>

                <section class="admin-content tab-pane fade" role="tabpanel" id="summary">
                    <div class="row">
                        <div class="col-xs-12 detail-content summary-content">
                           
                            <!-- User Dropdown -->
                            <div class="summary-btn">
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
                                <a href="#" class="btn btn-green btn-download"><span class="glyphicon glyphicon-save"></span> Download</a>
                            </div>
                            
                            <div class="row summary-list">
                                <div class="col-md-4 col-lg-3">
                                    <div class="panel panel-default">
                                        <p class="summary-pray">Mengaji</p>
                                        <div class="summary-point">
                                            <h1>1530</h1>
                                            <p>Point</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="panel panel-default">
                                        <p class="summary-pray">Sholat Sunnah</p>
                                        <div class="summary-point">
                                            <h1>230</h1>
                                            <p>Point</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="panel panel-default">
                                        <p class="summary-pray">Puasa Sunnah</p>
                                        <div class="summary-point">
                                            <h1>1530</h1>
                                            <p>Point</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="panel panel-default">
                                        <p class="summary-pray">Sedekah</p>
                                        <div class="summary-point">
                                            <h1>230</h1>
                                            <p>Point</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row summary-graph">
                                <div class="col-md-6 col-lg-6">
                                    <div class="panel panel-default">
                                        <p class="summary-pray">Sholat</p>
                                        <div id="chartSholat" class="graph-content" style="height: 325px; width: 100%;"></div>
                                        <div class="graph-legend">
                                            <ul class="list-inline">
                                                <li><span class="graph-indicator graph-1"></span> 120 Sholat di masjid</li>
                                                <li><span class="graph-indicator graph-2"></span> 15 Sholat terlambat</li>
                                                <li><span class="graph-indicator graph-3"></span> 15 Sholat di rumah</li>
                                                <li><span class="graph-indicator graph-4"></span> 30 Tidak Sholat</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="panel panel-default">
                                        <p class="summary-pray">Puasa Ramadhan</p>
                                        <div id="chartPuasa" class="graph-content" style="height: 325px; width: 100%;"></div>
                                        <div class="graph-legend">
                                            <ul>
                                                <li><span class="graph-indicator graph-1"></span> 23 Puasa</li>
                                                <li><span class="graph-indicator graph-4"></span> 7 Tidak Puasa</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
                
            </div>
            
        </div>
        
        <footer></footer>
        <?php include "foot.php" ?>

        <script type="text/javascript">
            // put this page's specific js here
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

            window.onload = function () {
                CanvasJS.addColorSet("sholatWajib",
                [//colorSet Array

                "#687BF4",
                "#FDD761",
                "#2FDF93",
                "#FB5495"               
                ]);
                
                CanvasJS.addColorSet("puasaRamadhan",
                [//colorSet Array

                "#687BF4",
                "#FB5495"               
                ]);
                
                var chart = new CanvasJS.Chart("chartSholat",
                {
                    colorSet: "sholatWajib",
                    data: [
                    {       
                        type: "pie",
                        toolTipContent: "#percent %",
                        dataPoints: [
                            { y: 120 },
                            { y: 15 },
                            { y: 15 },
                            { y: 30 }
                        ]
                    }
                    ]
                });
                
                var chart2 = new CanvasJS.Chart("chartPuasa",
                {
                    colorSet: "puasaRamadhan",      
                    data: [
                    {       
                        type: "pie",
                        showInLegend: true,
                        toolTipContent: "#percent %",
                        legendText: "{indexLabel}",
                        dataPoints: [
                            {  y: 23 },
                            {  y: 7 }
                        ]
                    }
                    ]
                });
                
                chart.render();
                chart2.render();
            }
        </script>
        
    </body>
</html>
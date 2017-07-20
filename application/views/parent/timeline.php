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
                        
                        <div id="timelineContainer" class="col-sm-8 col-md-9 detail-content">
                            
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

                <section class="admin-content tab-pane fade" role="tabpanel" id="summary">
                    <div class="row">
                        <div class="col-xs-12 detail-content summary-content">
                           
                            <!-- User Dropdown -->
                            <div class="summary-btn">
                                <div class="btn-group user-menu">
                                    <button type="button" id="btnSummary" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user"></i> <span id="btnSummaryText">Pilih Akun</span> <span class="fa fa-angle-down"></span>
                                    </button>
                                    <ul id="selectSummary" class="dropdown-menu">
                                        <?php foreach($data_summary as $summary) { ?>
                                        <li>
                                            <a href="javascript:void(0)" data-value="<?php echo $summary['id_user']?>" onclick="showSummary(this);"> 
                                            <?php echo $summary['nama_user']?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-green btn-download"><span class="glyphicon glyphicon-save"></span> Download</a>
                            </div>
                            
                            <?php if(isset($data_summary)) { ?>
                                <?php foreach($data_summary as $key => $value) { ?>
                                    <div id="summaryList-<?php echo $value['id_user']?>" class="row summary-list" style="display: none;">
                                    
                                    <?php foreach($value['aktivitas'] as $aktivitas => $point) { ?>
                                        <div class="col-md-4 col-lg-3">
                                            <div class="panel panel-default">
                                                <p class="summary-pray"><?php echo $aktivitas?></p>
                                                <div class="summary-point">
                                                    <h1><?php echo $point?></h1>
                                                    <p>Point</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            
                            <div class="row summary-graph">
                                <div class="col-md-12 col-lg-12">
                                    <div class="panel panel-default" style="vertical-align:middle">
                                        <p class="summary-pray">Grafik Ibadah</p>

                                        <div id="chartLoading" class="text-center" style="min-width: 250px; height: 400px; max-width: 100%; margin: 0 auto; display: none;">
                                            <span style="display: inline-block; height: 100%; vertical-align: middle;"></span>
                                            <img src="<?php echo URL_IMG?>loading.svg" alt='Loading...' style='vertical-align: middle;'>
                                        </div>
                                        
                                        <div id="chartContainer" style="min-width: 250px; height: 400px; max-width: 100%; margin: 0 auto"></div>
                                        
                                    </div>
                                </div>
                                
                                <!-- <div class="col-md-6 col-lg-6">
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
                                </div> -->
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
            
            var listTimeline = <?php echo json_encode($list_timeline)?>;

            function loadTimeline(jsonData) {
                var html = '<p class="text-center text-muted">Tidak ada aktivitas</p>';
                if(jsonData.length > 0) {
                    html = '';
                    $.each(jsonData, function(i) {
                        html = '<div class="panel panel-default panel-timeline">'
                            + '<div class="media media-timeline">'
                                + '<div class="media-left">'
                                    + '<a href="#">'
                                        + '<img class="media-object" src="'+ jsonData[i].foto +'" width="40" height="41" alt="Go Pray User Photo Profile">'
                                        + '</a>'
                                    + '</div>'
                                    + '<div class="media-body">'
                                        + '<h4 class="media-heading">'+ jsonData[i].info +'</h4>'
                                        + '<p class="media-time">'+ jsonData[i].time +'</p>'
                                    + '</div>'
                                + '</div>'
                            +'</div>';
                        $(html).hide().appendTo('#timelineContainer').slideDown('slow').delay('1000');
                    });
                    console.log('appendData.length: '+jsonData.length);
                    console.log($('#timelineContainer > div').length);
                }
            }
            
            function showSummary(elem) {
                var id = $(elem).data('value') || '';
                var nama = $(elem).html();

                if(id != '') {
                    $('[id^="summaryList-"]').hide();
                    $('#summaryList-'+id).fadeIn();
                    $('#btnSummaryText').html(nama);
                    setChart(id);
                } else {
                    console.log('ShowSummary id not found!');
                }
            }

            function setChart(id='') {
                if(id != '') {
                    $.ajax({
                        url: "<?php echo base_url()?>" +'timeline/get_chart_data/' +id,
                        type: 'GET',
                        data: '',
                        dataType: 'json',
                        beforeSend: function() {
                            $('#chartContainer').hide();
                            $('#chartLoading').fadeIn();
                        },
                        success: function(response, status) {
                            console.log(response.data);
                            loadCharts(response.info, response.data);
                            $('#chartLoading').hide();
                            $('#chartContainer').fadeIn();
                        },
                        error: function(jqXhr, status, errorThrown) {
                            console.log(status);   
                            $('#chartLoading').hide();
                            $('#chartContainer').fadeIn();
                        }
                    });
                }
            }

            function loadCharts(info, jsonData='') {
                if(jsonData != '') {
                        // Build the chart
                    Highcharts.chart('chartContainer', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'Grafik Ibadah '+info.nama_user
                                    +' <br>'+info.bulan_daftar + ' - ' + '<?php echo date('F Y')?>'
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: false
                                },
                                showInLegend: true,
                                size: 250
                            }
                        },
                        series: [{
                            name: 'Brands',
                            colorByPoint: true,
                            data: jsonData
                            /*data: [{
                                name: 'Microsoft Internet Explorer',
                                y: 56.33
                            }, {
                                name: 'Chrome',
                                y: 24.03,
                                sliced: true,
                                selected: true
                            }]*/
                        }]
                    });
                }
            }

            $(document).ready(function() {
                //first fill timeline
                var firstLoad = listTimeline.slice(0, 10);
                loadTimeline(firstLoad);

                //initializing lazyload for timeline
                var $container = $("#timelineContainer");
                var dataLength = listTimeline.length; // numbers of initial data length
                console.log('dataLength = '+dataLength);

                $(window).lazyScrollLoading({
                    onScrollToBottom : function(e, $lazyItems) {
                        var appendData = [];
                        var toLoad = 10; // numbers of data to load
                        var loadedLength = $('#timelineContainer > div').length; //numbers of loaded data
                        console.log('loadedLength = '+loadedLength);

                        if((dataLength - loadedLength) < toLoad) {
                            toLoad = (dataLength - loadedLength);
                        }
                        for(i=loadedLength; i<(loadedLength + toLoad);  i++) {
                            // console.log(i + '<br>');
                            appendData.push(listTimeline[i]);
                        }
                        // $container.append($("<li>New Lazy Item</li>"));
                        loadTimeline(appendData);
                    }
                });
                            

                //triggering summary at first launch
                $('#selectSummary li:first-child a').trigger('click');
                
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
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
                            <div class="trophy-btn text-right">
                                <div class="btn-group user-menu">
                                    <button type="button" id="btnTrophy" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user"></i> <span id="btnTrophyText">Pilih Akun</span> <span class="fa fa-angle-down"></span>
                                    </button>
                                    <ul id="selectTrophy" class="dropdown-menu">
                                        <?php foreach($data_kerabat as $kerabat) { ?>
                                        <li>
                                            <a href="javascript:void(0)" data-value="<?php echo $kerabat->id_user?>" onclick="showTrophy(this);"> 
                                            <?php echo $kerabat->nama?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
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
                                                        <p class="pull-right">500 - 1000 Poin</p>
                                                    </div>
                                                    <div class="infotrophy-list">
                                                        <span class="table-trophy silver-trophy"></span>
                                                        <p>Silver Trophy</p>
                                                        <p class="pull-right">1001 - 1500 Poin</p>
                                                    </div>
                                                    <div class="infotrophy-list">
                                                        <span class="table-trophy gold-trophy"></span>
                                                        <p>Gold Trophy</p>
                                                        <p class="pull-right">1501 - 2000 Poin</p>
                                                    </div>
                                                    <div class="infotrophy-list">
                                                        <span class="table-trophy platinum-trophy"></span>
                                                        <p>Platinum Trophy</p>
                                                        <p class="pull-right">> 2000 Poin</p>
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
                                    <h2 id="congratTrophy" class="collection-congrat">
                                        <span class='trophyName'></span> Koleksi Trophy
                                    </h2>
                                    <img id="currentImgTrophy" src="<?php echo URL_IMG?>icons/trophy-0.png" width="120" height="120" alt="Go Pray Parent Trophy" class="img-responsive icon-trophy">
                                    <p class="collection-poin"><span id="currentPoin">0</span> Poin</p>
                                    <p class="table-title">Berikut adalah daftar Trophy yang diperoleh <span class='trophyName'></span> tiap periode dengan jumlah poinya :</p>
                                </div>
                                
                                <div class="table-responsive bank-donate table-collection">
                                    <div id="loadingContainer" class="center-block text-center" style="display:none; margin:20px;">
                                        <img src="<?php echo URL_IMG?>loading.svg" alt='Loading...' style='vertical-align: middle;'>
                                    </div>
                                    <table id="collectionTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Periode</th>
                                                <th class="trophy-icon">Trophy</th>
                                                <th>Poin</th>
                                            </tr>
                                        </thead>
                                        <tbody id="collectionContainer">
                                            <tr class="active text-center">
                                                <td colspan="3">Belum ada trophy</td>
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
            function showTrophy(elem) {
                var id = $(elem).data('value') || '';
                var nama = $(elem).html();

                if(id != '') {
                    // $('[id^="trophyList-"]').hide();
                    // $('#trophyList-'+id).fadeIn();
                    $('.trophyName').html(nama);
                    $('#btnTrophyText').html(nama);
                    getCollection(id);
                } else {
                    console.log('ShowTrophy id not found!');
                }
            }

            function getCollection(id='') {
                var defaultHtml = $
                if(id != '') {
                    $.ajax({
                        url: "<?php echo base_url()?>" + 'collection/get_trophy',
                        data: { idUser: id },
                        type: 'GET',
                        dataType: 'JSON',
                        beforeSend: function() {
                            $('#collectionTable').hide();
                            $('#loadingContainer').fadeIn();
                        },
                        success: function(response, status) {
                            // console.log(response);
                            loadCollection(response.data);
                            $('#loadingContainer').hide();
                            $('#collectionTable').fadeIn();
                        },
                        error: function(jqXhr, message, errorThrown) {
                            console.log(message);
                            $('#loadingContainer').hide();
                            $('#collectionTable').fadeIn();
                        },
                    });
                }
            }

            function loadCollection(jsonData) {
                var html = '<p class="text-center">Belum ada aktivitas</p>';
                var trophy = '';
                var imgSrc = '';
                var nama = $('#btnTrophy').text();
                if(jsonData.length > 0) {
                    
                    if(jsonData[0].point > 500) {
                        trophy = '<span class="trophyName">'+ nama +'</span> telah mendapatkan '+ jsonData[0].color +' trophy';
                        imgSrc = "<?php echo URL_IMG?>" + 'icons/trophy1-'+ jsonData[0].color +'.png';
                    }
                    else {
                        trophy = '<span class="trophyName">'+ nama +'</span> belum mendapatkan trophy';
                        imgSrc = "<?php echo URL_IMG?>" + 'icons/trophy-0.png';
                    }
                    $('#congratTrophy').html(trophy);
                    $('#currentPoin').html(jsonData[0].point);
                    $('#currentImgTrophy').attr('src', imgSrc);

                    $.each(jsonData, function(i) {
                        html += '<tr>'
                                    + '<td>'+ jsonData[i].month +'</td>'
                                    + '<td class="trophy-icon"><span class="table-trophy '+jsonData[i].color+'-trophy"></span></td>'
                                    + '<td>'+ jsonData[i].point +'</td>'
                                + '</tr>';
                    });
                    $('#collectionContainer').html(html).hide().fadeIn('slow');
                }
            }
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
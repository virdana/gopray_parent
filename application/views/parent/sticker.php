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
                        <li class="active" role="presentation"><a href="#sticker" aria-controls="sticker" role="tab" data-toggle="tab">Sticker</a></li>
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
                <section class="admin-content tab-pane fade in active" role="tabpanel" id="sticker">
                    <div class="row">
                        <div class="col-xs-12 detail-content">
                            <div class="panel panel-default panel-timeline panel-sticker">
                                <div class="form-group form-filter">
                                    <select id="selectPaket" class="form-control">
                                        <option value='0' selected disabled>Pilih Paket Stiker</option>
                                        <?php foreach($list_paket_sticker as $paket) { ?>
                                        <option value="<?php echo urlencode($paket->nama_paket)?>"><?php echo $paket->nama_paket?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="fa fa-angle-down"></span>
                                </div>
                                <div class="center-block text-center">
                                    <img id="loadingPaket" src="<?php echo URL_IMG?>loading.svg"  alt="Loading..." width="50" height="50" style="display:none;">
                                    <p id="textPaket" class="text-muted" style="font-size: 22px; padding: 50px 20px; display: none;">Tidak ada stiker</p>
                                    <ul id="listPaket" class="sticker-list"> <!-- load by JS --> </ul>
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
        
        <!-- Javascript -->
        <?php include"foot.php" ?>
        
        <script type="text/javascript">
            $('#selectPaket').on('change', function() {
                console.log('wow');
                var value = $(this).val() || '';
                var imgLoading = $('#loadingPaket');
                var textPaket = $('#textPaket');
                var listPaket = $('#listPaket');
                if(value != '') {
                    $.ajax({
                        url: "<?php echo base_url('sticker/get_paket')?>?nama=" + encodeURIComponent(value),
                        type: 'GET',
                        dataType: 'json',
                        beforeSend: function(){
                            listPaket.hide();
                            textPaket.hide();
                            imgLoading.fadeIn();
                        },
                        success: function(response, status){
                            console.log(response.data);
                            imgLoading.hide();
                            if(response.status == 1) {
                                var data = response.data;
                                if(data.length > 0){
                                    loadStickers(data);
                                    listPaket.fadeIn();
                                }
                                else {
                                    textPaket.html('Tidak ada stiker').fadeIn();
                                }
                            } else {
                                textPaket.html('Tidak ada stiker').fadeIn();
                            }
                        },
                        error: function(jqXhr, errorMessage, errorThrown){
                            console.log(errorMessage);
                            imgLoading.hide();
                            textPaket.html('Tidak ada stiker').fadeIn();
                        }
                    });
                }
            });

            function loadStickers(data='') {
                if(data != '') {
                    var html = '';
                    $('#listPaket').html('');
                    for(i=0; i<data.length; i++) {
                        if(data[i] != null) {
                        html += '<li class="sticker-item">'
                                + '<div class="img-sticker">'
                                    + '<a href="<?php echo base_url()?>sticker/detail?nama='+encodeURIComponent(data[i]['nama'])+'" class="sticker-name"><img src="'+data[i]['cover']+'" width="150" height="150" alt="Sticker Icon" class="img-responsive"></a>'
                                    + '</div>'
                                + '<a href="<?php echo base_url()?>sticker/detail?nama='+encodeURIComponent(data[i]['nama'])+'" class="sticker-name">'+data[i]['nama']+'</a>'
                            + '</li>';
                        }
                    }
                    $('#listPaket').append(html);
                }
            }
        </script>
        
        <!-- Dial Panel Toggle Button -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#selectPaket option:nth(1)').prop('selected', true).trigger('change');

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
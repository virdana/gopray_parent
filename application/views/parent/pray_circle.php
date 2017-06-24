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
                                <form id="messageForm" class="circle-form">
                                    <div class="media media-timeline">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="<?php echo $data_parent->profile_picture?>" width="50" height="50" alt="Go Pray User Photo Profile">
                                            </a>
                                        </div>
                                        <div class="media-body circle-body">
                                            <!-- <div class="form-group circle-for">
                                                <span class="pointer">Untuk </span>
                                                <input type="text" class="form-control" placeholder="">
                                            </div> -->
                                            <div class="form-group circle-message">
                                                <textarea class="form-control" placeholder="Tulis pesan disini" id="textMessage"></textarea>
                                            </div>
                                            <div class="form-group circle-message">
                                                <input type="hidden" id="postMessageType" value="100">
                                                <hr class="circle-separator">
                                                <img src="" id="imgUploadPreview" class="img-thumbnail" style="max-height:120px;">
                                            </div>
                                        </div>
                                        
                                        <div class="circle-body daily-message">
                                            <div class="form-group circle-for circle-tab-container">
                                                <ul class="nav nav-tabs circle-tab" role="tablist">
                                                    <li role="presentation" class="active"><a href="#text" aria-controls="text" role="tab" data-toggle="tab">Text Only</a></li>
                                                    <!-- <li role="presentation"><a href="#random" aria-controls="random" role="tab" data-toggle="tab">Random Image</a></li> -->
                                                    <li role="presentation"><a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">Upload Image</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="text">
                                                        <div class="form-group circle-message">
                                                            <div class="free-text">
                                                                <textarea name="text_only" id="textOnly" class="form-control" placeholder="Tulis pesan disini"></textarea>
                                                            </div>
                                                            <div class="text-form">
                                                                <button type="button" name="submittext" class="btn btn-green" id="btnTxtOnly">Done</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="random">
                                                        <div class="form-group circle-message">
                                                            <p>Coming soon</p>
                                                        </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="upload">

                                                        <div class="circle-upload">
                                                            <div class="form-group">
                                                                <label class="control-label label-grey">Top Text</label>
                                                            </div>
                                                            <hr class="circle-separator">
                                                            <div class="form-group">
                                                                <input type="text" name="text_upload" class="form-control" id="textUploadImg" placeholder="Tulis pesan disini">
                                                            </div>
                                                            <hr class="circle-separator">
                                                            <div class="form-group">
                                                                <label class="control-label label-green">Preview</label>
                                                            </div>
                                                        </div>
                                                        <hr class="circle-separator">
                                                        <div id="fileImgUploadContainer" class="form-group upload-btn">
                                                            <input id="fileImgUpload" name="img_upload" type="file">
                                                            <button type="submit" id="btnUploadImg" class="btn btn-green btn-done">Done</button>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="free-text-white"></div>
                                        
                                    </div>
                                    <div class="circle-button">
                                        <button class="btn btn-white" style="visibility: hidden;">
                                            <span class="fa fa-camera"></span> Pray Daily
                                        </button>
                                        <button type="submit" id="btnPost" class="btn btn-green pull-right">Post</button>
                                    </div>
                                </form>
                            </div>
                            
                            <div id="circleTimeline">
                            <?php foreach($data_message as $message) { ?>
                            <div class="panel panel-default panel-timeline circle-timeline">
                                <div class="media media-timeline">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object messageImg" src="<?php echo $message->kerabat->foto?>" onerror="imageLoadError(this);" width="50" height="50" alt="Go Pray User Photo Profile">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $message->kerabat->nama?></h4>
                                        <p class="media-time">
                                            <?php if(date('Y-m-d') == $message->tanggal) { 
                                                echo date('h:i A', strtotime($message->jam));
                                            }
                                            else {
                                                echo date('d-M-Y h:i A', strtotime($message->tanggal.' '.$message->jam));
                                            }
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <p class="timeline-detail">
                                    <?php echo $message->pesan?>
                                    <?php if ($message->gambar != "nothing") { ?>
                                    <img src="<?php echo $message->gambar?>" width="659" height="581" alt="Go Pray Circle Picture" class="img-responsive">
                                    <?php } ?>
                                </p>
                            </div>
                            <?php } ?>
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
                </section>
                
            </div>
            
        </div>
        
        <footer></footer>
        <?php include "foot.php" ?>
        
        <!-- Javascript -->
        <script type="text/javascript">
            var jsonMessage = <?php echo json_encode($data_message)?>;
            // console.log(jsonMessage);
            loadMessage(jsonMessage);

            function loadMessage(jsonData) {
            }

            function imageLoadError(elem) {
                d = new Date();
                $(elem).attr('src', 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png?'+d.getTime());
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
        
        <!-- Upload Image Tab Content -->
        <script type="text/javascript">
            $("#fileImgUpload").fileinput({
                showUpload: false,
                showCaption: false,
                browseIcon: '<i class="fa fa-camera"></i>&nbsp;',
                browseClass: "btn btn-white",
                removeClass: "btn btn-green",
                browseLabel: 'Upload Photo',
                fileType: "image",
                allowedFileTypes: "image",
                previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
            });            
        </script>
        
        <!-- Event to show focused timeline text -->
        <script type="text/javascript">
            $("#textMessage").on("click, focus", function(){
                $(".free-text-white").fadeIn();
                $(".daily-message").fadeIn();
                $("#textOnly").focus();
            });

            $(".free-text-white").on("click", function(){
                $(".free-text-white").fadeOut();
                $(".daily-message").fadeOut();
            });
        </script>
        
        <!-- Event for want to post action -->
        <script type="text/javascript">
            $("#btnTxtOnly").on("click", function(){
                var textOnly = $("#textOnly").val() || '';

                if(textOnly != '') {
                    $('#postMessageType').val('1'); //code for text only
                    $('#textMessage').val(textOnly);
                    $(".free-text-white").fadeOut();
                    $(".daily-message").fadeOut();
                } else {
                    $('#textOnly').tooltip({
                        'trigger': 'focus', 
                        'placement': 'left',
                        'title': 'Silahkan tulis pesan anda'
                    });
                    $("#textOnly").focus();   
                }
            });

            $("#btnUploadImg").on("click", function(e){
                e.preventDefault();
                var textUploadImg = $("#textUploadImg").val() || '';
                var src = $('#fileImgUploadContainer .krajee-default .kv-file-content img').attr('src') || '';
                
                if(textUploadImg != '') {
                    $('#postMessageType').val('2'); //code for text & image
                    $('#imgUploadPreview').attr('src', src);
                    $('#textMessage').val(textUploadImg);
                    $(".free-text-white").fadeOut();
                    $(".daily-message").fadeOut();
                } else {
                    $('#textUploadImg').tooltip({
                        'trigger': 'focus', 
                        'placement': 'left',
                        'title': 'Silahkan tulis pesan anda'
                    });
                    $("#textUploadImg").focus();   
                }
            });

            $('#btnPost').on('click', function(e) {
                e.preventDefault();

                doSubmit();
            });

            function doSubmit() {
                var postMessageType = $('#postMessageType').val();
                if(postMessageType != 0) {
                    var allowSubmit = true;
                    var data = new FormData();
                    data.append('access_token', "<?php echo warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY)?>" );
                    // var data = new FormData($('#messageForm')[0]);
                    
                    switch(postMessageType) {
                        case '1': //text only
                            data.append('pesan', $('#textOnly').val());
                            break;
                        case '2':
                            data.append('pesan', $('#textUploadImg').val());
                            data.append('gambar', $('#fileImgUpload')[0].files[0]);
                            break;
                        default:
                            allowSubmit = false;
                            $.alert('DEFAULT CASE');
                            break;
                    }

                    if(allowSubmit === true) {
                        var defaultHtml = $('#btnPost').html();
                        $.ajax({
                            url: "https://cors-anywhere.herokuapp.com/" + "<?php echo REST_URL.'master/pesan'?>",
                            type: 'POST',
                            data: data,
                            dataType: 'json',
                            cache: false,
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                $('#btnPost').html('Mengirim...');
                                $('#btnPost').prop('disabled', true);
                            },
                            success: function(response, status) {
                                console.log(response);
                                $('#btnPost').html(defaultHtml);
                                $('#btnPost').prop('disabled', false);
                                get_messages();
                            },
                            error: function(jqXhr, message, errorTrhrown) {
                                console.log(message);
                                $('#btnPost').html(defaultHtml);
                                $('#btnPost').prop('disabled', false);
                            }
                        });
                    }
                }
            }

            function get_messages() {
                var data = [];
                var html = '';
                $.ajax({
                    url: "<?php echo base_url()?>" + 'pray_circle/json_get_message',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if(response.status == 1) {
                            data = response.data;
                            // Formatting date/time
                            var jam = timeFormatter(data.tanggal+ ' ' +data.jam);

                            html = '<div class="panel panel-default panel-timeline circle-timeline">'
                                + '<div class="media media-timeline">'
                                    + '<div class="media-left"> <a href="#">'
                                        + '<img class="media-object messageImg" src="'+ data.kerabat.foto +'" onerror="imageLoadError(this);" width="50" height="50" alt="Go Pray User Photo Profile"> </a>'
                                    + '</div>'
                                    + '<div class="media-body">'
                                        + '<h4 class="media-heading">'+ data.kerabat.nama +'</h4>'
                                        + '<p class="media-time">'+ jam +'</p>'
                                    + '</div>'
                                + '</div>'
                                + '<p class="timeline-detail">'
                                    + data.pesan;
                                    if(data.gambar != 'nothing') {
                                        html += '<img src="'+ data.gambar +'" width="659" height="581" alt="Go Pray Circle Picture" class="img-responsive"> </p>';
                                        }
                                html += '</div>';
                            
                            $(html).hide().prependTo('#circleTimeline').slideDown('slow');
                        } else {
                            console.log('Gagal mengambil data message!');
                        }
                    }
                });
                return data;
            }

            function timeFormatter(dateTime){
                var date = new Date(dateTime);
                if (date.getHours() >= 12){
                    var hour = parseInt(date.getHours()) - 12;
                    var amPm = "PM";
                } else {
                    var hour = date.getHours(); 
                    var amPm = "AM";
                }
                var time = hour + ":" + date.getMinutes() + " " + amPm;
                return time;
            }
        </script>
        
    </body>
</html> 
<!DOCTYPE html>
<html lang="en">
    <?php include "head.php" ?>

    <body>
        <style>
            .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
                text-align: center;
            }
            .kv-avatar .file-input {
                display: table-cell;
                /*max-width: 260px;*/
                /*height: auto;*/
            }
            .kv-reqd {
                color: red;
                font-family: monospace;
                font-weight: normal;
            }
        </style>
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
                        <li class="active" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
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
                <section class="admin-content tab-pane fade in active" role="tabpanel" id="profile">
                    <div class="row">
                        <div class="col-xs-12 detail-content">
                            <div class="panel panel-default panel-timeline panel-donate">
                                <form enctype="multipart/form-data" id="changeProfileForm" class="changeprofile" action="<?php echo base_url()?>update_profil/do_update" method="post">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-push-6">
                                        <!-- <div class="profile-container"> -->
                                        <div class="foto-container">
                                            <div class="kv-avatar center-block text-center" style="width:200px">
                                                <input id="foto" name="foto" type="file" class="file-loading">
                                            </div>
                                        </div>
                                        <div id="fotoAlert" class="center-block text-center" style="margin-top:10px;width:100%;display:none"></div>
                                    </div>
                                    <div class="col-sm-6 col-sm-pull-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Lengkap</label>
                                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data_parent->nama?>" placeholder="Nama Lengkap" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $data_parent->email?>" placeholder="Example@email.com" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">No. HP</label>
                                            <input type="number" name="no_hp" id="no_hp" class="form-control" value="<?php echo $data_parent->no_hp?>" placeholder="Nomor Telepon/HP" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Hubungan Keluarga</label>
                                            <input type="text" name="hubungan" id="hubungan" class="form-control" value="<?php echo $data_parent->kerabat?>" placeholder="ex: Mama, Papa, Adik, Kakak" required="required">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="checkGantiPassword" value="1" onchange="collapsePanel(this);" data-target="#collapseGantiPassword">
                                                    <span class="cr"><i class=" cr-icon fa fa-check"></i></span>
                                                    Ganti Password?
                                                </label>
                                            </div>
                                        </div>
                                        <div id="collapseGantiPassword" class="panel-collapse collapse">
                                            <div class="form-group">
                                                <label class="control-label">Password Baru</label>
                                                <input type="password" name="password_baru" id="password_baru" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Konfirmasi Password Baru</label>
                                                <input type="password" name="re_password_baru" id="re_password_baru" class="form-control" placeholder="Password">
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <label class="control-label">Password*</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                                        </div>
                                        <div class="form-group btn-changeprofile">
                                            <!-- <input type="reset" class="btn btn-white" value="Batal"> -->
                                            <input type="submit" id="btnSubmit" class="btn btn-green" value="Simpan">
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </section>
                
            </div>
        </div>
        
        <footer></footer>
        <?php include "foot.php" ?>

        <!-- the fileinput plugin initialization -->
        <script type="text/javascript">
            /*var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' + 
                'onclick="alert(\'Call your custom code here.\')">' +
                '<i class="glyphicon glyphicon-tag"></i>' +
                '</button>'; */
            $("#foto").fileinput({
                overwriteInitial: true,
                maxFileSize: 1500,
                showClose: false,
                showCaption: false,
                showBrowse: false,
                browseOnZoneClick: true,
                removeLabel: '',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: 'Cancel or reset changes',
                elErrorContainer: '#fotoAlert',
                msgErrorClass: 'alert alert-block alert-danger small',
                defaultPreviewContent: '<img src="<?php echo $avatar_url?>" alt="Your Avatar" style="max-width:240px;"><h6 class="text-muted">Click to select</h6>',
                // defaultPreviewContent: '<img src="<?php echo $avatar_url?>" alt="Your Avatar" style="width:260px; height:auto;"><h6 class="text-muted">Click to select</h6>',
                /*previewSettings: {
                    image: {width: "260px", height: "auto"}
                },*/
                layoutTemplates: {main2: '{preview} {remove} {browse}'},
                allowedFileExtensions: ["jpg", "png", "gif"]
            });

            function collapsePanel(elem) {
                var target = $(elem).data('target');
                if($(elem).is(':checked')) {
                    $(target).collapse('show');
                }
                else {
                    $(target).collapse('hide');
                }
            }

            // Form submit handler
            $('#changeProfileForm').on('submit', function(e) {
                e.preventDefault();
                var allowSubmit = true;
                var password = $('#password_baru').val() || '';
                var rePassword = $('#re_password_baru').val() || '';
                var checkGantiPassword = $('#checkGantiPassword').is(':checked');

                console.log(checkGantiPassword);
                if(checkGantiPassword != true) {
                    $('#collapseGantiPassword input').val('');
                } else {
                    if(password != '') {
                        if(password !== rePassword) {
                            allowSubmit = false;
                            $('#re_password_baru').tooltip({
                                'trigger': 'focus', 
                                'placement': 'bottom',
                                'title': 'Konfirmasi Password tidak valid!'
                            });
                            $("#re_password_baru").focus();   
                        }
                    }
                }

                if(allowSubmit === true) {
                    doSubmit();
                }
            });
            function doSubmit() {
                var defaultHtml = $('#btnSubmit').html();
                $.ajax({
                    url: $('#changeProfileForm').attr('action'),
                    type: $('#changeProfileForm').attr('method'),
                    data: new FormData($('#changeProfileForm')[0]),
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        $('#btnSubmit').prop('disabled', true);
                        $('#btnSubmit').html('Menyimpan...');
                    },
                    success: function(response, status){
                        // console.log(response);
                        $('#btnSubmit').prop('disabled', false);
                        $('#btnSubmit').html(defaultHtml);
                        if(response.status == 1) {
                            $('#profileNama').text(response.data.nama);
                            $('#profileKerabat').text(response.data.kerabat);
                            $('#profileFoto').attr('src', response.data.profile_picture);
                            $.alert({
                                    theme: 'bootstrap',
                                    type: 'green',
                                    title: '',
                                    content: response.message,
                                    autoClose: 'ok|5000',
                                    buttons: {
                                        ok: {
                                            btnClass: 'btn-dark',
                                            text: 'Ok',
                                            action: function() {}
                                        }
                                    }
                                });
                        }
                        else {
                            $.alert({
                                    theme: 'bootstrap',
                                    type: 'red',
                                    title: '',
                                    content: response.message,
                                    autoClose: 'ok|5000',
                                    buttons: {
                                        ok: {
                                            btnClass: 'btn-dark',
                                            text: 'Ok',
                                            action: function() {}
                                        }
                                    }
                                });
                        }
                    },
                    error: function(jqXhr, status, errorThrown){ 
                        console.log(status);
                        $('#btnSubmit').prop('disabled', false);
                        $('#btnSubmit').html(defaultHtml);
                    },
                });
            };
        </script>
        
    </body>
</html>
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
                max-width: 220px;
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
                                <form class="changeprofile">
                                <div class="row">
                                    <!-- <div class="col-sm-6 visible-xs">
                                        <div class="profile-container">
                                            <img class="img-responsive profile-pic" src="<?php echo URL_IMG?>photos/bitmap.png" height="225" width="225">
                                            <div class="upload-button">
                                                <div class="upload-text">
                                                    <span class="fa fa-camera"></span>Ubah Foto Profil Anda
                                                </div>
                                            </div>
                                            <input class="file-upload" type="file" accept="image/*"/>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-6 col-sm-push-6">
                                        <!-- <div class="profile-container"> -->
                                        <div class="foto-container">
                                            <div class="kv-avatar center-block text-center" style="width:200px">
                                                <input id="foto" name="foto" type="file" class="file-loading" required>
                                            </div>
                                        </div>
                                        <div id="fotoAlert" class="center-block text-center" style="margin-top:10px;width:100%;display:none"></div>
                                    </div>
                                    <div class="col-sm-6 col-sm-pull-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama Depan</label>
                                                <input type="text" class="form-control" placeholder="Nama Depan">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Nama Belakang</label>
                                                <input type="text" class="form-control" placeholder="Nama Belakang">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Example@email.com">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">No. HP</label>
                                                <input type="no_hp" class="form-control" placeholder="Nomor Telepon/HP">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Hubungan Keluarga</label>
                                                <input type="text" class="form-control" placeholder="ex: Mama, Papa, Adik, Kakak">
                                            </div>
                                            <div class="form-group btn-changeprofile">
                                                <input type="reset" class="btn btn-white" value="Batal">
                                                <input type="submit" class="btn btn-green" value="Simpan">
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

        <script>
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
                defaultPreviewContent: '<img src="<?php echo $avatar_url?>" alt="Your Avatar" style="width:160px"><h6 class="text-muted">Click to select</h6>',
                layoutTemplates: {main2: '{preview} {remove} {browse}'},
                allowedFileExtensions: ["jpg", "png", "gif"]
            });
        </script>
        
    </body>
</html>
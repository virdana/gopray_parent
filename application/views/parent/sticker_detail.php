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
                        <div class="col-xs-12 detail-content sticker-detail">
                            <div class="panel panel-default panel-timeline panel-sticker">
                                <div class="media">
                                    <div class="media-left media-middle">
                                       <img src="<?php echo $selected_sticker->cover?>" width="250" height="250" alt="Sticker Icon" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading sticker-title"><?php echo $selected_sticker->nama_stiker?></h4>
                                        <p class="sticker-desc"></p>
                                        <p class="sticker-price">
                                            Rp <?php echo number_format($selected_sticker->harga, 0, ',', '.')?>
                                        </p>
                                        <a href="<?php echo base_url('sticker');?>" class="btn btn-round-white">Batal</a>
                                        <a href="#" class="btn btn-round-green" data-toggle="modal" data-target="#buyModal">Beli</a>
                                    </div>
                                </div>
                                
                                <!-- Pilih Pembayaran -->
                                <div class="modal fade buysticker modal-white" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Pilih Pembayaran (1/2)</h4>
                                            </div>
                                            <form class="formpayment">
                                                <div class="modal-body">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" id="radio 1" value="mobile" class="mobile-payment" name="payment">
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            <span class="cr-text">Mobile Payment (Indosat)</span>
                                                        </label>
                                                        <img src="<?php echo URL_IMG?>icons/Indosat.png" width="72" height="21" alt="Go Pray Payment Account" class="img-responsive payment-logo">
                                                    </div>
                                                    <hr>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" id="radio" value="mobile" class="mobile-payment" name="payment">
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            <span class="cr-text">Mobile Payment (Telkomsel)</span>
                                                        </label>
                                                        <img src="<?php echo URL_IMG?>icons/Telkomsel.png" width="72" height="22" alt="Go Pray Payment Account" class="img-responsive payment-logo">
                                                    </div>
                                                    <hr>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" id="radio" value="mobile" class="mobile-payment" name="payment">
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            <span class="cr-text">Mobile Payment (XL)</span>
                                                        </label>
                                                        <img src="<?php echo URL_IMG?>icons/XL_Axiata.png" width="26" height="22" alt="Go Pray Payment Account" class="img-responsive payment-logo">
                                                    </div>
                                                    <hr>
                                                    <div class="radio">
                                                        <label>

                                                            <input type="radio" id="radio" value="banktrans" name="payment">    
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            <span class="cr-text">Bank Transfer (BNI)</span>
                                                        </label>
                                                        <img src="<?php echo URL_IMG?>icons/BNI.png" width="68" height="22" alt="Go Pray Payment Account" class="img-responsive payment-logo">
                                                    </div>
                                                    <hr>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" id="radio" value="banktrans" name="payment">
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            <span class="cr-text">Bank Transfer (BCA)</span>
                                                        </label>
                                                        <img src="<?php echo URL_IMG?>icons/BCA.png" width="70" height="22" alt="Go Pray Payment Account" class="img-responsive payment-logo">
                                                    </div>
                                                    <hr>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" id="radio" value="banktrans" name="payment">
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            <span class="cr-text">Bank Transfer (Mandiri)</span>
                                                        </label>
                                                        <img src="<?php echo URL_IMG?>icons/BankMandiri.png" width="76" height="22" alt="Go Pray Payment Account" class="img-responsive payment-logo">
                                                    </div>
                                                    <hr>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" id="radio" value="creditcard" name="payment">
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            <span class="cr-text">Credit Card</span>
                                                        </label>
                                                        <div class="payment-logo visa-logo">
                                                            <img src="<?php echo URL_IMG?>icons/Group.png" width="65" height="20" alt="Go Pray Payment Account" class="img-responsive">
                                                            <img src="<?php echo URL_IMG?>icons/Master_Card.png" width="29" height="22" alt="Go Pray Payment Account" class="img-responsive">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-green" value="Pilih" name="submitpilih">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Mobile Payment -->
                                <div class="modal fade buysticker modal-white" id="mobileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Mobile Payment (2/2)</h4>
                                            </div>
                                            <form class="sticker-form mobile-form">
                                                <div class="modal-body">
                                                    <label class="control-label">Masukan nomor handphone anda</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                                                            <input type="tel" class="form-control" id="" placeholder="Nomor Handphone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-green" value="Request Validation Key" name="submitmobile">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Credit Card -->
                                <div class="modal fade buysticker modal-white" id="creditcardModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Credit Card (2/2)</h4>
                                            </div>
                                            <form class="sticker-form cc-form">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><span class="fa fa-credit-card"></span></div>
                                                            <input type="number" class="form-control" id="" placeholder="Nomor Kartu Kredit">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-6 left">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><span class="fa fa-calendar-minus-o"></span></div>
                                                                    <input type="text" class="form-control" id="" placeholder="mm/yy">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 right">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><span class="fa fa-lock"></span></div>
                                                                    <input type="number" class="form-control" id="" placeholder="CVV (3 digit)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-green" value="Proses" name="submitmobile">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Bank Transfer -->
                                <div class="modal fade buysticker modal-white" id="bankModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Bank Transfer (2/2)</h4>
                                            </div>
                                            <div class="modal-body bank-sticker">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-3 col-md-4">
                                                        <p>Atas Nama</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-9 col-md-8 detail-info">
                                                        <p>GoPray Indonesia</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-3 col-md-4">
                                                        <p>Bank</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-9 col-md-8 detail-info">
                                                        <img src="<?php echo URL_IMG?>icons/BankMandiri.png" width="76" height="22" alt="Akun Bank Mandiri GoPray Indonesia" class="img-responsive">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-3 col-md-4">
                                                        <p>No. Rekening</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-9 col-md-8 detail-info">
                                                        <p>1234-1234-1234</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-2 col-md-3">
                                                        <p>Jumlah</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-10 col-md-9 detail-info">
                                                        <p class="bank-nominal">Rp 10.321</p>
                                                        <p class="important-info">Penting! Mohon transfer sampai 3 digit terakhir</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-green" data-dismiss="modal">OK</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                
                                <ul class="sticker-list">
                                    <?php foreach($list_stickers as $sticker) { ?>
                                    <li class="sticker-item">
                                        <div class="img-sticker">
                                            <img src="<?php echo $sticker->stiker?>" width="150" height="150" alt="Sticker Icon" class="img-responsive">
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
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
        
        <!-- Pilih Pembayaran -->
        <script type="text/javascript">
           $(".formpayment").submit(function(e){
               e.preventDefault();

               // get selected value
               var selected = $(".radio label input[type='radio']:checked").val();
                    console.log (selected);
               // check if an option was selected
                   if (selected=="mobile"){
                        $('#mobileModal').modal('show');
                        $('#buyModal').modal('hide');

                   }
                   else if (selected=="creditcard"){
                        $('#creditcardModal').modal('show');
                        $('#buyModal').modal('hide');
                   }
                   else if (selected=="banktrans"){
                        $('#bankModal').modal('show');
                        $('#buyModal').modal('hide');
                   }
                   else{
                        alert("Please select an option!");
                   }    
           });
        </script>
        
    </body>
</html>
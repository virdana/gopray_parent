<!-- include this page inside <body> tag -->

<div class="admin-leftmenu left">
    <div class="user-profile">
        <div class="user-image">
            <img src="<?php echo URL_IMG?>/photos/bitmap.png" width="149" height="149" alt="Go Pray Admin Profile" class="img-circle">
            <a href="#" class="edit-profile"></a>
        </div>
        <p class="name">ADMIN</p>
        <!-- <p class="status">Bunda</p> -->
    </div>
    <div class="list-menu">
        <ul class="nav nav-pills nav-stacked">
            <li ><a href="<?php echo base_url();?>parent/sinkronisasi_jadwal"><span class="fa fa-refresh"></span> Sinkron Jadwal</a></li>
            <li ><a href="<?php echo base_url();?>parent/nilai_ibadah"><span class="fa fa-thumbs-up"></span> Nilai Ibadah</a></li>
            <li ><a href="<?php echo base_url();?>parent/sticker_store"><span class="fa fa-sticky-note"></span> Sticker store</a></li>
            <li class="active"><a href="<?php echo base_url();?>parent/verifikasi_payment"><span class="fa fa-credit-card"></span> Verifikasi Payment</a></li>
            <li><a href="<?php echo base_url();?>parent/manajemen_user"><span class="fa fa-user-circle"></span> Manage User</a></li>
        </ul>
    </div>
</div>

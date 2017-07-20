<!-- include this page inside <body> tag -->
<?php 
    $page = $this->uri->segment(1) ? $this->uri->segment(1) : '';
    /*echo "<pre>"; print_r($page); echo "</pre>";*/
?>

<div class="admin-leftmenu left">
    <div class="user-profile">
        <div class="user-image">
        <?php 
            $avatar_url = URL_IMG."photos/def-avatar.png";
            if(isset($data_parent->profile_picture)) {
                if($data_parent->profile_picture != 'null') { $avatar_url = $data_parent->profile_picture; }    
            }
        ?>
            <img id="profileFoto" src="<?php echo $avatar_url?>" width="149" height="149" alt="Go Pray Parent Profile" class="img-circle">
            <a href="<?php echo base_url()?>update_profil" class="edit-profile" data-toggle="tooltip" data-placement="bottom" title="Ubah Profil"></a>
        </div>
        <p id="profileNama" class="name"><?php echo isset($data_parent->nama) ? $data_parent->nama : 'John Doe'?></p>
        <p id="profileKerabat" class="status"><?php echo isset($data_parent->kerabat) ? $data_parent->kerabat : ''?></p>
    </div>
    <div class="list-menu">
        <ul class="nav nav-pills nav-stacked">
            <li class="<?php echo ($page=='timeline') ? 'active' : ''?>">
                <a href="<?php echo base_url()?>timeline"><span class="fa fa-circle"></span> Timeline</a></li>
            <li class="<?php echo ($page=='pray_circle') ? 'active' : ''?>">
                <a href="<?php echo base_url()?>pray_circle"><span class="fa fa-circle"></span> Pray Circle</a></li>
            <li class="<?php echo ($page=='collection') ? 'active' : ''?>">
                <a href="<?php echo base_url()?>collection"><span class="fa fa-circle"></span> Collection</a></li>
            <li class="<?php echo ($page=='sticker') ? 'active' : ''?>">
                <a href="<?php echo base_url()?>sticker"><span class="fa fa-circle"></span> Sticker</a></li>
            <li class="<?php echo ($page=='donate') ? 'active' : ''?>">
                <a href="<?php echo base_url()?>donate"><span class="fa fa-circle"></span> Donate</a></li>
            <!-- <?php echo base_url()?>signout/do_signout -->
            <li class="admin-logout">
                <a href="<?php echo base_url()?>signout/do_signout" onclick="doSignout(event);"><span class="fa fa-circle"></span> Logout</a></li>
        </ul>
    </div>
</div>
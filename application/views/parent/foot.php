<!-- include this page inside <body> tag -->
<!-- contains included js/plugins needed for particular page -->

<!-- Javascript -->
<script type="text/javascript" src="<?php echo URL_JS?>jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL_JS?>bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>owlcarousel.2.2.0/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>jquery-confirm.3.2.3/js/jquery-confirm.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>krajee-fileinput.4.4.0/js/fileinput.min.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>canvas/canvasjs.min.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>highcharts-5.0.12/js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>highcharts-5.0.12/js/themes/grid-light.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>awesomplete/awesomplete.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo URL_PLUGIN?>jquery.lazy-1.7.4/jquery.lazy.min.js"></script> -->

<!-- Bootstrap Tooltip Script -->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    // -- temporary removed in development (in progress)
    $('.notif-icon').hide();
    //  -- 
</script>

<!-- Signout Script -->
<script type="text/javascript">
    function doSignout(event) {
        event.preventDefault();
        var href = $(event.target).attr('href');
        $.confirm({
            theme: 'supervan',
            type: 'orange',
            icon: 'fa fa-question-circle',
            title: 'Konfirmasi',
            content: 'Anda yakin ingin keluar?',
            buttons: {
                ya: {
                    text: 'Ya',
                    btnClass: 'btn-blue',
                    action: function() { window.location.replace(href) }
                },
                tidak: {
                    text: 'Tidak',
                    btnClass: 'btn-default',
                    action: function() {}
                }
            }
        });
        return false;
    }
</script>
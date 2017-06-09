<!-- include this page inside <body> tag -->
<!-- contains included js/plugins needed for particular page -->

<!-- Javascript -->
<script type="text/javascript" src="<?php echo URL_JS?>jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL_JS?>bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>owlcarousel.2.2.0/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>jquery-confirm.3.2.3/js/jquery-confirm.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>krajee-fileinput.4.4.1/js/fileinput.min.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>canvas/canvasjs.min.js"></script>

<!-- Bootstrap Tooltip Script -->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
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
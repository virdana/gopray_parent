<!-- include this page inside <body> tag -->
<!-- contains included js/plugins needed for particular page -->

<!-- Javascript -->
<script type="text/javascript" src="<?php echo URL_JS?>/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL_JS?>/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo URL_JS?>/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL_PLUGIN?>/owlcarousel.2.2.0/owl.carousel.min.js"></script>
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
    $(document).ready(function() {
        $('#example').DataTable();
        $('#example1').DataTable();
    } );
</script>

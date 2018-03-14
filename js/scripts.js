/**
 * Created by smetshile on 2018/03/13.
 */
$(document).ready(function(){
    $(".owl-one").owlCarousel({
        items:1,
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });

    $( ".burger-menu" ).click(function () {
        if ( $( ".over-lay-menu" ).is( ":hidden" ) ) {
            $( ".over-lay-menu" ).slideDown( "fast" );
        } else {
            $( ".over-lay-menu" ).slideUp("fast");
        }
    });

    $(".owl-2").owlCarousel({
        items:1,
        loop:true,
        margin:0,
        autoplay:false,
        nav:true,
        navText : ['<img src="images/left-arrow.jpg" class="nav-arrows left-arrow">','<img src="images/right-arrow.jpg" class="nav-arrows right-arrow">'],
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });
    $(".owl-three").owlCarousel({
        items:3,
        loop:true,
        margin:0,
        autoplay:false,
        nav:true,
        navText : ['<img src="images/left-arrow.jpg" class="nav-arrows left-arrow">','<img src="images/right-arrow.jpg" class="nav-arrows right-arrow">'],
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });
    $(".owl-four").owlCarousel({
        items:1,
        loop:true,
        margin:0,
        autoplay:false,
        nav:true,
        navText : ['<img src="images/left-arrow2.png" width="30">','<img src="images/right-arrow2.png" width="30" class="">'],
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });
    $('#myform').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                email: true
            },
            fullname: {
                required: true,
                minlength: 3
            },
            tel: {
                required: true,
                minlength: 10

            },
            youroptions: {
                required:true
            }
        },
        messages: {
            email: 'Please enter a valid email',
            fullname: 'Minimum 3 characters',
            tel: 'Please enter your contact number'
            
        }
    });
});
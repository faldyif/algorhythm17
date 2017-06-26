(function ($) {
    
    // Init Wow
    wow = new WOW( {
        animateClass: 'animated',
        offset:       100
    });
    wow.init();
    
    // Navigation scrolls
    $('.navbar-nav li a').bind('click', function(event) {
        $('.navbar-nav li').removeClass('active');
        $(this).closest('li').addClass('active');
        var $anchor = $(this);
        var nav = $($anchor.attr('href'));
        if (nav.length) {
        $('html, body').stop().animate({				
            scrollTop: $($anchor.attr('href')).offset().top				
        }, 1500, 'easeInOutExpo');
        
        event.preventDefault();
        }
    });
    
    // About section scroll
    $(".banner-info a.btn-more").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){
            window.location.hash = hash;
        });
    });
    
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar-default").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });
    
    // Testimonials Slider
    $('.bxslider').bxSlider({
      adaptiveHeight: true,
      mode: 'fade'
    });

    //lightcase
    $('a[data-rel^=lightcase]').lightcase();
    
    //previewImage
    $('#previewGallery').hide() ;

    function readUrl(input){
        if(input.files && input.files[0]){
            var reader = new FileReader() ;

            reader.onload = function(e){
                $('#previewGallery').attr('src', e.target.result).show() ;
            }

            reader.readAsDataURL(input.files[0]) ;
        }
    }

    $('#photoUpload').on('change', function(){
        readUrl(this) ;
    }) ;
    
})(jQuery);
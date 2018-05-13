$(document).ready(function(){

    //------------arrow scroll top--------------------
    $('a[href^="#top"]').click(function(){
        var $element = $('a[name=' + $(this).attr('href').substr(1) + ']');
        if($element.length == 1) {
            $('html, body').animate({ scrollTop: $element.offset().top-130 }, 1000);
        }
        return false;
    });

//------------arrow scroll down to next section--------------------
    $('.go-anchor').click(function () {
        $('html, body').animate({
            scrollTop: $('#portfolio-section').offset().top -100
        }, 800);
    });

//------------collapse menu after click some link--------------------
    $(".navbar-collapse a").click(function() {
    if (!$(this).hasClass("dropdown-toggle")) {
        $(".navbar-collapse").collapse('hide');
    }
});

//------------scroll to section with id--------------------
    $('a[data-target^="anchor"]').on('click', function () {
        var target = $(this).attr('href'),

            bl_top = $(target).offset().top-120;

        $('body,html').animate({scrollTop: bl_top}, 1500);
        return false;
    });

    $('.slick-list').slick({
        dots: false,
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 7
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });

        $('.div-on-click').addClass("hidden-skills");

        $('.see').click(function() {
            var $this = $('.div-on-click');

            if ($this.hasClass("hidden-skills")) {
                $('.div-on-click').removeClass("hidden-skills").addClass("visible-skills");

            } else {
                $('.div-on-click').removeClass("visible-skills").addClass("hidden-skills");
            }
        });

});

//------------fade arrow top--------------------
$(document).ready ( function(f){
    var element = f('#arrow-top');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 500 ? 'In': 'Out')](300);
    });
});

//------------fade second menu--------------------
$(document).ready ( function(f){
    var element = f('#header-top-navbar');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 450 ? 'In': 'Out')](300);
    });
});

jQuery(window).scroll(function(){
    var $sections = $('section');
    $sections.each(function(i,el){
        var top  = $(el).offset().top-100;
        var bottom = top +$(el).height();
        var scroll = $(window).scrollTop();
        var id = $(el).attr('id');
        if( scroll > top && scroll < bottom){
            $('a.active-section-link').removeClass('active-section-link');
            $('a[href="#'+id+'"]').addClass('active-section-link');

        }
    })
});
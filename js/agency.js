(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 54)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function () {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 56
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($(window).width() <= 991) {
            $("#logo").attr("src", "img/home/zipcaptions.com-blue.png");
            $("#navbar-container").addClass('container-fluid');
            $("#navbar-container").removeClass('container');
        } else {
            if ($("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
                $("#logo").attr("src", "img/home/zipcaptions.com-blue.png");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
                if ($('header').hasClass('contact_masthead')) {
                    $("#logo").attr("src", "img/home/zipcaptions.com-blue.png");
                } else {
                    $("#logo").attr("src", "img/home/zipcaptions.com.png");
                }
            }
            $("#navbar-container").addClass('container');
            $("#navbar-container").removeClass('container-fluid');
        }

    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
    $(window).resize(navbarCollapse);

    // Hide navbar when modals trigger
    $('.portfolio-modal').on('show.bs.modal', function (e) {
        $(".navbar").addClass("d-none");
    })
    $('.portfolio-modal').on('hidden.bs.modal', function (e) {
        $(".navbar").removeClass("d-none");
    })


    //Scrolling effect
    var animationController = new ScrollMagic.Controller({});
    var testimonials = $('.testimonial');

    var testimonialsTl = new TimelineMax();
    testimonials.each(function () {
        testimonialsTl.from($(this), 1, {y: 200, autoAlpha: 0}, '-=0.8');
    });

    var testimonialScene = new ScrollMagic.Scene({
        triggerElement: "#testimonials_wrap",
        triggerHook: 0.8
    })
            .setTween(testimonialsTl)
            .addTo(animationController);

    var testimonial_1 = $('#testimonial_1');
    var testimonial_2 = $('#testimonial_2');
    var testimonial_3 = $('#testimonial_3');
    var testimonial_4 = $('#testimonial_4');

    var testimonialSceneOne = new ScrollMagic.Scene({
        triggerElement: "#testimonials_wrap",
        triggerHook: 0.3,
        duration: '150%'
    })
            .setTween(TweenMax.to(testimonial_1, 1, {'margin-top': -100}))
            .addTo(animationController);

    var testimonialSceneTwo = new ScrollMagic.Scene({
        triggerElement: "#testimonials_wrap",
        triggerHook: 1,
        duration: '200%',
        offset: 200
    })
            .setTween(TweenMax.to(testimonial_2, 1, {'margin-top': -250}))
            .addTo(animationController);
    var testimonialSceneFour = new ScrollMagic.Scene({
        triggerElement: "#testimonials_wrap",
        triggerHook: 0.3,
        duration: '250%'
    })
            .setTween(TweenMax.to(testimonial_4, 1, {'margin-top': -150}))
            .addTo(animationController);

    var testimonialSceneThree = new ScrollMagic.Scene({
        triggerElement: "#testimonials_wrap",
        triggerHook: 1,
        duration: '200%',
        offset: 400
    })
            .setTween(TweenMax.to(testimonial_3, 1, {'margin-top': -150}))
            .addTo(animationController);

    $(".navbar-collapse").on("click", "a", null, function () {
        $(".navbar-collapse").collapse('hide');
    });
    $('.open-nav').click(function () {
//        $('#sideNav').toggleClass('is-open');
//        $('#sideNav').animate({
//            'z-index': $('#sideNav').css('z-index') == '-1' ? '2000' : '-1',
//            'display': $('#sideNav').css('display') == 'none' ? 'block' : 'none',
//        }, 0);
        $('#sideNav').css({'display': $('#sideNav').css('display') == 'none' ? 'block' : 'block'});
        if ($('#sideNav').css('z-index') == '-1') {
            setTimeout(function () {
                doit();
            }, 0);
        } else {
            setTimeout(function () {
                doit();
            }, 500);
        }
        $('#main-view').toggleClass('is-open');
        $('.fixed-top').toggleClass('is-open');
        $('.jPanelMenu-overlay').css({'display': 'block'});
        if ($('.jPanelMenu-overlay').css('opacity') == '1') {
            setTimeout(function () {
                closeOverlay();
            }, 800);
        }
        $('.jPanelMenu-overlay').animate({
            'opacity': $('.jPanelMenu-overlay').css('opacity') == '0' ? '1' : '0',
        }, 800);

    });

    $("#nav-toggle").click(function () {
        this.classList.toggle("active");
        $("#navbarResponsive2").fadeToggle("fast");
//        $("#navbarResponsive2").fadeToggle(500);
    });

})(jQuery); // End of use strict

function closeOverlay() {
    $('.jPanelMenu-overlay').css({'display': 'none'});
}
function doit() {
    $('#sideNav').css({
        'z-index': $('#sideNav').css('z-index') == '-1' ? '1' : '-1',
        'display': $('#sideNav').css('z-index') == '-1' ? 'block' : 'none'
    });
}
function openNav() {
//    $('#sideNav').toggleClass('is-open');
    $('#main-view').toggleClass('is-open');
    $('.fixed-top').toggleClass('is-open');

    $('#sideNav').animate({
        'z-index': $('#sideNav').css('z-index') == '0' ? '2000' : '0'
    }, 0);
    $('.jPanelMenu-overlay').css(
            {'display': $('.jPanelMenu-overlay').css('display') == 'none' ? 'block' : 'none'}
    );
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
    document.body.style.backgroundColor = "white";
}
//function openChat() {
//   (document.getElementsByClassName('frame-content')[0]).click();
//}

function openChat() {
    (document.getElementsByClassName('crisp-113f7m5')[0]).click();
}

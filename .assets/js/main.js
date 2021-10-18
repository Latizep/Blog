gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(TextPlugin);
$(document).ready(function () {
    AOS.init();
    gsap.to('#loading', 2, {
        delay: 1.5,
        left: '-100%',
        ease: Expo.easeInOut
    })
    gsap.from('#profile-img', 1, {
        delay: 1.5,
        width: '0px',
        ease: Expo.easeInOut
    })
    gsap.to('#loading-text', 1, {
        delay: .5,
        text: {
            value: ". . .",
            delimiter: " "
        },
        ease: Linear.easeNone
    });
    gsap.to('#name', 2, {
        delay: 2.5,
        text: "Hello I’m Latief",
        ease: Expo.easeInOut
    });
});

$('.list-blog').slick({
    infinite: true,
    slidesToShow: 4,
    arrows: false,
    dots: true,
    slidesToScroll: 4,
    customPaging: function (slider, i) { var thumb = $(slider.$slides[i]).data(); return '<button></button>'; },
    responsive: [
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ],
});

let activeHead = true;
let animate = true;

$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $(".navigation").addClass('active')
        activeHead = true;
    }
    else {
        $(".navigation").removeClass('active')
        activeHead = false;
        animate = true;
    }
    showNav();
});

function showNav() {
    if (activeHead && animate) {
        gsap.fromTo(".navigation", { height: 0 }, { position: "fixed", duration: 1, height: "90px" });
        animate = false
    }
}
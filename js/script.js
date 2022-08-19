$(document).ready(function () {
     // start fixed header
    var stickyNavTop = $('.navSticky').offset().top;
    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $('.navSticky').addClass('fixHeader');
        } else {
            $('.navSticky').removeClass('fixHeader');
        }
    };
    stickyNav();
    $(window).scroll(function () {
        stickyNav();
    });
    // end fixed header
    // start wonder woman
    $('.wndrCarohgt').owlCarousel({
        items: 3,
        margin: 20,
        loop: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        nav: true,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    // end wonder woman
    // start video
    $('.videoSlider').owlCarousel({
        items: 3,
        margin: 20,
        loop: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        nav: true,
        dots: false,
        autoplay: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    // end video
    // start more video
    $('.moreVideo').owlCarousel({
        items: 3,
        margin: 20,
        loop: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        nav: true,
        dots: false,
        autoplay: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    // end more video
    // start mobile toggle
    $("#mobileToggle").click(function () {
        $("#mobileBg").toggleClass('bgMenuFull');
    });
    // end mobile toggle
    // start search
    if ($(window).width() < '300') {
        $('header form').removeClass('d-flex').addClass('d-none');
    }
    // end search
});




// start tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});
// end tooltip


// start subscribe message
// $("#thankForSubs").hide();
// $("#subsBtn").click(function () {
//     $("#thankForSubs").show();
// });
// setTimeout(function () {
//     $('#thankForSubs').remove();
// }, 5000);
// end subscribe message

// start hover submenu
document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth > 992) {
        document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {
            everyitem.addEventListener('mouseover', function (e) {
                let el_link = this.querySelector('a[data-bs-toggle]');
                if (el_link != null) {
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                }
            });
            everyitem.addEventListener('mouseleave', function (e) {
                let el_link = this.querySelector('a[data-bs-toggle]');

                if (el_link != null) {
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                }

            })
        });
    }
});
// end hover submenu




$(document).ready(function () {
    // start navSticky
        let pk = document.querySelector('.navSticky').parentElement;
            var snt = $('.navSticky').offset().top;
            var sn = function(){
            var st = $(window).scrollTop();
            if (st > snt) { 
                $('.navSticky').addClass('stickySearch');
            } else {
                $('.navSticky').removeClass('stickySearch'); 
            }
            };
            sn();
            $(window).scroll(function() {
                sn();
        });
    // end navSticky
});



// start add
$(window).scroll(function() {
    if($(this).scrollTop()>1100) {
      $('.stickyR').fadeOut();
    } 
    else {
      $('.stickyR').fadeIn();
    }
  });
// end add



// start add2
$(window).scroll(function() {
   
    if($(window).width()<1400)
    {
    if($(this).scrollTop()>1100) {
      $('.stickyR').fadeOut();
    } 
    else {
      $('.stickyR').fadeIn();
    }
    }

    if(($(window).width()>1400) && ($(window).width()<1600))
    {
    if($(this).scrollTop()>900) {
      $('.stickyR').fadeOut();
    } 
    else {
      $('.stickyR').fadeIn();
    }
    }

    if($(window).width()>1600)
    {
    if($(this).scrollTop()>300) {
      $('.stickyR').fadeOut();
    } 
    else {
      $('.stickyR').fadeIn();
    }
    }

  });
// end add2
$(".open").click(function() {
  var container = $(this).parents(".topic");
  var answer = container.find(".answer");
  var trigger = container.find(".faq-t");

  answer.slideToggle(200);

  if (trigger.hasClass("faq-o")) {
    trigger.removeClass("faq-o");
  } else {
    trigger.addClass("faq-o");
  }

  if (container.hasClass("expanded")) {
    container.removeClass("expanded");
  } else {
    container.addClass("expanded");
  }
});

jQuery(document).ready(function($) {
  $('.question').each(function() {
    $(this).attr('data-search-term', $(this).text().toLowerCase() + $(this).find("ptag").text().toLowerCase());

  });

  $('.live-search-box').on('keyup', function() {

    var searchTerm = $(this).val().toLowerCase();

    $('.question').each(function() {

      if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
        $(this).parent().parent().show();
      } else {
        $(this).parent().parent().hide();
      }

    });

  });

});
		
    var tpj=jQuery;
    var revapi14;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_14_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_14_1");
      }else{
        revapi14 = tpj("#rev_slider_14_1").show().revolution({
          sliderType:"hero",
          jsFileLocation:"revolution/js/",
          sliderLayout:"fullscreen",
          dottedOverlay:"none",
          delay:9000,
          particles: {startSlide: "first", endSlide: "last", zIndex: "6",
            particles: {
              number: {value: 100}, color: {value: "#ffffff"},
              shape: {
                type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
                image: {src: ""}
              },
              opacity: {value: 1, random: true, min: 0.25, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
              size: {value: 3, random: true, min: 0.5, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
              line_linked: {enable: false, distance: 150, color: "#ffffff", opacity: 0.4, width: 1},
              move: {enable: true, speed: 1, direction: "top", random: true, min_speed: 1, straight: false, out_mode: "out"}},
            interactivity: {
              events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
              modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 0, opacity: 0.01}, repulse: {distance: 200}}
            }
          },
          navigation: {
          },
          responsiveLevels:[1240,1024,778,480],
          visibilityLevels:[1240,1024,778,480],
          gridwidth:[1240,1024,778,480],
          gridheight:[868,768,960,720],
          lazyType:"none",
          parallax: {
            type:"mouse",
            origo:"slidercenter",
            speed:400,
            levels:[1,2,3,4,5,10,15,20,25,46,47,48,49,50,51,55],
          },
          shadow:0,
          spinner:"off",
          autoHeight:"off",
          fullScreenAutoWidth:"off",
          fullScreenAlignForce:"off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "",
          disableProgressBar:"on",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            disableFocusListener:false,
          }
        });
      }

              RsParticlesAddOn(revapi14);
    });	/*ready*/




  const cards = document.getElementsByClassName("cards");
  for (const cardsElement of cards) {
    cardsElement.onmousemove = e => {
      for (const card of cardsElement.getElementsByClassName("card")) {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        card.style.setProperty("--mouse-x", `${x}px`);
        card.style.setProperty("--mouse-y", `${y}px`);
      }
    };
  }



const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.ntshow');
hiddenElements.forEach((el) => observer.observe(el));


  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 32,
      centeredSlides: true,
      autoplay: {
        delay: 8000,
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    })
  })

// JavaScript Document
//preogress bar 
$(document).ready(function () {
  window.skill_scroll = false;
  if ($('#skills').length > 0) {
    $(window).on('scroll', function () {
      if (window.skill_scroll == false) {
        var winT = $(window).scrollTop(),
          winH = $(window).height(),
          skillsT = $('#skills').offset().top;
        skillsH = $('#skills').height();

        if ((winT + 400) >= skillsT) {
          $('.skills__item').each(function () {
            var length = $(this).find('.skills__inner').data("percent");
            $(this).find('.skills__inner').animate({
              width: length
            }, 3000);
          });
          window.skill_scroll = true;
        }
      }
    });
  }
});

jQuery.event.special.touchstart = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchstart", handle, {
      passive: true
    });
  }
};

//Contact page for map load on contact
var segmentv = window.location.pathname.split('/')[1];
if (segmentv === "contact.php") {
  window.onload = function () {
    setTimeout(function () {
      var iframemaps = document.createElement('iframe');
      iframemaps.src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27556.387624511994!2d71.9155625326643!3d30.306913934386717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b554b068b1b21%3A0x7517d8adc887c625!2sDigital%20Applications!5e0!3m2!1sen!2s!4v1623421355919!5m2!1sen!2s';
      document.getElementById("g-maps").appendChild(iframemaps);
    }, 1500);
  };
}
//scroll top function
$(document).ready(function () {
  $('#back-to-top').click(function () {
    $("html,body").animate({
      scrollTop: 0
    }, 100);
  });
  $(window).scroll(function () {
    if ($(window).scrollTop() >= 450) {
      $('#back-to-top').addClass('btn-active');
    } else {
      $('#back-to-top').removeClass('btn-active');
    }
  });
});
// active class to navbar
var url = window.location;
$('#navbarNavAltMarkup .nav-item a.nav-link[href="' + url + '"]').parent().addClass('active');
$('#navbarNavAltMarkup .nav-item a.nav-link').filter(function () {
  return this.href == url;
}).parent().addClass('active');
var url = window.location;

var owlIndex = window.location.pathname.split('/')[1];
if (owlIndex === "" || owlIndex === "index.php") {
  //owl carousel home page
  $(document).ready(function () {
    $('.owl-carousel').owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      margin: 20,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        992: {
          items: 3
        },
        1050: {
          items: 3
        },
        1250: {
          items: 4
        }
      }
    })
  });
}

//owl carousel work detail page
$(document).ready(function () {
  $('.owl-portfolio').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      },
      1200: {
        items: 4
      }
    }
  })
});

//About page JS
var sticking = window.location.pathname.split('/')[1];
if (sticking === "service.php" || sticking === "blog.php" || sticking === "blog-detail.php") {
  var stickitLeft = $('.stickthis').offset.left;
  var stickitWidth = $('.stickthis').width() + 'px';
  var stickitHeight = $('.stickthis').height() + 'px';
  var stickySidebarToTop = $('.stickthis').offset().top;
  $(window).scroll(function () {
    var windowToTop = $(window).scrollTop();
    if (windowToTop + 10 > stickySidebarToTop) {
      var socialHeight = $("#sectionsocial").offset().top - 550;
      if (windowToTop > socialHeight) {
        $('.stickthis').removeAttr('style');
      } else {
        $('.stickthis').css({
          'position': 'fixed',
          'top': '100px',
          'left': stickitLeft,
          'width': stickitWidth,
          'height': stickitHeight
        })
      }
    } else {
      $('.stickthis').removeAttr('style');
    }
  });
}

function createCircleChart(percent, color, size, stroke) {
  let svg = `<svg class="mkc_circle-chart" viewbox="0 0 36 36" width="${size}" height="${size}" xmlns="http://www.w3.org/2000/svg">
        <path class="mkc_circle-bg" stroke="#eeeeee" stroke-width="${stroke * 1}" fill="none" d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"/>
			  
        <path class="mkc_circle" stroke="${color}" stroke-width="${stroke}" stroke-dasharray="${percent},100" stroke-linecap="butt" fill="none"
            d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831" />
        <text class="mkc_info" x="50%" y="50%" alignment-baseline="central" text-anchor="middle" font-size="7">${percent}%</text>
    </svg>`;
  return svg;
}

let charts = document.getElementsByClassName('mkCharts');
for (let i = 0; i < charts.length; i++) {
  let chart = charts[i];
  let percent = chart.dataset.percent;
  let color = ('color' in chart.dataset) ? chart.dataset.color : "#2F4F4F";
  let size = ('size' in chart.dataset) ? chart.dataset.size : "100";
  let stroke = ('stroke' in chart.dataset) ? chart.dataset.stroke : "1";
  charts[i].innerHTML = createCircleChart(percent, color, size, stroke);
}
$('.rounded-lg').mouseenter(function () {
  let chart = $(this).find('.mkCharts');
  let percent = 0;
  let color = chart.attr('data-color');
  let size = chart.attr('data-size');
  let stroke = chart.attr('data-stroke');
  let percent2 = chart.attr('data-percent');
  chart.html(createCircleChart(percent, color, size, stroke));
  chart.html(createCircleChart(percent2, color, size, stroke));
})
//Team MEmber Hover
$(document).ready(function () {
  $(".team-member").hover(function () {
    $(this).find(".team-nav").addClass("fade");

  }, function () {
    $(".team-member").find(".team-nav").removeClass("fade");
  });
});
//owl carousel about page
$(document).ready(function () {
  $('.owl-reviews').owlCarousel({
    loop: true,
    margin: 15,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      992: {
        items: 3
      },
      1250: {
        items: 4
      }
    }
  })
});
$(".hidden-div").hide(),
  $(".load-more").click(function () {
    $(".load-more").text(""),
      $(".load-more").css({
        background: "white url('../images/image-loader.gif') no-repeat center",
        "background-size": "contain",
        padding: "23px 67px",
        border: "1px solid var(--site-color)"
      }),
      setTimeout(function () {
        $(".hidden-div").fadeIn("slow"), $(".load-more").closest(".button-column").remove();
      }, 1e3);
  }),

  // Counter1
  window.count1 = false;
if ($('#count1').length > 0) {
  $(window).on('scroll', function () {
    if (window.count1 == false) {
      var winT = $(window).scrollTop(),
        winH = $(window).height(),
        countT = $('#count1').offset().top;
      countH = $('#count1').height();
      if (winT + winH > countT && winT + winH < countT + countH) {
        $('#count1').find('.counter').each(function () {
          var $this = $(this),
            countTo = $this.attr('data-count');

          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {

              duration: 3000,
              easing: 'linear',
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum + " +");
              }

            });
        });

        window.count1 = true;
      }
    }
  });
}

//counter2
window.count2 = false;
if ($('#count2').length > 0) {
  $(window).on('scroll', function () {
    if (window.count2 == false) {
      var winT = $(window).scrollTop(),
        winH = $(window).height(),
        countT = $('#count2').offset().top;
      countH = $('#count2').height();
      if (winT + winH > countT && winT + winH < countT + countH) {
        //

        $('#count2').find('.counter').each(function () {
          var $this = $(this),
            countTo = $this.attr('data-count');

          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {

              duration: 3000,
              easing: 'linear',
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum + " +");

              }

            });
        });

        window.count2 = true;
      }
    }
  });
}

// Youtube Video Loader on service page
var businessVideo = window.location.pathname.split('/')[1];
if (businessVideo === "service.php") {
  $(document).ready(function () {
    // START Fast & Agile YouTube Embed by Schoberg.net
    $(".youtube").each(function () {
      // Set the BG image from the youtube ID
      $(this).css('background-image', 'url(../images/How-to-Grow-A-Business-Online.jpg)');
      // Click the video div
      $(document).delegate('#' + this.id, 'click', function () {
        // Build embed URL
        var iframe_url = "//www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
        // Grab extra parameters set on div
        if ($(this).data('params')) iframe_url += '&' + $(this).data('params');
        // Build iframe tag
        var iframe = $('<iframe/>', {
          'allowfullscreen': 'allowfullscreen',
          'frameborder': '0',
          'src': iframe_url,
          'allow': 'autoplay'
        })
        // Replace the YouTube thumbnail with YouTube HTML5 Player
        $(this).append(iframe);
      }); // /click
    }); // /each video
    // END Fast & Agile YouTube Embed
  }); // /document ready
}
jQuery('.smooth-goto').on('click', function () {
  $('html, body').animate({
    scrollTop: $(this.hash).offset().top - 80
  }, 500);
  //  return false;
});
var loc = window.location.href,
  index = loc.substring(loc.indexOf('#') + 1);
var ln = loc.indexOf('#');
if (ln > 0) {
  $('html, body').animate({
    scrollTop: $("#" + index).offset().top - 100
  }, 500);
}
//	$('p').each(function () {
//	  var $this = $(this);
//	  if ($this.html().replace(/\s|&nbsp;/g, '').trim() == "")
//	    $this.remove();
//	});

//Add Facebook Chat
function addMsgChat() {
  if ($("#facebook-jssdk").length == 0) {
    window.fbAsyncInit = function () {
      FB.init({
        xfbml: true,
        version: 'v10.0'
      });
    };
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  }
}
setTimeout(addMsgChat, 5500);
//facebook Comment Section for blog detail pages
var fbComment = window.location.pathname.split('/')[1];
if (fbComment === "/blog-detail.php") {
  function loadPlugin() {
    var s = document.createElement("script");
    s.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0", document.getElementById("fb-commentbox").appendChild(s)
  }
  setTimeout(loadPlugin, 9e3);
}

//footer Dgaps fb page
showLoader();
/*===DGaps Page Loading==*/
$(window).scroll(function (e) {
  if ($(window).scrollTop() > $("#sectionsocial").offset().top - 500) {
    showPage();
    window.onload = function () {
      FB.Event.subscribe('xfbml.render', function (response) {
        hideLoader();
      });
    };
    $(this).off(e);
  }
});

function showPage() {
  var script = document.createElement("script");
  script.setAttribute("src", "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0");
  async = document.createAttribute("async");
  defer = document.createAttribute("defer");
  script.setAttributeNode(async);
  script.setAttributeNode(defer);
  script.setAttribute("nonce", "rlfZ5ZvV");
  script.setAttribute("crossorigin", "anonymous");
  document.getElementsByClassName("facebook-page")[0].appendChild(script);
  document.getElementsByClassName("fb-page")[0].style.height = "auto";
  document.getElementsByClassName("fb-page")[0].style.textAlign = "center !important";
}

function showLoader() {
  $(".fb-page").css({
    "height": "450px",
    "background": "white url('../images/image-loader.gif') no-repeat center center"
  });
}

function hideLoader() {
  $(".fb-page").css({
    "height": "auto",
    "background": "transparent"
  });
}
//twitter
function loadTWPlugin() {
  var s = document.createElement("script");
  async = document.createAttribute("async");
  s.setAttributeNode(async);
  s.src = "https://platform.twitter.com/widgets.js", document.getElementById("tw-tweet").appendChild(s);
}
setTimeout(loadTWPlugin, 2500);
//Resize Facebook feed
//$(window).on('resize', function () {
//  setTimeout(function () {
//    changeFBPagePlugin()
//  }, 500);
//});
//
//$(window).on('load', function () {
//  setTimeout(function () {
//    changeFBPagePlugin()
//  }, 1500);
//});

//changeFBPagePlugin = function () {
//  var container_width = Number($('.facebook-page').width()).toFixed(0);
//  var container_height = Number($('.facebook-page').height()).toFixed(0);
//  if (!isNaN(container_width) && !isNaN(container_height)) {
//    $(".fb-page").attr("data-width", container_width).attr("data-height", container_height);
//  }
//  if (typeof FB !== 'undefined') {
//    FB.XFBML.parse();
//  }
//};

//	Add This Load
window.onload = function () {
  setTimeout(function () {
    var js = document.createElement('script');
    js.src = '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60af95bbf773279f';
    document.getElementById("add-this").appendChild(js);
    js.setAttribute("data-url", "");
  }, 3500);
};

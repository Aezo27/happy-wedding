$(document).ready(function () {
  if (history.scrollRestoration) {
    history.scrollRestoration = "manual";
  }
  var url_string = location.href;
  var url = new URL(url_string);
  var nama = url.searchParams.get("nama");
  console.log(nama);
  if (nama != null && nama != "") {
    $("#undangan").html(nama);
  }
  $("#btt").on("click", function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      1000
    );
    setTimeout(() => {
        if (window.innerWidth > 991) {
          fullpage_api.setAllowScrolling(true);
        }
    }, 1001);
  });
  // fullpage
  const btnFloat = $("#btt");
  const btnFloatOri = $(".btn-down");
  if ($("#fullpage") !== null) {
    if (window.innerWidth > 991) {
      new fullpage("#fullpage", {
        licenseKey: "LAJ26-1IJ3I-K7106-V7HE8-SNPOO",
        // scrollHorizontallyKey: "bE1iMlJoYldFdWFXOD01dl9qQ01jMk55YjJ4c1NHOXlhWHB2Ym5SaGJHeDV2YnI=",
        // scrollHorizontally: true,
        responsiveWidth: 993,
        scrollingSpeed: 1000,
        scrollBar: true,
        autoScrolling: true,
        scrollOverflow: false,
        onLeave: function (origin, destination, direction, trigger) {
          if (origin.index == 2 && direction == "down") {
            btnFloat.css("display", "block");
            btnFloatOri.addClass("active");
            fullpage_api.setAllowScrolling(false);
            setTimeout(() => {
              btnFloat.addClass("active");
              setTimeout(() => {
                btnFloat.children().addClass("active");
              }, 100);
            }, 50);
            setTimeout(() => {
              $("#gallery").addClass("pinned");
              startSlide();
            }, 1000);
          }
          if (origin.index == 3 && direction == "up") {
            setTimeout(() => {
              btnFloat.children().removeClass("active");
              btnFloat.removeClass("active");
              setTimeout(() => {
                btnFloatOri.removeClass("active");
                btnFloat.css("display", "none");
              }, 200);
            }, 450);
            setTimeout(() => {
              $("#gallery").removeClass("pinned");
              // $(".text-slide").removeClass("active");
              $(".text-slide").removeClass("active");
            }, 1000);
          }
          if (origin.index == 3 && direction == "down") {
            setTimeout(() => {
              $("#gallery").removeClass("pinned");
              $(".text-slide").removeClass("active");
            }, 1000);
          }
          if (origin.index == 4 && direction == "up") {
            fullpage_api.setAllowScrolling(false);
            setTimeout(() => {
              $("#gallery").addClass("pinned");
            }, 1000);
          }
        },
      });
    }
  }
  function startSlide() {
    console.log("start slide");
    window.addEventListener("wheel", function (event) {
      if (
        $("#gallery").hasClass("pinned") &&
        $("#gallery").hasClass("active")
      ) {
        event.stopPropagation();
        if (window.innerWidth > 991) {
          if (event.deltaY < 0) {
            console.log("scrolling up");
            $(".text-slide").removeClass("active");
            if (!$(".text-slide").hasClass("active")) {
              setTimeout(() => {
                fullpage_api.setAllowScrolling(true);
              }, 1000);
            } else {
            }
          } else if (event.deltaY > 0) {
            console.log("scrolling down");
            $(".text-slide").addClass("active");
            if ($(".text-slide").hasClass("active")) {
              setTimeout(() => {
                fullpage_api.setAllowScrolling(true);
              }, 1000);
            }
          }
        }
      }
    });
  }
  let offset;
  const wish = $("#wish");
  function doSlide() {
    if (wish.length > 0) {
      if (wish.offset().top + 100 < offset) {
        wish.find(".wish-grid-item").addClass("active");
      }
    }
  }
  $(window).on("scroll", function () {
    if (window.innerWidth < 768) {
      if ($(window).scrollTop() > 1) {
        $(".navbar").addClass("sticky");
      } else {
        $(".navbar").removeClass("sticky");
      }
      if ($(window).scrollTop() > 2500) {
        btnFloat.addClass("active");
        btnFloat.children().addClass("active");
        setTimeout(() => {
          btnFloat.css("display", "block");
        }, 100);
      } else {
        btnFloat.css("display", "none");
        setTimeout(() => {
          btnFloat.removeClass("active");
          btnFloat.children().removeClass("active");
        }, 100);
      }
    }
    offset = $(window).scrollTop() + $(window).height();
    doSlide();
  });
  if (window.innerWidth > 991) {
    $(".map-wrapper").mousemove(function (e) {
      const parent = $(this);
      setTimeout(function () {
        $(".cursor-wrapper")
          .eq(0)
          .css({
            left: e.pageX - parent.offset().left,
            top: e.pageY - parent.offset().top,
          });
      }, 100);
    });
  }
  if (typeof fullpage_api !== "undefined") {
    fullpage_api.setAllowScrolling(false);
    setTimeout(() => {
      fullpage_api.setAllowScrolling(true);
      $("body").removeClass("menu-open");
    }, 5000);
  } else {
    setTimeout(() => {
      $("body").removeClass("menu-open");
    }, 5000);
  }

  $("#story-btn").on("click", () => {
    if (window.innerWidth > 991) {
      btnFloat.css("display", "block");
      btnFloatOri.addClass("active");
      fullpage_api.setAllowScrolling(false);
      setTimeout(() => {
        btnFloat.addClass("active");
        setTimeout(() => {
          btnFloat.children().addClass("active");
        }, 100);
      }, 50);
    }
  });
});

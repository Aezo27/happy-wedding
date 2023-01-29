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
    $("html, body").animate({ scrollTop: 0 }, 1000);
  });
  // fullpage
  const btnFloat = $("#btt");
  const btnFloatOri = $(".btn-down");
  if ($("#fullpage") !== null) {
    if (window.innerWidth > 991) {
      new fullpage("#fullpage", {
        licenseKey: "B9KBJ-QX946-K90AH-0VAJ9-LEXLN",
        scrollHorizontallyKey:
          "bE1iMlJoYldFdWFXOD01dl9qQ01jMk55YjJ4c1NHOXlhWHB2Ym5SaGJHeDV2YnI=",
        scrollHorizontally: true,
        responsiveWidth: 993,
        scrollingSpeed: 1000,
        scrollBar: true,
        autoScrolling: true,
        scrollOverflow: false,
        onLeave: function (origin, destination, direction, trigger) {
          if (origin.index == 2 && direction == "down") {
            btnFloat.css("display", "block");
            btnFloatOri.addClass("active");
            setTimeout(() => {
              btnFloat.addClass("active");
              setTimeout(() => {
                btnFloat.children().addClass("active");
              }, 100);
            }, 50);
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
          }
        },
      });
    }
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
      if ($(window).scrollTop() > 2200) {
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
    }, 5000);
  }
});

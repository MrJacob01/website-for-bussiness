(function ($) {
    "use strict";
  
    // WOW animation
    $(window).on("load", function () {
      new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: false,
        live: true
      }).init();
    });
  
    // Template Settings Panel
    $("body").append(`
      <div class="rs-theme-settings-area">
        <div class="rs-theme-wrapper">
          <div class="rs-theme-header text-center">
            <h4 class="rs-theme-header-title">Template Settings</h4>
          </div>
  
          <!-- RTL SETTINGS -->
          <div class="rs-theme-dir">
            <label class="rs-theme-dir-main" for="rs-dir-toggler">
              <span class="rs-theme-dir-rtl">Dark</span>
              <input type="checkbox" id="rs-dir-toggler">
              <i class="rs-theme-dir-slide"></i>
              <span class="rs-theme-dir-ltr">Light</span>
            </label>
          </div>
  
          <div class="rs-theme-settings">
            <div class="rs-theme-settings-wrapper">
              <div class="rs-theme-settings-open">
                <button class="rs-theme-settings-open-btn">
                  <span class="rs-theme-settings-gear"><i class="fa-light fa-gear"></i></span>
                  <span class="rs-theme-settings-close"><i class="fa-regular fa-xmark"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    `);
  
    $(".rs-theme-settings-open-btn").on("click", function () {
      $(".rs-theme-settings-area").toggleClass("settings-opened");
    });
  
    
  
    // Loader
    $(window).on("load", function () {
      $("#pre-load").delay(600).fadeOut(500);
      $(".pre-loader").delay(600).fadeOut(500);
    });
  
    // Footer Year Auto
    const year = document.getElementById("year");
    if (year) {
      year.innerHTML = new Date().getFullYear();
    }
  
    // Offcanvas Controls
    $(".offcanvas-close, .offcanvas-overlay").on("click", function () {
      $(".offcanvas-area, .offcanvas-overlay").removeClass("info-open overlay-open");
    });
  
    $(".sidebar-toggle").on("click", function () {
      $(".offcanvas-area, .offcanvas-overlay").addClass("info-open overlay-open");
    });
  
    $(".body-overlay").on("click", function () {
      $(".offcanvas-area, .body-overlay").removeClass("opened");
    });
  
    // Background Images, Widths, BG Colors
    $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
    });
    $("[data-width]").each(function () {
      $(this).css("width", $(this).attr("data-width"));
    });
    $("[data-bg-color]").each(function () {
      $(this).css("background-color", $(this).attr("data-bg-color"));
    });
  
    // Popup Image
    $(".popup-image").magnificPopup({ type: "image", gallery: { enabled: true } });
  
    // Jarallax Parallax
    jarallax(document.querySelectorAll(".jarallax"), { speed: 0.5 });
  
    // Popup Video
    $(".popup-video").magnificPopup({ type: "iframe" });
  
    // Nice Select
    $("select").niceSelect();
  
    // Pure Counter
    new PureCounter();
    new PureCounter({ filesize: true, selector: ".filesizecount", pulse: 2 });
  
    // Pricing Toggle
    $(".rs-pricing-area").each(function () {
      const yearlyBtn = $(".yearly-plan-btn"),
            monthlyBtn = $(".monthly-plan-btn"),
            monthlyPricing = $(".monthly-pricing"),
            yearlyPricing = $(".yearly-pricing"),
            pricingCheckbox = $(".pricing-checkbox");
  
      monthlyBtn.on("click", function () {
        pricingCheckbox.prop("checked", true);
        $(this).addClass("active").parent(".rs-pricing-tab").siblings().children().removeClass("active");
        monthlyPricing.show();
        yearlyPricing.hide();
      });
  
      yearlyBtn.on("click", function () {
        pricingCheckbox.prop("checked", false);
        $(this).addClass("active").parent(".rs-pricing-tab").siblings().children().removeClass("active");
        monthlyPricing.hide();
        yearlyPricing.show();
      });
    });
  
    // Odometer Counter
    $(".odometer").appear(function () {
      $(".odometer").each(function () {
        const count = $(this).attr("data-count");
        $(this).html(count);
      });
    });
  
    // Sticky Header and Search Toggle
    $(".rs-header-search-icon").on("click", function () {
      $(".rs-stickys-form").slideToggle("show");
      $(this).toggleClass("icon-close");
    });
  
    // Portfolio Tooltip
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll(".rs-portfolio-tooltip .rs-portfolio-tooltip-item").forEach(function (el) {
        el.addEventListener("mousemove", function (e) {
          const tooltip = el.querySelector(".rs-portfolio-tooltip .rs-portfolio-tooltip-content"),
                rect = el.getBoundingClientRect(),
                tooltipRect = tooltip.getBoundingClientRect(),
                left = Math.min(Math.max(e.clientX - rect.left - tooltipRect.width / 2, -200), rect.width - tooltipRect.width + 200),
                top = Math.min(Math.max(e.clientY - rect.top - tooltipRect.height / 2, -200), rect.height - tooltipRect.height + 200);
  
          tooltip.style.left = left + "px";
          tooltip.style.top = top + "px";
        });
      });
    });
  
    // Button Hover Effects
    $(document).ready(function () {
      $(".rs-button-wrapper .rs-btn").mouseenter(function () {
        $(this).find(".rs-icon").css("animation", "btnHoverEffect 0.5s");
      }).mouseleave(function () {
        $(this).find(".rs-icon").css("animation", "btnHoverEffectReverse 0.5s");
      });
  
      // Text Circle Animation
      if ($(".rs-text-circle").length) {
        $(".rs-text-circle").each(function () {
          const text = $(this).text().replace(/\s+/g, " ").trim();
          let newHTML = "";
  
          for (let i = 0; i < text.length; i++) {
            newHTML += "<span>" + text[i] + "</span>";
          }
          $(this).html(newHTML);
  
          const rotateDegree = parseInt($(this).data("rotate-degree"), 10) || 20;
          $(this).find("span").each(function (index) {
            $(this).css("transform", "rotate(" + (index + 1) * rotateDegree + "deg)");
          });
        });
      }
  
      // Swiper Sliders
      $(".rs-swiper .swiper").each(function (index) {
        const swiperEl = $(this),
              hoverPause = swiperEl.data("hover-pause") !== false,
              loop = swiperEl.data("loop") !== false,
              centerMode = swiperEl.data("center-mode") === true,
              autoplay = swiperEl.data("autoplay") !== false,
              direction = swiperEl.data("direction") === "vertical" ? "vertical" : "horizontal",
              effect = swiperEl.data("effect") || "slide",
              grabCursor = swiperEl.data("grab-cursor") === true,
              oneWay = swiperEl.data("one-way") === true,
              startAt = swiperEl.data("start-at") || 0,
              speed = swiperEl.data("speed") || 500,
              slidesPerView = swiperEl.data("item") || 1,
              noGap = swiperEl.data("no-gap") === true ? 0 : 30,
              margin = swiperEl.data("margin") || noGap;
  
        const swiperInstance = new Swiper(this, {
          loop,
          autoplay,
          direction,
          effect,
          grabCursor,
          oneWayMovement: oneWay,
          centeredSlides: centerMode,
          initialSlide: startAt,
          slidesPerView,
          spaceBetween: margin,
          speed,
          pagination: {
            el: `.rs-pagination-${index}`,
            dynamicBullets: true,
            clickable: true
          },
          navigation: {
            nextEl: `.rs-nav-next-${index}`,
            prevEl: `.rs-nav-prev-${index}`
          },
        });
  
        if (hoverPause) {
          swiperEl.on("mouseenter", function () {
            swiperInstance.autoplay.stop();
          }).on("mouseleave", function () {
            swiperInstance.autoplay.start();
          });
        }
      });
  
      // Product Details Slider
      const navSwiper = new Swiper(".product-details-nav", {
        spaceBetween: -20,
        slidesPerView: 4,
        navigation: {
          nextEl: ".product-details-button-next",
          prevEl: ".product-details-button-prev",
        }
      });
  
      new Swiper(".product-details-active", {
        spaceBetween: 0,
        thumbs: { swiper: navSwiper },
        navigation: {
          nextEl: ".product-details-button-next",
          prevEl: ".product-details-button-prev",
        }
      });
    });
  
    // Cart Quantity
    $(".rs-cart-minus").on("click", function () {
      const input = $(this).parent().find("input"),
            count = Math.max(parseInt(input.val(), 10) - 1, 1);
      input.val(count).change();
      return false;
    });
  
    $(".rs-cart-plus").on("click", function () {
      const input = $(this).parent().find("input");
      input.val(parseInt(input.val(), 10) + 1).change();
      return false;
    });
  
    // Remove Row
    $(".removeRow").on("click", function () {
      $(this).closest("tr").remove();
    });
  
    // Checkout Form Reveal
    $(".checkout-login-form-reveal-btn").on("click", function () {
      $("#checkout-coupon").slideToggle(400);
    });
  
    //--------------------------------------
    // Back to Top Button With Scroll Progress
    //--------------------------------------
    const backTopPath = document.querySelector(".backtotop-wrap path");
    const pathLength = backTopPath.getTotalLength();
  
    backTopPath.style.transition = backTopPath.style.WebkitTransition = "none";
    backTopPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
    backTopPath.style.strokeDashoffset = pathLength;
    backTopPath.getBoundingClientRect();
    backTopPath.style.transition = backTopPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";
  
    const updateProgress = () => {
      const scrollTop = $(window).scrollTop();
      const docHeight = $(document).height() - $(window).height();
      const progress = pathLength - (scrollTop * pathLength / docHeight);
      backTopPath.style.strokeDashoffset = progress;
    };
  
    updateProgress();
  
    $(window).scroll(function () {
      updateProgress();
      if ($(this).scrollTop() > 150) {
        $(".backtotop-wrap").addClass("active-progress");
      } else {
        $(".backtotop-wrap").removeClass("active-progress");
      }
  
      if ($(this).scrollTop() > 250) {
        $("#header-sticky").addClass("rs-sticky");
      } else {
        $("#header-sticky").removeClass("rs-sticky");
      }
    });
  
    $(".backtotop-wrap").on("click", function (e) {
      e.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, 550);
    });
  
    //--------------------------------------
  
  })(jQuery);
  
(function ($) {
  function stickyHeader() {
    if ($(window).scrollTop() >= 57) {
      $(".site-header .fixed-top").addClass("scrolled");
    } else {
      $(".site-header .fixed-top").removeClass("scrolled");
    }
  }
  var addClassOnScroll = function () {
    var windowTop = $(window).scrollTop();
    $(".toc-wrap [id]").each(function (index, elem) {
      var offsetTop = $(elem).offset().top - 140;
      var outerHeight = $(this).outerHeight(true);

      if (windowTop > offsetTop - 50 && windowTop < offsetTop + outerHeight) {
        var elemId = $(elem).attr("id");
        $(".elementor-icon-list-item a.active").removeClass("active");
        $(".elementor-icon-list-item a[href='#" + elemId + "']").addClass(
          "active"
        );
      }
    });
  };
  $(window).scroll(function () {
    stickyHeader();
    addClassOnScroll();
  });

  if ($(".elementor-icon-list-items").length) {
    $(".elementor-icon-list-items a").each(function () {
      if (
        $(this).attr("href") ==
          window.location.pathname + window.location.search ||
        $(this).attr("href") == window.location.pathname
      )
        $(this).addClass("active");
    });
  }
  // Smooth scrolling when clicking an anchor link
  $('a[href*="#"]:not([href="#"])').click(function () {
    var offset = -140;
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top + offset,
          },
          1000
        );
        return false;
      }
    }
  });
})(jQuery); // jQuery End

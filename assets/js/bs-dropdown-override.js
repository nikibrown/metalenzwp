const $dropdown = $(".navbar .menu-item-has-children");
const $dropdownToggle = $(".navbar .dropdown-toggle");
const $dropdownMenu = $(".navbar .sub-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 992px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }

});


$(document).ready(function() {

  // init slider
  $(".home-slider").slick({
    dots: true,
    arrows: false
  });

});



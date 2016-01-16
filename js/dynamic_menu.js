/**
 * @file
 * Dynamic Menu JS for News Arrow Theme
 */
(function($, Backdrop, window, document, undefined) {

  $(document).ready(function() {

    jQuery(window).scroll(function() {
      var win = jQuery(this);
      if (win.scrollTop() > 30) {
        $("html.admin-bar header.l-header").css("top", "0px");
      } else {
        $("html.admin-bar header.l-header").css("top", "32px");
      }
    });

  });
})(jQuery, Backdrop, this, this.document);

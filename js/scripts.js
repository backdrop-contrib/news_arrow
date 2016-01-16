/**
 * @file
 * JS for for News Arrow Theme
 */
(function($, Backdrop, window, document, undefined) {

  // Show dropdown on hover.
  Backdrop.behaviors.news_arrow_dropdown = {
    attach: function(context, setting) {
      //your custom action here
    }
  }

  $(document).ready(function() {
    // run Javascript on page load here
    console.log("Welcome to the console");
  });
})(jQuery, Backdrop, this, this.document);

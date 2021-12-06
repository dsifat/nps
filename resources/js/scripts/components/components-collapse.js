/*=========================================================================================
    File Name: components-collapse.js
    ----------------------------------------------------------------------------------------
    - Vuejs, HTML & Laravel Admin Dashboard Template
    
    
==========================================================================================*/
(function(window, document, $) {
  "use strict";

  var accordion = $(".accordion"),
    collapseHoverTitle = $(".collapse-hover-title");

  // To open Collapse on hover
  if (accordion.attr("data-toggle-hover", "true")) {
    collapseHoverTitle.closest(".card").on("mouseenter", function() {
      $(this)
        .children(".collapse")
        .collapse("show");
    });
  }
  // Accordion with Shadow - When Collapse open
  $(".collapse-shadow .card .card-header").on("click", function() {
    var $this = $(this);
    $this
      .parent()
      .siblings(".card.open")
      .removeClass("open");
    $this.parent(".card").toggleClass("open");
  });
})(window, document, jQuery);

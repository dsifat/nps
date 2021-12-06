/*=========================================================================================
    File Name: navs.js
    Description: Navigation available in Bootstrap share general markup and styles, from the base .nav class to the active and disabled states. Swap modifier classes to switch between each style.
    ----------------------------------------------------------------------------------------
    - Vuejs, HTML & Laravel Admin Dashboard Template
    
    
==========================================================================================*/
(function(window, document, $) {
  "use strict";

  var heightLeft = $(".nav-left + .tab-content").height();
  $("ul.nav-left").height(heightLeft);
  var heightRight = $(".nav-right + .tab-content").height();
  $("ul.nav-right").height(heightRight);
})(window, document, jQuery);

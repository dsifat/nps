/*=========================================================================================
    File Name: app-ecommerce-wishlist.js
    Description: Ecommerce wishlist pages js
    ----------------------------------------------------------------------------------------
    - Vuejs, HTML & Laravel Admin Dashboard Template
    
    
==========================================================================================*/

$(function() {
  "use strict";

  var removeItem = $(".remove-wishlist"),
    moveToCart = $(".move-cart");

  // remove items from wishlist page
  removeItem.on("click", function() {
    $(this)
      .closest(".ecommerce-card")
      .remove();
    toastr["error"]("", "Removed Item 🗑️", {
      closeButton: true,
      tapToDismiss: false,
    });
  });

  // move items to cart
  moveToCart.on("click", function() {
    $(this)
      .closest(".ecommerce-card")
      .remove();
    toastr["success"]("", "Moved Item To Your Cart 🛒", {
      closeButton: true,
      tapToDismiss: false,
    });
  });
});

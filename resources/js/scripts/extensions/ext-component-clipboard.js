/*=========================================================================================
    File Name: ext-component-clipboard.js
    Description: Copy to clipboard
    --------------------------------------------------------------------------------------
    - Vuejs, HTML & Laravel Admin Dashboard Template
    
    
==========================================================================================*/

"use strict";

var userText = $("#copy-to-clipboard-input");
var btnCopy = $("#btn-copy");

// copy text on click
btnCopy.on("click", function() {
  userText.select();
  document.execCommand("copy");
  toastr["success"]("", "Copied to clipboard!");
});

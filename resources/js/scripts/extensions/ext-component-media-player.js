/*=========================================================================================
    File Name: ext-component-media-player.js
    Description: Media Plyr Extenstion
    --------------------------------------------------------------------------------------
    - Vuejs, HTML & Laravel Admin Dashboard Template
    
    
==========================================================================================*/

$(function() {
  "use strict";

  // video player  define
  if ($(".video-player")) {
    var player = new Plyr(".video-player", {
      tooltips: {
        controls: true,
      },
    });
  }

  // audio player define
  if ($(".audio-player")) {
    var player1 = new Plyr(".audio-player");
  }
});

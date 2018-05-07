//
$(document).ready(function() {
//Preloader
$(window).on("load", function() {
preloaderFadeOutTime = 5000;
function hidePreloader() {
var preloader = $('.loader');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
});

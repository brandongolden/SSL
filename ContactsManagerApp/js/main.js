$(document).ready(function(){
setTimeout(function(){
$("div.message").fadeOut("slow", function () {
$("div.message").remove();
});

}, 2000);
});
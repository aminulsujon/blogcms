$('.carousel').carousel();
function toggler(divId) {
    $("#" + divId).toggle();
}

$(".navbar-toggler").click(function(){
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});

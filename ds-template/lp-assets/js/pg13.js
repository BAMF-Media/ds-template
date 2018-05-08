$(function () {

    $(".email").on("focus", function () {
        $(".access").addClass("shadow");
    });

    $('.email').blur(function () {
        $(".access").removeClass("shadow");
    });

});

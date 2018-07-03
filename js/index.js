$(document).ready(function () {
    $(".btn-up").click(function () {
        $('html, body').animate({
            scrollTop: $("#top").offset().top
        }, 1500);
        console.log("nav");
    });
});

$(window).scroll(function () {
    if ($(window).scrollTop() > 200) {
        $('.btn-up').addClass('active');
    } else {
        $('.btn-up').removeClass('active');
    }
});

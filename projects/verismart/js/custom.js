var video = document.getElementById("section-one-video"); 

$(".section-one-video-control").click(function() {
    $(".section-one-video-control").fadeOut();
    video.play();
});

$("#section-one-video").click(function() {
    $(".section-one-video-control").fadeIn();
    video.load();
});

$('#section-two-slider').slick({
    speed: 100,
    infinite: true,
    slidesToShow: 1,
    autoplay: true,
    arrows: false,
    adaptiveHeight: false
});

$('#client-list-slider').slick({
    speed: 500,
    infinite: true,
    slidesToShow: 8,
    slidesToScroll: 2,
    autoplay: true,
    arrows: false,
    adaptiveHeight: false
});

$(".slider-left").click(function() {
    $('#section-two-slider').slick('slickPrev');
});

$(".slider-right").click(function() {
    $('#section-two-slider').slick('slickNext');
});


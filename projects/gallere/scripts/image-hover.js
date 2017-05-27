
$('#image-cont').mouseover(function() {

  $('.item-img').css({
  	"padding-top" : "0px",
    "filter" : "grayscale(100%)",
    "-webkit-filter" : "grayscale(100%)",
    "filter" : "gray",
  });
  $('.image-button').css({
  	"height" : "30px",
  });

});


$('#image-cont').mouseout(function() {

  $('.item-img').css({
  	"padding-top" : "30px",
    "filter" : "grayscale(0%)",
    "-webkit-filter" : "grayscale(0%)",
    "filter" : "none",
  });
  $('.image-button').css({
  	"height" : "0px",
  });

});


// For triggering the mobile touch events
$('#image-cont').vmouseover(function() {

  $('.item-img').css({
  	"padding-top" : "0px",
    "filter" : "grayscale(100%)",
    "-webkit-filter" : "grayscale(100%)",
    "filter" : "gray",
  });
  $('.image-button').css({
  	"height" : "30px",
  });

});


$('#image-cont').vmouseout(function() {

  $('.item-img').css({
  	"padding-top" : "30px",
    "filter" : "grayscale(0%)",
    "-webkit-filter" : "grayscale(0%)",
    "filter" : "none",
  });
  $('.image-button').css({
  	"height" : "0px",
  });

});
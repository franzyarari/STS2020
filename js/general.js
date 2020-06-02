// jQuery(document).ready(function() {
// 	jQuery('#slider-home').carousel({
// 	  interval: 3000,
// 	  pause: "hover"
// 	})
// });


$('.carousel_generico').carousel({
  interval: 2000
})
$('.carousel_generico').carousel()

// $('.carousel').carousel({
//   interval: 2000
// })
$('#carousel_generico').on('slide.bs.carousel', function () {
  // do something...
})
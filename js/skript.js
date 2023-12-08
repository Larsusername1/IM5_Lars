//DiaShow

var slideIndex = 0;
var slides = document.getElementsByClassName('mySlides');

function showSlides() {
  var i;


  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }


  slideIndex++;

  // If the slide index is greater than or equal to the number of slides, set it to 0
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }

  slides[slideIndex].style.display = 'block';


  setTimeout(showSlides, 9000);
}

window.onload = function() {
  showSlides();
};


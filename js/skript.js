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

console.log('Hello from script.js');
// Hier wird überprüft, ob das Element mit der ID 'bestellen' vorhanden ist, bevor ein Event Listener hinzugefügt wird
var bestellenButton = document.getElementById('bestellen');
if (bestellenButton) {
  bestellenButton.addEventListener('click', function () {
    // Get the number of CDs entered by the user
    var numberOfCDs = document.getElementById('anzahl_cds').value;

    // Ensure the input is a valid number
    if (isNaN(numberOfCDs) || numberOfCDs < 1 || numberOfCDs > 5) {
      alert('Please enter a valid number of CDs between 1 and 5.');
      return;
    }

    // Calculate the total price (price per CD is 10 CHF)
    var totalPrice = numberOfCDs * 27.35;

    // Display the total price next to the button
    document.getElementById('priceDisplay').textContent = 'Total Price: ' + totalPrice + ' CHF';
  });
}


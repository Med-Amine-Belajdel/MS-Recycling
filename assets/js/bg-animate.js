var images = [ 'assets/js/1.png','assets/js/2.png','assets/js/4.png'];
var intervalTime = 5000;
var currentIndex = 0;

function changeBackground() {
  currentIndex = (currentIndex + 1) % images.length;
  var imageUrl = images[currentIndex];

  // Create a new image element
  var image = new Image();

  // Set the source of the image
  image.src = imageUrl;

  // When the image is loaded, set it as the background image
  image.onload = function() {
    document.getElementById('hero').style.backgroundImage = 'url(' + image.src + ')';
  };
}

setInterval(changeBackground, intervalTime);
function openLocationInMaps() {
  var latitude = 35.8073511788851;
  var longitude = 10.645853935474314;

  var mapsUrl = 'https://www.google.com/maps?q=' + latitude + ',' + longitude;
  window.open(mapsUrl);
}
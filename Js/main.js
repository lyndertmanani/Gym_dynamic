// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("upper-slicky").style.padding = "2px 2px";
  
  } else {
    document.getElementById("upper-slicky").style.padding = "12px 12px";
    document.getElementById("upper-slicky").style.color=="rbga(255,0,0,0,0.5)";
  }
}
//slide show
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("myShow");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  slides[slideIndex-1].style.transition = ".7s";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5500); // Change image every 2 seconds
}
 //responsive
function mobileview() {
  var x = document.getElementById("upper-slicky");
  if (x.className === "upper-nav") {
    x.className += " responsive";
  } else {
    x.className = "upper-nav";
  }
}
//viewer-counter
const countEl = document.getElementById('count');
updateVisitCount();
function updateVisitCount() {
	fetch('https://api.countapi.xyz/update/gym/ericlyndertgym/?amount=1')
	.then(res => res.json())
	.then(res => {
		countEl.innerHTML = res.value;
	})
}
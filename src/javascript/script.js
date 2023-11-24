// Cover Slideshow


let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
//   let slides = document.getElementsByClassName("mySlides");
let slides = document.querySelectorAll(".mySlides")
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";

  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";

  setTimeout(showSlides, 500); // Change image every 2 seconds
}

// Header Contenttoggle


const toggleTag = document.querySelector(".content-toggle");
const toggleTagIcon = toggleTag.querySelector('svg')
const navTag = document.querySelector(".content");


toggleTag.addEventListener("click", function() {
	navTag.classList.toggle("open");
	
	// Check ob Klasse vergeb, um Text und Bild zu ändern
	if (navTag.classList.contains("open")) {	
		toggleTag.style.backgroundImage = "url(images/icons/close.svg)"
		toggleTagIcon.style.transform = 'rotate(0deg)'
	} else {
		toggleTag.style.backgroundImage = ""
		toggleTagIcon.style.transform = ""
	}
});

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
const navTag = document.querySelector(".content");




toggleTag.addEventListener("click", function() {
	navTag.classList.toggle("open");
 

	// Check ob Klasse vergeb, um Text und Bild zu ändern
	if (navTag.classList.contains("open")) {
		toggleTag.style.textDecoration = "line-through"
		toggleTag.style.textDecorationThickness="2px";
		toggleTag.style.backgroundImage = "url(images/icons/close.svg)"

		
	} else {
		toggleTag.style.backgroundImage = ""
		toggleTag.style.textDecoration = ""
	}
});


// Scroll Header
const titleTag = document.querySelector('.page-title')
document.addEventListener("scroll", function () {
	const pixels = window.scrollY;

	if (pixels < 100) {
    titleTag.style.position = "fixed"
		// titleTag.classList.remove("title__onScroll");
	} else {
		// titleTag.classList.add("title__onScroll");
    titleTag.style.position = "absolute"
	}
});


// .disable-scroll{
//   overflow-y: hidden;
// }
// Code language: CSS (css)



// function disable(){
//   document.querySelector('.scrollable').classList.add('disable-scroll');
// }

// function enable(){
//   document.querySelector('.scrollable').classList.remove('disable-scroll');
// }

// document.querySelector('#prevent').addEventListener('click', disable);
// document.querySelector('#allow').addEventListener('click', enable);
// t)

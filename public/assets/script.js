(() => {
  // src/javascript/script.js
  var slideIndex = 0;
  showSlides();
  function showSlides() {
    let i;
    let slides = document.querySelectorAll(".mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 500);
  }
  var toggleTag = document.querySelector(".content-toggle");
  var toggleTagIcon = toggleTag.querySelector("svg");
  var navTag = document.querySelector(".content");
  toggleTag.addEventListener("click", function() {
    navTag.classList.toggle("open");
    if (navTag.classList.contains("open")) {
      toggleTag.style.backgroundImage = "url(images/icons/close.svg)";
      toggleTagIcon.style.transform = "rotate(0deg)";
    } else {
      toggleTag.style.backgroundImage = "";
      toggleTagIcon.style.transform = "";
    }
  });
})();
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsiLi4vLi4vc3JjL2phdmFzY3JpcHQvc2NyaXB0LmpzIl0sCiAgInNvdXJjZXNDb250ZW50IjogWyIvLyBDb3ZlciBTbGlkZXNob3dcblxuXG5sZXQgc2xpZGVJbmRleCA9IDA7XG5zaG93U2xpZGVzKCk7XG5cbmZ1bmN0aW9uIHNob3dTbGlkZXMoKSB7XG4gIGxldCBpO1xuLy8gICBsZXQgc2xpZGVzID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcIm15U2xpZGVzXCIpO1xubGV0IHNsaWRlcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIubXlTbGlkZXNcIilcbiAgZm9yIChpID0gMDsgaSA8IHNsaWRlcy5sZW5ndGg7IGkrKykge1xuICAgIHNsaWRlc1tpXS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG5cbiAgfVxuICBzbGlkZUluZGV4Kys7XG4gIGlmIChzbGlkZUluZGV4ID4gc2xpZGVzLmxlbmd0aCkge3NsaWRlSW5kZXggPSAxfVxuICBzbGlkZXNbc2xpZGVJbmRleC0xXS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xuXG4gIHNldFRpbWVvdXQoc2hvd1NsaWRlcywgNTAwKTsgLy8gQ2hhbmdlIGltYWdlIGV2ZXJ5IDIgc2Vjb25kc1xufVxuXG4vLyBIZWFkZXIgQ29udGVudHRvZ2dsZVxuXG5cbmNvbnN0IHRvZ2dsZVRhZyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuY29udGVudC10b2dnbGVcIik7XG5jb25zdCB0b2dnbGVUYWdJY29uID0gdG9nZ2xlVGFnLnF1ZXJ5U2VsZWN0b3IoJ3N2ZycpXG5jb25zdCBuYXZUYWcgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmNvbnRlbnRcIik7XG5cblxudG9nZ2xlVGFnLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbigpIHtcblx0bmF2VGFnLmNsYXNzTGlzdC50b2dnbGUoXCJvcGVuXCIpO1xuXHRcblx0Ly8gQ2hlY2sgb2IgS2xhc3NlIHZlcmdlYiwgdW0gVGV4dCB1bmQgQmlsZCB6dSBcdTAwRTRuZGVyblxuXHRpZiAobmF2VGFnLmNsYXNzTGlzdC5jb250YWlucyhcIm9wZW5cIikpIHtcdFxuXHRcdHRvZ2dsZVRhZy5zdHlsZS5iYWNrZ3JvdW5kSW1hZ2UgPSBcInVybChpbWFnZXMvaWNvbnMvY2xvc2Uuc3ZnKVwiXG5cdFx0dG9nZ2xlVGFnSWNvbi5zdHlsZS50cmFuc2Zvcm0gPSAncm90YXRlKDBkZWcpJ1xuXHR9IGVsc2Uge1xuXHRcdHRvZ2dsZVRhZy5zdHlsZS5iYWNrZ3JvdW5kSW1hZ2UgPSBcIlwiXG5cdFx0dG9nZ2xlVGFnSWNvbi5zdHlsZS50cmFuc2Zvcm0gPSBcIlwiXG5cdH1cbn0pO1xuIl0sCiAgIm1hcHBpbmdzIjogIjs7QUFHQSxNQUFJLGFBQWE7QUFDakIsYUFBVztBQUVYLFdBQVMsYUFBYTtBQUNwQixRQUFJO0FBRU4sUUFBSSxTQUFTLFNBQVMsaUJBQWlCLFdBQVc7QUFDaEQsU0FBSyxJQUFJLEdBQUcsSUFBSSxPQUFPLFFBQVEsS0FBSztBQUNsQyxhQUFPLENBQUMsRUFBRSxNQUFNLFVBQVU7QUFBQSxJQUU1QjtBQUNBO0FBQ0EsUUFBSSxhQUFhLE9BQU8sUUFBUTtBQUFDLG1CQUFhO0FBQUEsSUFBQztBQUMvQyxXQUFPLGFBQVcsQ0FBQyxFQUFFLE1BQU0sVUFBVTtBQUVyQyxlQUFXLFlBQVksR0FBRztBQUFBLEVBQzVCO0FBS0EsTUFBTSxZQUFZLFNBQVMsY0FBYyxpQkFBaUI7QUFDMUQsTUFBTSxnQkFBZ0IsVUFBVSxjQUFjLEtBQUs7QUFDbkQsTUFBTSxTQUFTLFNBQVMsY0FBYyxVQUFVO0FBR2hELFlBQVUsaUJBQWlCLFNBQVMsV0FBVztBQUM5QyxXQUFPLFVBQVUsT0FBTyxNQUFNO0FBRzlCLFFBQUksT0FBTyxVQUFVLFNBQVMsTUFBTSxHQUFHO0FBQ3RDLGdCQUFVLE1BQU0sa0JBQWtCO0FBQ2xDLG9CQUFjLE1BQU0sWUFBWTtBQUFBLElBQ2pDLE9BQU87QUFDTixnQkFBVSxNQUFNLGtCQUFrQjtBQUNsQyxvQkFBYyxNQUFNLFlBQVk7QUFBQSxJQUNqQztBQUFBLEVBQ0QsQ0FBQzsiLAogICJuYW1lcyI6IFtdCn0K

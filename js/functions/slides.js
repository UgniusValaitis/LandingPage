let slideId = 0;

const slides = document.querySelectorAll("div.slideShow div.slide");

slideShow(slideId);

function slideShow(n) {
  if (n > slides.length) {
    slideId = 1;
  }
  if (n < 1) {
    slideId = slides.length;
  }
  slides.forEach(function (slide) {
    slide.style.display = "none";
  });

  slides[slideId - 1].style.display = "block";
}

let timer;
//switching slides
function plusSlide(n) {
  slideShow((slideId += n));
  clearTimeout(timer);
  timer = setTimeout(auto, 7000);
}
//auto run
auto();
function auto() {
  slideId++;
  slideShow(slideId);
  timer = setTimeout(auto, 7000);
}

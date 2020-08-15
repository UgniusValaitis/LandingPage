const navBtn = document.querySelector("header button.navBtn");

const mainNav = document.querySelector("header div.mainNavPhone");

// navBar opening
navBtn.addEventListener("click", navShow);

function navShow(e) {
  e.preventDefault;
  mainNav.classList.toggle("show");
}

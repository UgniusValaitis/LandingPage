const body = document.querySelector("body");

body.addEventListener("click", sub);

function sub(e) {
  if (e.target.classList.contains("delBtn")) {
    let con = confirm("Ištrinti?");
    if (con == true) {
    } else {
      e.preventDefault();
    }
  }
}

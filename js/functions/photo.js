const click = document.querySelector("div.galleryBody");

click.addEventListener("click", photoFullScreen);

function photoFullScreen(e) {
  if (e.target.classList.contains("photo")) {
    const place = document.querySelector("body");
    place.className = "overflow";
    const div = e.target.parentElement;
    const photo = div.cloneNode(true);
    photo.className = "fullScreen";
    photo.querySelector("img").className = "photoFS";
    const exitBtn = document.createElement("button");
    exitBtn.className = "exitBtn";
    exitBtn.appendChild(document.createTextNode("X"));
    photo.appendChild(exitBtn);
    place.appendChild(photo);
  }
}
const place = document.querySelector("body");
place.addEventListener("click", exit);

function exit(e) {
  if (e.target.classList.contains("fullScreen")) {
    const div = document.querySelector("body div.fullScreen");
    place.removeChild(div);
    place.className = "";
  }
  if (e.target.classList.contains("exitBtn")) {
    const div = document.querySelector("body div.fullScreen");
    place.removeChild(div);
    place.className = "";
  }
}

const filtras = document.querySelector("select#filtras");

filtras.addEventListener("click", filter);

function filter(e) {
  const value = document.forms[0].elements[0].value;
  if (value == "visi") {
    const gallery = document.querySelectorAll("div.galBody");
    gallery.forEach((gall) => gall.classList.remove("disNone"));
  } else {
    const gallery = document.querySelectorAll("div.galBody");
    gallery.forEach((gall) => gall.classList.add("disNone"));
    document.getElementById(`${value}`).classList.remove("disNone");
  }
}

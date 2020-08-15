const calculate = document.querySelector("form");

let deploy = document.querySelector("section.pricesPage div.calcUl ul");
//
// euro sign

//
// calculator
calculate.addEventListener("submit", calc);

function calc(e) {
  e.preventDefault();
  let num1 = document.forms[0][0].value;
  let num2 = document.forms[0][1].value;
  let num = document.forms[0][2].value;

  let sum = num1 * num + num2 * num;

  let name1 = document.forms[0][0].selectedOptions[0].innerText;
  let name2 = document.forms[0][1].selectedOptions[0].innerText;

  let calcText = `${name1} | ${name2} ${num} KV/M`;

  //   creating li
  let li = document.createElement("li");
  li.value = sum;
  li.appendChild(document.createTextNode(calcText));

  // price to li
  let price = document.createElement("span");
  price.appendChild(document.createTextNode(sum));
  let euro = document.createElement("i");
  euro.className = "fas fa-euro-sign";
  price.appendChild(euro);

  // delete to li
  let deleteBtn = document.createElement("button");
  deleteBtn.className = "delete";
  deleteBtn.appendChild(document.createTextNode("x"));

  price.appendChild(deleteBtn);

  li.appendChild(price);
  deploy.appendChild(li);

  total();
}

// delete price
deploy.addEventListener("click", deletePrice);

function deletePrice(e) {
  if (e.target.classList.contains("delete")) {
    let del = e.target.parentElement.parentElement;
    deploy.removeChild(del);
    total();
  }
}

// total sum

function total() {
  let allLis = document.querySelectorAll("section.pricesPage div.calcUl li");

  let allPrices = Array.from(allLis).map(function (all) {
    return all.value;
  });

  let tot = allPrices.reduce(add, 0);
  function add(a, b) {
    return a + b;
  }
  // same adding
  //   let tot = 0;
  //   for (let i in allPrices) {
  //     tot += allPrices[i];
  //   }
  let totBar = document.querySelector("section.pricesPage div.total");

  let totChild = document.createElement("h3");
  totChild.appendChild(document.createTextNode(`Total:   ${tot}`));
  let euro = document.createElement("i");
  euro.className = "fas fa-euro-sign";
  totChild.appendChild(euro);
  let currentChild = document.querySelector("section.pricesPage div.total h3");
  totBar.replaceChild(totChild, currentChild);

  if (tot === 0) {
    totChild.style.display = "none";
  } else {
    totChild.style.display = "block";
  }
}

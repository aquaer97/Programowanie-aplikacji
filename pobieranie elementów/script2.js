// odwołanie do id pusty
const zm1 = document.getElementById("pusty");
console.log(zm1);

// odwołanie do linków v1
const zm2 = document.getElementsByTagName("a");
console.log(zm2);

// odwołanie do linków v2
const zm3 = document.querySelectorAll("a");
console.log(zm3);

// odwołanie do <span>
const zm4 = document.querySelectorAll("span");
console.log(zm4);

// odwołanie do <span> w <div>
const zm5 = document.querySelector("div span");
console.log(zm5);

// odwołanie do <li>
const zm6 = document.querySelectorAll("li");
console.log(zm6);

// odwołanie do <li> w <ul>
const zm7 = document.querySelectorAll("ul li");
console.log(zm7);

// odwołanie do elementu z klasą v1
const zm8 = document.getElementsByClassName("test2");
console.log(zm8);

// odwołanie do elementu z klasą v2
const zm9 = document.querySelectorAll(".test2");
console.log(zm9);

// odwołanie do <img>
const zm10 = document.getElementsByTagName("img");
console.log(zm10);

// odwołanie do foto2
const zm11 = document.querySelector("p img");
console.log(zm11);

// odwołanie do pustego w zm1
// tworzę w nim span
const span = document.createElement("span");
// korzystam z hierarchii (dziedziczenia) na stronie i dodaję span jako dziecko div
zm1.appendChild(span);
zm1.appendChild(span).textContent = "To jest koniec zadania.";

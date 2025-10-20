const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const btn3 = document.querySelector(".btn3");
const all = document.querySelectorAll(".btn");

// funkcje
const f1 = () => {
	console.log("btn1 clicked");
};

const f2 = () => {
	console.log("btn2 hovered");
};

const f3 = () => {
	console.log("btn3 doubleclicked");
};

// funkcja przechowująca 3 przyciski
const f4 = () => {
	console.log("Chwała Wielkiej Polsce");
};

// dodaję listener
btn1.addEventListener("click", f1);
btn2.addEventListener("mouseover", f2);
btn3.addEventListener("dblclick", f3);
all.forEach((btn) => addEventListener("click", f4));

const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const square = document.querySelector(".square");
const p1 = document.querySelector(".p1");
const p2 = document.querySelector(".p2");

// funkcja 1 ma zwracać w console.log wyraz "cześć"
const f1 = () => {
	console.log("cześć");
};

// funkcja 2 zmiana koloru kwadratu na czerwony po najechaniu myszką
const f2 = () => {
	square.style.backgroundColor = "red";
};

// funkcja 3 zmiana koloru kwadratu na żółty po odjechaniu myszką
const f3 = () => {
	square.style.backgroundColor = "yellow";
};

// funkcja 4 zmiana widoczności paragrafu w zależności od stanu (toggle)
const f4 = () => {
	p1.classList.toggle("show");
	p2.classList.toggle("show");
};

// dodanie listenerów do funkcji
btn1.addEventListener("click", f1);
square.addEventListener("mouseenter", f2);
square.addEventListener("mouseleave", f3);
btn2.addEventListener("click", f4);

const sizeUp = document.querySelector(".sizeUp");
const sizeDown = document.querySelector(".sizeDown");
const colorBtn = document.querySelector(".color");
const p = document.querySelector("p");

let fontSize = 30;

// funkcja zwiększająca tekst (skokowa co 5px)
const upper = () => {
	if (fontSize >= 90) {
		return;
	}
	p.style.fontSize = fontSize + "px";
	fontSize += 5;
};

// funkcja zmniejszająca tekst
const lower = () => {
	if (fontSize <= 12) {
		return;
	}
	fontSize -= 5;
	p.style.fontSize = fontSize + "px";
};

// funckja zmieniająca kolor
const colorChange = () => {
	const r = Math.floor(Math.random() * 255);
	const g = Math.floor(Math.random() * 255);
	const b = Math.floor(Math.random() * 255);
	p.style.color = `rgb(${r},${b},${b})`;
};

// listenery
sizeUp.addEventListener("click", upper);
sizeDown.addEventListener("click", lower);
colorBtn.addEventListener("click", colorChange);



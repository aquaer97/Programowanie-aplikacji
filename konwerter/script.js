const one = document.querySelector(".one");
const two = document.querySelector(".two");

const converter = document.querySelector("#converter");
const result = document.querySelector(".result");

const convBTN = document.querySelector(".conv");
const resetBTN = document.querySelector(".reset");
const changeBTN = document.querySelector(".change");

// t(F)=t(C)*1.8+32
// t(C)=(t(F)-32)/1.8

let fahr;
let cels;

// funkcja swap zamienia °C na °F i vice versa
// trzeba sprawdzić co jest w span one i na tej podstawie zamienić
const swap = () => {
	if (one.textContent === "°C") {
		one.textContent = "°F";
		two.textContent = "°C";
	} else {
		one.textContent = "°C";
		two.textContent = "°F";
	}
};

// funkcja konwertowania c -> f
const CelsFahr = () => {
	fahr = converter.value * 1.8 + 32;
	result.textContent = `${converter.value}°C wynosi ${fahr.toFixed(1)}°F`;
	converter.value = "";
};

// funkcja konwertująca f -> c
const FahrCels = () => {
	cels = (converter.value - 32) / 1.8;
	result.textContent = `${converter.value}°F wynosi ${cels.toFixed(1)}°C`;
	converter.value = "";
};

// żeby obsługiwać obie funkcje jednym przyciskiem, trzeba dodać nową funkcję
const conversion = () => {
	if (converter.value != "") {
		if (one.textContent === "°C") {
			CelsFahr();
		} else {
			FahrCels();
		}
	} else {
		result.textContent = `musisz wpisac jakas liczbe`;
	}
};

// resetowanie
const resetAll = () => {
	converter.value = "";
	result.textContent = "";
};
// listener
changeBTN.addEventListener("click", swap);
convBTN.addEventListener("click", conversion);
resetBTN.addEventListener("click", resetAll);

function oblicz() {
	const ilosc = document.getElementById("ilosc").value;

	let cenazakg;
	if (ilosc > 0 && ilosc < 3) {
		cenazakg = 2.99;
	} else {
		cenazakg = 2.49;
	}

	const cena = ilosc * cenazakg;
	document.getElementById("wynik").innerHTML = `<br/>Cena za kg: ${cenazakg} zł<br/> Kwota zakupu: ${cena.toFixed(2)}zł`;
}

function oblicz2() {
	const ilosc2 = document.querySelector("#ilosc2").value;
	let cenazakg2;
	if (ilosc2 > 0 && ilosc2 < 5) {
		cenazakg2 = 1.99;
	} else {
		cenazakg2 = 1.49;
	}
	const cena2 = ilosc2 * cenazakg2;
	document.querySelector("#wynik2").innerHTML = `<br/>Cena za kg: ${cenazakg2} zł<br/> Kwota zakupu: ${cena2.toFixed(2)}zł`;
}

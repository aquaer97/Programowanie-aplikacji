// tworzę ul
const ullist = document.createElement("ul");
// dodaję ul do sekcji body
document.body.appendChild(ullist);

for (let i = 1; i <= 10; i++) {
	// tworzę li
	const liitem = document.createElement("li");
	// dopisuję numery do li
	liitem.textContent = i;
	// li jest dzieckiem ul
	ullist.appendChild(liitem);
}
// odwołanie do ostatniego, dziesiątego li
const lastli = ullist.lastChild;
// dopisuję tam jakiś tekst
lastli.textContent = "LISTA MODYFIKOWANA SKRYPTEMMMMMMMM";
lastli.style.backgroundColor = "royalblue";
lastli.style.fontSize = "30px";
lastli.style.padding = "100px 200px;";
lastli.style.fontFamily = "Comic Sans MS";
lastli.style.listStyle = "square";

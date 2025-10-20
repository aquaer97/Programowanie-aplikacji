// tworzę ul listy

const ullist = document.createElement("ul");
const liitem = document.createElement("li");

// dodaję listę do sekcji body

document.body.appendChild(ullist);

// dodaję tekst do li

liitem.textContent = "to jest podpunkt listy";
ullist.appendChild(liitem);

const div = document.createElement("div");
const p = document.createElement("p");
const h2 = document.createElement("h2");

// p umieszczane w divie

div.appendChild(p);
div.appendChild(h2);
// div.append("nigeryjski książę");

div.append(p, h2, "teraz działa");
// dodaje tekst do p

p.textContent = "to jest akapit";
h2.textContent = "to jest nagłówek";
document.body.appendChild(div);

// usuwanie elementów
// removeChild dla p ktore jest dzieckiem
// div.removeChild(p)

// document.body.remove(div);

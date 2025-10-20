/* SKŁADNIA OBIEKTU
 const nameObj={
    key:value,
    key:value,
    key:value,
 }
    
każdy obiekt składa się z pary klucz:wartość
*/
const User = {
	name: "Adam",
	age: "25",
};
console.log(User); // zwróci parę klucz wartość
console.log(User.name); // zwróci samo Adam

// pętla for in
for (let klucz in User) {
	console.log(klucz + ":" + User[klucz]);
}

// obiekt w obiekcie
const newUser = {
	name: "Adam",
	age: 25,
	car: {
		brand: "LADA",
		model: "2107",
		color: "czerwony",
	},
};
console.log(newUser.car);
console.log(newUser.car.model);

// <Adam> jeździ <kolor> samochodem marki <LADA>

console.log(`${newUser.name} jeździ ${newUser.car.color}m samochodem marki ${newUser.car.brand}.`);

const newUser2 = {
	name: "Ewa",
	age: 18,
	car: {
		brand: "Renault",
		model: "Twingo",
		color: "srebrny",
		sound: function () {
			console.log("brrrrrrrrr");
		},
	},
};

newUser2.car.sound();
const Person = {
	nick: "Bolo",
	age: 19,
};
Person.country = "Poland";
Person["fav-color"] = "blue";
console.log(Person);

// utworzenie dwóch zmiennych, przypisanie im wartości i użycie ich w obiekcie

const dogName = "Dolar";
const dogAge = 13;

const Dog = {
	name: dogName,
	age: dogAge,
};
console.log(Dog);

// użycie this
const She = {
	info: "NIGGGER!!!!!!!!!!",
	showInfo: function () {
		console.log(this.info);
	},
};
// wywołanie funkcji
She.showInfo();

const Szkola = {
	nazwa: "ZSPM",
	typ: "Technikum nr 18",
	klasa: {
		profil: "technik informatyk",
		poziom: "4c",
		showInfo: function () {
			console.log(this.profil + " " + this.poziom);
		},
	},
};

Szkola.klasa.showInfo();
Szkola.miejscowosc = "Katowice";
Szkola["dyrektor_szkoly"] = "Karol Juraszczyk";
console.log(Szkola);

// Jestem uczniem <typ szkoly> w miejscowości <miejsce> chodzę do klasy <poziom>

console.log(`Jestem uczniem ${Szkola.typ} w mieście ${Szkola.miejscowosc}, chodzę do klasy ${Szkola.klasa.poziom}.`);

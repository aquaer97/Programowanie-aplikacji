// getElementById() - odwołanie do konkretnego ID

let test1 = document.getElementById("cos");
console.log(test1);

// getElementsByTagName() - odwołanie do znacznika HTML (kolekcja HTML)

let test2 = document.getElementsByTagName("li");
console.log(test2);

// getElementsByClassName() - odwołanie do wszystkich elementów z klasą

let test3 = document.getElementsByClassName("test");
console.log(test3);

// ------------------------------------------------------------------------------

// querySelector() - odwołanie do jednego elementu, pierwszego na który trafi

// odwołanie do elementu z ID

let test4 = document.querySelector("#cos");
console.log(test4);

//odwołanie do ul

let ulList = document.querySelector("ul");
console.log(ulList);

// querySelectorAll() - odwołanie do wszystkich

let test5 = document.querySelectorAll("li");
console.log(test5);

// żywe kolekcje - dynamiczne dodawanie elementów na stronę z poziomu JavaScripta

// tworzę nowe li

let newLi = document.createElement("li");

// dodaję newLi do ulList

ulList.appendChild(newLi).textContent = "Ten element został dodany do listy z poziomu skryptu JS.";

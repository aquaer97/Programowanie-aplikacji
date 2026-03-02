<?php
// ćwiczenie 1
// zauważ że funkcja nie ma dostępu do zmiennej, bo jest przed funkcją, co czyni ją globalną

// $z1=15;
// function pokaz(){
//     echo "Wartość zmiennej \$z1 wynosi $z1 <br/>";
// }

// pokaz();

// ćwiczenie 2
// Zmienna jest lokalna, więc funkcja ma do niej dostęp
function pokaz2(){
    $z1=15;
    echo "Wartość zmiennej \$z1 wynosi $z1 <br/>";
}
pokaz2();

// ćwiczenie 3
// Przed zdefiniowaniem funkcji przypisz zmiennej dowolną wartość liczbową 
// Jeśli zmienna została zdefiniowana przed funkcją i musimy się do niej odwołać wewnątrz funkcji, nalezy wykorzystać instrukcję (słowo kluczowe) global. PRzed odwołaniem do zmiennej należy zapisać global $nazwa_zmiennej;

$z1=12;
function pokaz3(){
    global $z1;
    echo "Wartość zmiennej \$z1 wynosi $z1 <br/>";
}
pokaz3();

// ćwiczenie 4 
// Zmienna jest lokalna, więc jej wartość nie wyświetli się → echo nie ma do niej dostępu - jest poza funkcją
function tekst(){
    $txt="Chwała Wielkiej Polsce";
}
echo $txt;
tekst();

// ćwiczenie 5
// Zmienna lokalna, funkcja ma do niej dostęp
function tekst2(){
    $txt="Kocham Polskę";
    echo $txt;
}
tekst2();


?>
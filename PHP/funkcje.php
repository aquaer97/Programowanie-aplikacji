<?php
function hello(){
    echo "Hello World!";
}
hello();
// przykład 2. sumowanie liczb, funkcja z dwoma argumentami

function sumowanie($a, $b){
    $suma = $a + $b;
    echo "suma liczb wynosi: $suma <br>";
}
echo $pauza;
sumowanie(12,10);
sumowanie(5,12);
sumowanie(-12,45);

echo $linia;
// przykład 3. funkcja obliczająca rabat

function rabat($kwota, $procent){
    $obnizka = $kwota - ($kwota * $procent/100);
    echo "$kwota po obniżce wynosi: $obnizka <br>";
}

rabat(100,10);
rabat(2000, 44);
echo $linia;


function lancuch($znak, $dl){
    echo "<ol>";
    for($i=0;$i<$dl;$i++){
        echo "<li>$znak </li>";
        }
        echo "</ol>";
}
        
        
lancuch("&", 7);

echo $linia;

function cwiartka($liczba){
    echo $liczba / 4 . '<br>';
}

cwiartka(100);
cwiartka(678);

echo $linia;

function co_piec(){
    for($a=0;$a<=100;$a+=5){
        echo "$a ";
    }
}

co_piec();

?>
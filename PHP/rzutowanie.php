<?php
// rzutowanie polega na zmianie typu zmiennych

// przykład 1
$liczba = 12.75;
echo (int)$liczba;
echo "<br/>";

// przykład 2
$x = 10;
$wynik1=(float)$x;
$wynik2=(string)$x;

echo $wynik1;
echo "<br/>";
echo $wynik2;
echo "<br/>";
echo gettype($wynik1);
echo "<br/>";
echo gettype($wynik2);
echo "<br/>";

// przykład 3
$txt="Ala ma kota";
$rzut=(int)$txt;
echo $rzut;
echo "<br/>";

// przykład 4
$ciag="123abcd456";
echo (int)$ciag; // zwróci tylko 123
echo "<br/>";
echo substr($ciag,3,4); // fragment string
echo "<br/>";

// przykład 5 - użycie funkcji settype()
$a=2.7579;
settype($a,"integer");
echo $a;
echo "<br/>";

$b=15;
settype($b,"float");
echo $b;

?>
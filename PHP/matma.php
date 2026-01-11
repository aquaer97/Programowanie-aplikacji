<?php
$a=15;
$smth="22";
$b=3.75;
$liczby=[444,0,-25,1410,-40,128];

echo gettype($a);
echo "<br/>";
echo gettype($smth);
echo "<br/>";
echo gettype($b);
echo "<br/>";
echo is_float($b);
echo "<br/>";
echo is_numeric($a);
echo "<br/>";
echo isset($x); // nic nie zwraca, bo nie ma takiej zmiennej
echo "<br/>";
var_dump($a);
echo "<br/>";
var_dump($liczby); // zwraca typ i wartość
echo "<br/>";

if((gettype($a))==="double"){
    echo "To jest liczba rzeczywista";
}
else{
    echo "Liczba innego typu niż float/double/zmiennoprzecinkowa/rzeczywista/z kropką";
}

$bezwzgledna1=abs($a);
$bezwzgledna2=abs(-111111);
echo "<br/> wartość bezwgzlędna z $a to $bezwzgledna1";
echo "<br/> wartość bezwzględna $bezwzgledna2";
$pierwiastek2st=sqrt(25);
echo "pierwiastek z 25 to $pierwiastek2st";

$potega=pow(2,5);
echo "<br/> potęgowanie: $potega";

$zaokraglanie=round(1.12555678,2);
$zaokraglanie2=round(0.00598765432,3);
echo "<br/> zaokrąglone liczby:$zaokraglanie, $zaokraglanie2";

$dziel_calk=intdiv(10,3);
echo "<br/> Dzielenie całkowite 10/3 = $dziel_calk";

$e=explode(",","a,b,c");
echo "<br/>eksplozja: $e";
$txt="gżegżółka";
echo substr($txt,0,13);

?>
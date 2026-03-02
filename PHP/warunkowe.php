<?php 
$a=-2;
echo ($a>0) ?"liczba jest dodatnia":"liczba ujemna";

echo "<br/>";

$b=15;
if($b>0){
    echo "dodatnia";
}
else{
    echo "ujemna";
}
echo "<hr/>";

$x=20;
$y=20;
if($x==$y){
    echo "takie same";
}
else if($x>$y){
    echo "$x jest większe od $y";
}
else{
    echo "$y jest większe od $x";
}

echo "<hr/>";

$losK=rand(1,6);
$losM=rand(1,6);

if($losK>$losM){
    echo "kobiety oszukujom";
}
else if($losK==$losM){
    echo "remis";
}
else{
    echo "PLgurom";
}

echo "<hr/>";

$a=1.5;
$b=15;

echo $a==$b;
echo $a<>$b;
echo "<br/>";
$a+=0.5;

echo $a<$b ? "prawda":"$a jest większe od $b";
echo "<hr/>";
$a+=3;
if($a>10 && $a>$b){
    echo "warunki spełnione";
}
else {
    echo "warunki niespełnione";
}

// sprawdzanie typu zmiennej
echo "<br/>";
$a=15;
if(is_float($a)){
    echo "$a to wartość float";
}
else if(is_string($a)){
    echo "$a to wartość string";
}
else if(is_integer($a)){
    echo "$a to wartość integer";
}
else{
    echo "$a to double";
}

echo "<hr/>";
$imie="Monika";
switch($imie){
    case "Agnieszka":
        echo "Witaj Agnieszko";
        break;
    case "Ania":
        echo "Witaj Aniu";
        break;
    case "Kasia":
        echo "Witaj Kasiu";
        break;
    default:
        echo "Witaj nieznajomy/-a.";
}
echo "<hr/>";

// Sprawdzanie długości hasła

$pass="IhateZSPM";
if(strlen($pass)<=5){
    echo "za krótkie hasło";
}
else if(strlen($pass)>5 && ($pass<=8)){
    echo "dobre hasło";
}
else{
    echo "świetne hasło";
};
?>
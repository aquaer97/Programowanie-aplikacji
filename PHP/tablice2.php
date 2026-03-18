<?php
//tablice z recznymi ind
$tab[0]="tekst0";
$tab[1]="tekst1";
$tab[2]="tekst2";

print_r($tab[1]);
echo  "<br>";
var_dump($tab);

//TAB z roznymi typami danych
echo "<br>";
$mix=[15.75,"lekcja",-45,true];
$mix2=array(54,-7,"php",false);
//odwołanie do danej 
echo $mix[3];
echo "<br>";
echo $mix2[2];
echo "<br>";
//rok
$numbers=[2,0,2,6];
foreach($numbers as $r){
    echo $r;
}
echo "<br>";
//sortowanie
$imie=['Kuba','Zuza','Kasia','Filip','Iga','Adam'];
//print_r($imie);
echo ' <b> tablica wyjsciowa:</b>';

foreach($imie as $im){
    echo"$im ";
}
sort($imie);
echo "<br><b> tablica w porzadku:</b> ";
foreach($imie as $im){
    echo "$im ";
}
echo "<br>";
//liczby
$liczby=[-12,7,0,65,43,2,7,16,-5];
$min=min($liczby);
$max=max($liczby);
echo "najmniejsza wartosc: $min";
echo "<br>";
echo "najwieksza wartosc: $max";
//roznice
$r=$min-$max;
echo "<br>roznica $r ";
echo "<br> ilosc elementow wynosi ".count($liczby);

echo '<br><hr>';
// oblicz średnią wartość z $liczby
$ilosc = count($liczby);
$suma =0;
for($i=0;$i<$ilosc;$i++){
    $suma += $liczby[$i];
    
}
echo $suma . '<br>';
$srednia = round(($suma / $ilosc), 2);
echo "Średnia wartość z tablicy \$liczby wynosi $srednia";
echo '<hr>';

// tablica w tablicy

$osoby[0]=array("imie"=>"kasia", "wiek"=>25);
$osoby[1]=array("imie"=>"anita", "wiek"=>32);
$osoby[2]=array("imie"=>"anna", "wiek"=>28);

print_r($osoby[2]['imie']);

$capitals=array('warszawa','paryż',"rzym",'madryt',array("waszyngton",'tokio','ottawa','kair'));

echo "<pre>";
print_r($capitals);
echo "</pre> <br>";
// odwołanie do miasta tokio

print_r($capitals[4]['1']);

echo '<hr>';

$matma = array(
    'zbiory' => array('działania', 'relacje', 'przediały'),
    'funkcje' => array('liniowa', 'kwadratowa','wymierna','potęgowa'),
    'geometria' => array('płaska','analityczna', 'stereometria')
);

echo "<pre>";
print_r($matma);
echo "</pre>";




?>
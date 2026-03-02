<?php 
// tablice z ręcznie wpisanymi indexami
$tab[0]="tekst0";
$tab[1]="teksst1";
$tab[2]="tekst2";

print_r($tab[1]);
echo "<br/>";
var_dump($tab);

// tablica z różnymi typami danych
$mix1=[15.7,'lekcja',-45,true];
$mix2=array(54,-7,"php",false);
// odwołania do poszczególnych indexów
echo "<br/>";
echo $mix1[3];
echo "<br/>";
echo $mix2[2];
echo "<br/>";
// pętla po tablicy - zwróci rok
$numbers=[2,0,2,6];
foreach($numbers as $r){
// pod zmienną $r kryje się każda pojedyncza wartość w tablicy
echo "$r";
}
echo "<br/>";
// sortowanie
$imiona=['Jan','Ewa',"Adam","Piotr",'Jeffrey'];
print_r($imiona);
echo "<br/> <b>Tablica wyjściowa: </b><br/>";

foreach($imiona as $im){
    echo "$im, ";
}

echo "<br/> <b>Tablica wyjściowa, posortowana: </b><br/>";
sort($imiona);
foreach($imiona as $im){
    echo "$im, ";
}

echo "<br/>";
$liczby=[12367,9854,245,9876,11,-12345,-65];
$min=min($liczby);
echo "$min <br/>";
$max=max($liczby);
echo "$max <br/>";
// różnica między tymi dwoma
$r=$min-$max;
echo "<br/> różnica $r <br/>";
echo "<br/>Ilość elementów w tablicy $liczby wynosi ".count($liczby);

?>
<?php
$x=['banan','kiwi','agrest'];

$x[0]="mango";
print_r($x);
echo "<hr/>";

$x[3]="papaja";
$x[6]='jagoda';
print_r($x);
echo "<hr/>";

// push doda element na koniec (jeden lub kilka)
array_push($x,'gruszka', 'jabłko');
print_r($x);
echo "<hr/>";

//pop usuwa ostatni element
array_pop($x);
print_r($x);
echo "<hr/>";

// shift - usunie pierwszy element
array_shift($x);
print_r($x);
echo "<hr/>";

// unshift - doda element na początek
array_unshift($x,'mango');
print_r($x);
echo "<hr/>";

// replace - podmienia elementy pierwszej tablicy na elementy z drugiej
$y=["maliny","granat","kaki"];
print_r(array_replace($x,$y));
echo "<hr/>";

// shuffle - wymiesza zawartość elementów
shuffle($y);
print_r($y);
echo "<hr/>";

// sortowanie
sort($x);
print_r($x);
echo "<hr/>";

// implode zwraca wartość string elementów tablicy
echo implode("/ ",$x);
echo "<hr/>";

// map - dane z tablicy wyjściowej są przypisane do nowej zmiennej i na nich wykonujemy działania - tutaj potęgujemy
$liczby=[1,2,3,4];
$potliczby= array_map(fn($liczba) => ($liczba)**2, $liczby);
print_r($potliczby);
echo "<hr/>";

// filter odsiewa z tablicy te elementy, których nie chcemy - w tym przypadku nieparzyste
$liczby1=[1,2,3,4,5,6];
$evennum=array_filter ($liczby1, fn($liczba)=>$liczba%2 === 0);
print_r($evennum);

?>
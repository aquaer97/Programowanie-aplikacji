<?php 
// Pętla for wyświetlająca 5 razy napis "Ferie tuż, tuż!"

for($i=1;$i<=5;$i++){
    echo "Ferie tuż, tuż! <br/>";
};

echo "<hr>";

for($a=0;$a<=50;$a++){
    echo "$a ";
}
echo "<hr/>";

// Pętla for wyświetlająca co piąte liczby z przedziału 100-50

for($b=100;$b>=50;$b-=5){
    echo "$b ";
}
echo "<hr/>";

// Pętla while wyświelająca imię 6 razy

$c = 1;
while($c<=6){
    echo "akbep <br/>";
    $c++;
}

echo "<hr/>";

// while 0-10

$d=0;
while($d<=10){
    echo "$d ";
    $d++;
}
echo "<br/>";

// while 0-10 ver.2
$e=-1;
while($e++<10){
    echo $e;
}

echo "<hr/>";

// for liczby parzyste 0-50 ver.1
for($f=0;$f<=50;$f+=2){
    echo "$f ";
}

echo "<hr/>";

// to samo, z instrukcją warunkową
for($g=0;$g<=50;$g++){
    if($g%2==0){
        echo "$g ";
    }
}
echo "<hr/>";

// while liczby parzyste 50-100
$h=50;
while($h<=100){
        echo "$h ";
        $h+=5;
}
echo "<hr/>";
// for tworzący 
echo "<table border='1' bordercolor='black'";
for($t=1;$t<=10;$t++){
    echo "<tr><td>$t</td><td>przebieg pętli</td></tr>";
}
echo "</table><hr/>";

echo "losowe z zakresu 1-50: ";


    
?>
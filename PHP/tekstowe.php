<?php
$txt="Rozpoczynamy nauke PHP";
echo "$txt <br>";
$dl=strlen($txt);
echo "Długość naszego ciągu wynosi $dl znaków.";
$pierwsza=substr($txt,0,1); // 0 - nr ideksu, ile w prawa przeskoczyć, czy coś, idk
echo "<br> Pierwsza litera ze zdania to $pierwsza";
$kawalek=substr($txt,19,3);
echo "<br> $kawalek";
$wielkie=strtoupper($txt);
echo "<br> Zamiana na wielkie litery $wielkie";
$male=strtolower($txt);
echo "<br>tekst zapisany małymi literami $male";
$reversed=strrev($txt);
echo "<br>Tekst od tyłu:$reversed";
$zastap=str_replace("PHP","nowego języka programowania",$txt);
echo "<br> $zastap";
?>
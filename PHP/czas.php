<?php
date_default_timezone_set('Europe/Warsaw');

echo time() . "<br/>";
$data = getdate();
$dzien = $data["mday"];
$miesiac=$data['mon'];
$rok = $data['year'];

if($dzien < 10 and $miesiac < 10){
    $dzien = 0 . $data['mday'];
    $miesiac = 0 . $data['mon'];
} 
else if($miesiac < 10){
    $miesiac = 0 . $data['mon'];
}
else if($dzien < 10){
    $dzien = 0 . $data['mday'];
}

echo "Bieżąca data to: " . $dzien."-".$miesiac."-".$rok . "r. <br/>";
echo date('Y-m-d') . "<br/>";
echo date("d.m.Y") . "r.<br/>";
echo date('G:i:s') . "<br/>";
echo date('H-i-s') . "<br/>";
echo date('Y-m-d g:i:sa'). "<br/>";

echo "<br/> Dziś jest: ".date("l"). "<br/>";

$dnipl = ["Monday"=>'Poniedziałek','Tuesday'=>'Wtorek','Wednesday'=>'Środa', 'Thursday'=>'Czwartek','Friday'=>'Piątek', 'Saturday'=> 'Sobota', 'Sunday'=>'Niedziela'];

echo "Dziś jest: ".$dnipl[date('l')].", ".date('d/m/Y'). "<br/>";


// $teraz = time();
// $zagodz=$teraz +3600;
// echo "Teraz $teraz, za godzine $zagodz <br/>";
// echo date("H:i", $zagodz);
// // data do przodu (jutro)


$d = date('d');
$m = date('m');
$y = date('Y');

echo "<br/> jutro będzie " . date('d/m/Y', strtotime('+1 day')) . "<br/>";

// określenie daty musi być wartością typu string
// określenia: last/next/week/month/year/-2 weeks/ +7 days

$teraz = strtotime("now");
echo "<br/> Teraz: ";
echo date('H:i:s', $teraz);

$zatydzien = strtotime('next Thursday');
echo "<br/> Za tydzień ";
echo date("d.m.Y",$zatydzien)."r. mamy kartkówkę.";

$roktemu=strtotime("1 year ago");
echo "<br/> Rok temu, ";
echo date('d.m.Y',$roktemu)."r. uczyliśmy sie JS.";

$zamies=strtotime('+30 days');
echo "<br/>" . date('d.m.Y',$zamies) . "r. organizujemy akademię pożegnalną dla maturzystów.";

$wczesniej=strtotime('4 years ago');
echo "<br/> W ";
echo date("Y", $wczesniej)."r. chodziliśmy do szkoły podstawowej.";




// ZADANIE 1
echo "<br/> Dziś jest ". date("d.m.Y"). ", godzina ". date("G:i:s");

// ZADANIE 2
$data = getdate();
$dzien = $data["mday"];
$miesiac=$data['mon'];
$rok = $data['year'];
echo "Bieżąca data to: " . $dzien."-".$miesiac."-".$rok . "r. <br/>";

// ZADANIE 1
echo "do weekendu zostalo". date("G:i:s",strtotime('next Friday 16:00'));
?>
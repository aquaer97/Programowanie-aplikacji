<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 1</title>
</head>
<body>
    <?php
echo "pierwsze kroki w php";
print("<br>instrukcja PRINT może być zamiennie używana z echo");
echo "<br><strong><i>tekst sformatowany</i></strong> <br>";


echo "<br> Apostrofy są 'silniejsze' niż cudzysłowy <br> <br>";

$imie="anna";

echo "<br><img src='php.png' <br>";


echo '<br>witaj $imie <br>';
echo "<br>";
echo "witaj $imie <br>";



echo "<br> znak kropki kropki to konkatenacja łańcuchów znakowych <br> <br>";
$im1='kasia';
$im2 = 'filip';
$im3 = 'kuba';

echo $im1. ", " .$im2. ", " .$im3;
echo "<hr>";
define ("VAT", "23%");

echo "Vat na produkty spożywcze wynosi ".VAT ;

echo "<br>";

echo "";
?>
<hr>
<br> <br>
<a href="../index.php">wstep</a>
</body>
</html>
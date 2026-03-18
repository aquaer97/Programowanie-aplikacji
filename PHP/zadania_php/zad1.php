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

echo '<br>witaj $imie <br>'; // wyświetli: witaj $imie
echo "<br>";
echo "witaj $imie <br>"; // wyświetli: witaj anna

echo "<br> znak kropki to konkatenacja łańcuchów znakowych <br> <br>";

$im1='kasia';
$im2 = 'filip';
$im3 = 'kuba';

echo $im1. ", " .$im2. ", " .$im3;
echo "<hr>";
define ("VAT", "23%");

echo "Vat na produkty spożywcze wynosi ".VAT ;
?>
</body>
</html>
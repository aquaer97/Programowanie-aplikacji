<?php
// Funkcja include pozwala na dołączanie do skryptu kodu znajdującego się w zewnętrznym pliku.
// Plik zawiera funkcję wyświetlającą łańcuch znaków @@@.## $$$
echo "Oto zawartość pliku zewnętrznego zawierającego funkcję wczytującą łańcuch znaków:";
include('include_zewn.php');
echo "Koniec skryptu.";
?>
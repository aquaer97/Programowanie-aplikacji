<?php
// Instrukcja dołączania REQUIRE
echo "Oto zawartość pliku zewnętrznego:";
require('include_zewn2.php');
echo "Koniec skryptu.";
/* INCLUDE i REQUIRE działają podobnie, ale gdy INCLUDE nie znajdzie pliku, który chcemy podpiąć, otrzymamy ostrzeżenie i skrypt będzie
generowany dalej (pojawi się komunikat "koniec skryptu").
Gdy REQUIRE nie odnajdzie pliku zewnętrznego, następuje przerwanie skryptu, nic się nie wyświetli, a widoczne będą tylko ostrzeżenia. */

<html>
    <head>
        <title>Instrukcja dołączania plików</title>
        <h1>Plik zewnętrzny - pętla generująca tabelę (10 wierszy po 2 komórki)</h1>
</head>
<body>
    <table border="2">
        <?php
        for($i=1;$i<=10;$i++){
            echo "<tr><td>$i</td>";
            echo "<td>Przebieg pętli</td></tr>";
        }
        ?>
    </table>
</body>
<html>

    



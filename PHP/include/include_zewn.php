<?php
function chain($char,$length){
    for($i=0; $i<$length; $i++)
        print($char);
        print("<br/>");
}
chain("@".30);
chain("#".20);
chain("$".25);
?>


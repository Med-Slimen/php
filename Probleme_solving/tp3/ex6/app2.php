<?php
$n=1000;
for ($i=1; $i <= $n ; $i++) { 
    $s=0;
    for ($j=1; $j < $i; $j++) {
        if ($i%$j==0) {
            $s+=$j;
        }
        
    }
    if ($s==$i) {
        echo("$i est nombre parfait <br>");
    }
}
?>
<?php
function factoriel($x){
    $s=1;
    for($i= 2;$i<$x;$i++){
        $s*=$i;
    }
    return $s;
}
function cardinal($n,$p){
    return factoriel($n)/factoriel($p)*factoriel($n-$p);
}
function sommeTab($t){
    $s=0;
    for($i= 0;$i<count($t);$i++){
        $s+=$t[$i];
    }
    return $s;
}
function MinMax($t){
    $min=$t[0];
    $max=$t[0];
    for($i= 1;$i<count($t);$i++){
        if ($t[$i]>$t[$max]) {
            $max=$i;
        }
        if ($t[$i]<$t[$min]){
            $min=$i;
        }
    }
    echo"La position min = :".$min."<br> la position max = ".$max."<br>";
    
}
$t=array(1,2,-1,10,5,6);
$n=6;
$p=3;
MinMax($t);
echo"le factoriel de $n est : ".factoriel($n)."<br>";
echo"Le cardinal du $n et $p :".cardinal($n,$p)."<br>";
echo"la somme du tableaux : ".sommeTab($t)."<br>";


?>
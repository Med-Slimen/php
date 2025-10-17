<?php
$t1=array(1,2,3,4,5,6);
$t2=array(6,5,4,3,2,1);
$s=0;
for ($i= 0;$i<count($t1);$i++){
    $s+=$t1[$i]*$t2[$i];
}
echo"produit scalaire <br> le produit scalaire de T1 et T2 = $s";
?>
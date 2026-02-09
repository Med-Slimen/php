<?php
$tva=0.206;
$prix=150;
$nombre=10;
$res=$prix*$nombre;
$res2=$prix + ($tva*$nombre);
echo "le montant HT est egal a ".$res." est de type  ".gettype($res);echo "<br>";
echo "le montant tva est egal a ".$res2." est de type  ".gettype($res2);echo "<br>";
echo "la variable ".$prix." est de type  ".gettype($prix);echo "<br>";
echo "la variable ".$tva." est de type  ".gettype($tva);echo "<br>";
echo "la variable ".$nombre." est de type  ".gettype($nombre);


?>
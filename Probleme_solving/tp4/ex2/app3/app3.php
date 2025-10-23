<?php
$nom="med slimene";
$adresse="med@gmail.com";
$nom=ucfirst(substr($nom,0,strpos($nom," ")))." ".ucfirst(substr($nom,strpos($nom," ")+1));
echo $nom."<br>";
for ($i= 0; $i<strlen($nom); $i++){
    echo$nom[$i]."<br>";
}
$adresse=trim($adresse);
if ($adresse== "" || strpos($adresse,"@")===false || strpos($adresse,".")===false || strpos($adresse," ")!==false){
    echo "adresse non valid";
}
else{
    echo "adresse valid";
}
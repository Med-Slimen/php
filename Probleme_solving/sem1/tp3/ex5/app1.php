<?php
$prix_table=150;
$prix_armorie=50;
$nombre=10;
$ht=$prix_armorie*$nombre;
echo"le prix total pour les $nombre armories est de $ht <br> ";
if ($prix_table>$prix_armorie) {
    echo "le prix de l armorie ($prix_armorie) est inférieur au prix de la table ($prix_table)";
}
else{
    echo "le prix de l armorie ($prix_armorie) est superieur au prix de la table ($prix_table)";
}


?>
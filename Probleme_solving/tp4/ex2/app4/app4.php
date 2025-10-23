<?php
$tab=array();
for($i= 0;$i<25;$i++){
    $tab[$i]= rand(0,20);
}
echo"Voici le tableau T <br>";
for($i= 0;$i<25;$i++){
    echo $tab[$i]." ";
}
echo "<br>Nombre d occurance de chaque entier entre 0 et 20 <br>";
for($i= 0;$i<25;$i++){
    echo $i." | ";
}
echo "<br>";
for($i= 0;$i< count($tab);$i++){
    $s=0;
    for($j= 0;$j< count($tab);$j++){
        if($tab[$j]==$i){
            $s+= 1;
        }
    }
    echo $s." | ";

}
$tab2=array("php5@free.com","test2@fiscali.fr","test3@waladoo.fr","med@waladoo.fr","paul@fiscali.fr","darine@fiscali.fr");
echo"<br>";
$tab3=array();
for($i=0 ;$i<count($tab2) ;$i++){
    $part=strpos($tab2[$i],"@")+1;
    $tab3[$i]= substr($tab2[$i],$part,strpos($tab2[$i],".")-$part);
}
$tab4=array();
for($i= 0; $i<count($tab3) ;$i++){
    if(!in_array($tab3[$i],$tab4)){
        $tab4[]=$tab3[$i];
    }
}
for($i= 0;$i<count($tab4);$i++){
    $s=0;
    for($j= 0;$j<count($tab3);$j++){
        if($tab3[$j]==$tab4[$i]){
            $s+= 1;
        }
    }
    $pers=round(($s/count($tab3))*100,2);
    echo "Fournisseur d'accés : $tab4[$i] = $pers % <br>";
}
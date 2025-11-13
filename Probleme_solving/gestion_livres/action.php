<?php
include_once('conn.php');
$code=$_POST["code"];
$lib=$_POST["lib"];
$aut=$_POST["aut"];
$maison=$_POST["maison"];
$nbt=$_POST["nbt"];
$res=false;
if(isset($_POST["Ajouter"])){
    $sel=$conn->prepare("SELECT * FROM livres where code=?");
    $sel->bindValue(1,$code);
    $sel->execute();
    if($sel->rowCount()>0){
        echo"livre deja existe";
    }
    else{
        $query=$conn->prepare("INSERT INTO livres values(?,?,?,?,?,?)");
        $query->bindValue(1,$code);
        $query->bindValue(2,$lib);
        $query->bindValue(3,$aut);
        $query->bindValue(4,$maison);
        $query->bindValue(5,$nbt);
        $query->bindValue(6,$res);
        if($query->execute()){
            header("Location: index.php");
            exit();
        }
        else{
            echo "error";
        }
    }
}
else if(isset($_POST["Modifier"])){
    $query=$conn->prepare("UPDATE livres set code=?,libelle=?,auteur=?,maison_edit=?,nb_tomes=? where code=?");
    $query->bindValue(1,$code);
    $query->bindValue(2,$lib);
    $query->bindValue(3,$aut);
    $query->bindValue(4,$maison);
    $query->bindValue(5,$nbt);
    $query->bindValue(6,$code);
    if($query->execute()){
            header("Location: index.php");
            exit();
        }
        else{
            echo "error";
        }

}
else{
    $query=$conn->prepare("DELETE FROm livres where code=?");
    $query->bindValue(1,$code);
    if($query->execute()){
        header("Location: index.php");
        exit();
        }
    else{
            echo "error";
        }
}




?>
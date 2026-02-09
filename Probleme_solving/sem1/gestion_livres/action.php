<?php
include_once('conn.php');
if(isset($_POST["code"])){
    $code=$_POST["code"];
    $lib=$_POST["lib"];
    $aut=$_POST["aut"];
    $maison=$_POST["maison"];
    $nbt=$_POST["nbt"];
    if(isset($_POST["res"])){
        $res=$_POST["res"] ? 1 : 0;
    }
    else{
    $res=0;
    }
}
if(isset($_POST["Ajouter"])){
    $sel=$conn->prepare("SELECT * FROM livres where code=?");
    $sel->bindValue(1,$code);
    $sel->execute();
    if($sel->rowCount()>0){
         ?><script>alert("<?php echo"livre deja existe" ;?>")</script>
        <?php
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
    $query=$conn->prepare("UPDATE livres set code=?,libelle=?,auteur=?,maison_edit=?,nb_tomes=?,reserver=? where code=?");
    $query->bindValue(1,$code);
    $query->bindValue(2,$lib);
    $query->bindValue(3,$aut);
    $query->bindValue(4,$maison);
    $query->bindValue(5,$nbt);
    $query->bindValue(6,$res);
    $query->bindValue(7,$code);
    if($query->execute()){
            header("Location: index.php");
            exit();
        }
        else{
            echo "error";
        }

}
else if(isset($_POST["Supprimer"])){
    $query=$conn->prepare("DELETE FROm livres where code=?");
    $query->bindValue(1,$code);
    if($query->execute()){
        header("Location: index.php");
        exit();
        }
    else{
            ?><script>alert("<?php echo"erreur" ;?>")</script>
        <?php
        }
}
else if(isset($_POST["recherche"])){
    if(isset($_POST["code"])){
    $q=$conn->prepare("SELECT * from livres where code=?");
    $q->bindValue(1,$_POST["code"]);
    $q->execute();
    if($q->rowCount()>0){
        $rq=$q->fetch();
    }
    else{
        ?><script>alert("<?php echo"le livre ne trouve pas" ;?>")</script>
        <?php
        ;
    }
    
}
}



?>
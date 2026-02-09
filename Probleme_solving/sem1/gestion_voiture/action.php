<?php
include_once('conn.php');
if(isset($_POST["ID"])){
    $id=$_POST["ID"];
    $marque=$_POST["marque"];
    $modele=$_POST["modele"];
    $annee=$_POST["annee"];
    $immat=$_POST["immatriculation"];
    $disp=isset($_POST["disp"]) ? 1 : 0;
}
if(isset($_POST["Ajouter"])){
    $sel=$connection->prepare("SELECT * FROM voiture where ID=?");
    $sel->bindValue(1,$id);
    $sel->execute();
    if($sel->rowCount()>0){
         ?><script>alert("<?php echo"voiture deja existe" ;?>")</script>
        <?php
    }
    else{
        $query=$connection->prepare("INSERT INTO voiture(marque,modele,annee,immatriculation,Disponibilite) values(?,?,?,?,?)");
        $query->bindValue(1,$marque);
        $query->bindValue(2,$modele);
        $query->bindValue(3,$annee);
        $query->bindValue(4,$immat);
        $query->bindValue(5,$disp);
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
    $query=$connection->prepare("UPDATE voiture set ID=?,marque=?,modele=?,annee=?,immatriculation=?,Disponibilite=? where ID=?");
    $query->bindValue(1,$id);
    $query->bindValue(2,$marque);
    $query->bindValue(3,$modele);
    $query->bindValue(4,$annee);
    $query->bindValue(5,$immat);
    $query->bindValue(6,$disp);
    $query->bindValue(7,$id);
    if($query->execute()){
            header("Location: index.php");
            exit();
        }
        else{
            echo "error";
        }

}
else if(isset($_POST["Supprimer"])){
    $query=$connection->prepare("DELETE FROm voiture where ID=?");
    $query->bindValue(1,$id);
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
    if(isset($_POST["ID"])){
    $q=$connection->prepare("SELECT * from voiture where ID=?");
    $q->bindValue(1,$_POST["ID"]);
    $q->execute();
    if($q->rowCount()>0){
        $rq=$q->fetch();
    }
    else{
        ?><script>alert("<?php echo"le voiture n existe pas" ;?>")</script>
        <?php
        ;
    }
    
}
}



?>
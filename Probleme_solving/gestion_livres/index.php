<?php
include_once('conn.php');
$query=$conn->query("SELECT * FROM livres");
$rq=null;
if(isset($_GET["codeR"])){
    $q=$conn->prepare("SELECT * from livres where code=?");
    $q->bindValue(1,$_GET["codeR"]);
    $q->execute();
    if($q->rowCount()>0){
        $rq=$q->fetch(PDO::FETCH_ASSOC);
    }
    else{
        echo"le livre ne trouve pas";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><h1>Gestion des livres</h1></legend>
        <form action="index.php" method="get">
            <input type="submit" value="Recherche" name="" id="">
            <input type="text" name="codeR" id="">
        </form>
        <form action="action.php" method="post">
            <label for="">Code</label>
            <input type="text" name="code" value="<?php  echo $rq["code"] ?? "" ?>" id="code"><br>
            <label for="">Libellé</label>
            <input type="text" name="lib" value="<?php echo  $rq["libelle"] ?? "" ?>" id="lib"><br>
            <label for="">Auteur</label>
            <input type="text" name="aut" value="<?php echo $rq["auteur"] ?? ""?>" id="aut"><br>
            <label for="">Maison d’édition</label>
            <input type="text" name="maison" value="<?php echo $rq["maison_edit"] ?? ""?>" id="maison"><br>
            <label for="">Nombre de tomes</label>
            <input type="number" name="nbt" value="<?php echo $rq["nb_tomes"] ?? "";?>" id="nbt"><br>
            <select name="sel" id="sel">
                <option value="1">Ajouter</option>
                <option value="2">Modifier</option>
                <option value="3">Supprimer</option>
            </select><br>
            <input type="submit" name="" id="">
        </form>
        
        <h2>Les liste des livres</h2>
        <table border="3">
            <tr>
                <th>Code</th>
                <th>Libelle</th>
                <th>auteur</th>
                <th>maison_edit</th>
                <th>nb_tomes</th>
                <th>reserver</th>
            </tr>
            <?php 
            while($row=$query->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $row["code"] ?></td>
                    <td><?php echo $row["libelle"] ?></td>
                    <td><?php echo $row["auteur"] ?></td>
                    <td><?php echo $row["maison_edit"] ?></td>
                    <td><?php echo $row["nb_tomes"] ?></td>
                    <td><?php echo $row["reserver"] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </fieldset>
</body>
</html>
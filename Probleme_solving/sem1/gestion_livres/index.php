<?php
include_once('conn.php');
$query=$conn->query("SELECT * FROM livres");
include("action.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
        <legend><h1>Gestion des livres</h1></legend>
        <form action="" method="post">
            <label for="">Code</label>
            <input type="text" required name="code" value="<?php  echo $rq["code"] ?? "" ?>" id="code">
            <input type="submit" value="Recherche" name="recherche" id="">
            <br>
            <label for="">Libellé</label>
            <input type="text"  name="lib" value="<?php echo  $rq["libelle"] ?? "" ?>" id="lib"><br>
            <label for="">Auteur</label>
            <input type="text"  name="aut" value="<?php echo $rq["auteur"] ?? ""?>" id="aut"><br>
            <label for="">Maison d’édition</label>
            <input type="text"  name="maison" value="<?php echo $rq["maison_edit"] ?? ""?>" id="maison"><br>
            <label for="">Nombre de tomes</label>
            <input type="number"  name="nbt" value="<?php echo $rq["nb_tomes"] ?? "";?>" id="nbt"><br>
            <label for="">Reserver</label>
            <input type="checkbox" name="res" <?php if(isset($rq["reserver"])&& $rq["reserver"]==1)echo "checked";?> id=""><br>
            <input type="submit"  value="Ajouter" name="Ajouter" id="">
            <input type="submit"  value="Modifier" name="Modifier" id="">
            <input type="submit"  value="Supprimer" name="Supprimer" id="">
            <input type="button"  value="Reset" onclick="r()" name="reset" id="">
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
                    <td><?php echo $row["reserver"] ? 'oui' : 'non' ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </fieldset>
    <script>
        function r(){
            document.getElementById("code").value="";
            document.getElementById("lib").value="";
            document.getElementById("aut").value="";
            document.getElementById("maison").value="";
            document.getElementById("nbt").value="";
        }
        
    </script>
</body>
</html>
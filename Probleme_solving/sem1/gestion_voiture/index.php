<?php
include_once('conn.php');
$query=$connection->query("SELECT * FROM voiture");
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
        <legend><h1>Gestion des voitures</h1></legend>
        <form action="" method="post">
            <label for="">ID</label>
            <input type="text"  name="ID" value="<?php  echo $rq["ID"] ?? "" ?>" id="ID">
            <input type="submit" value="Recherche" name="recherche" id="">
            <br>
            <label for="">Marque</label>
            <input type="text"  name="marque" value="<?php echo  $rq["Marque"] ?? "" ?>" id="marque"><br>
            <label for="">Modele</label>
            <input type="text"  name="modele" value="<?php echo $rq["Modele"] ?? ""?>" id="modele"><br>
            <label for="">Annee</label>
            <input type="text"  name="annee" value="<?php echo $rq["Annee"] ?? ""?>" id="annee"><br>
            <label for="">Immatriculation</label>
            <input type="text"  name="immatriculation" value="<?php echo $rq["Immatriculation"] ?? "";?>" id="immatriculation"><br>
            <label for="">Disponibilite</label>
            <input type="checkbox" name="disp" <?php if(isset($rq["Disponibilite"])&& $rq["Disponibilite"]==1)echo "checked";?> id=""><br>
            <input type="submit"  value="Ajouter" name="Ajouter" id="">
            <input type="submit"  value="Modifier" name="Modifier" id="">
            <input type="submit"  value="Supprimer" name="Supprimer" id="">
            <input type="reset"  value="Reset"  name="reset" id="">
        </form>
        
        <h2>Les liste des Voitures</h2>
        <table border="3">
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Modele</th>
                <th>Année</th>
                <th>Immatriculation</th>
                <th>Disponibilité</th>
            </tr>
            <?php 
            while($row=$query->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $row["ID"] ?></td>
                    <td><?php echo $row["Marque"] ?></td>
                    <td><?php echo $row["Modele"] ?></td>
                    <td><?php echo $row["Annee"] ?></td>
                    <td><?php echo $row["Immatriculation"] ?></td>
                    <td><?php echo $row["Disponibilite"] ? 'oui' : 'non' ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </fieldset>
</body>
</html>
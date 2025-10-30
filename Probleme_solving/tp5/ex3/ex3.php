<?php include("prod.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>List des valeur</h3>
    <form action="res.php" method="post">
        <select name="vendeur" id="mr">
            <option value="Martin">Martin</option>
            <option value="Dupont">Dupont</option>
            <option value="Durand">Durand</option>
            <option value="Louis">Louis</option>
        </select>
        <h3>List des Produits</h3>
        <select name="prod" id="prod">
            <?php
            foreach($prod as $p){
                echo("<option value='$p'>$p</option>");
            }
            ?>
        </select>
        <p>Nombre de produits a commander</p>
        <input type="number" name="number" id=""><br>
        <input type="submit" value="soumettre" name="" id="">
    </form>
</body>
</html>
<?php
$nom=$_POST["nom"];
$prenom= $_POST["prenom"];
$pass= $_POST["pass"];
$cpass= $_POST["cpass"];
$age=$_POST["age"];
$sexe=$_POST["sexe"];
$Langue=$_POST["Langue"];
$loisir=$_POST["loisir"];
$date=date("m/d/y");
$checkbox=$_POST["color"];
$couleur="";
foreach($checkbox as $color){
    $couleur.=$color." ";
}
$Commentaire=$_POST["commentaire"];
$cryptage=md5($pass);
echo"<table border='3' width='500px'>
    <caption>Confirmation de vos cordonnées</caption>
    <tr>
        <td>nom</td>
        <td>$nom</td
    </tr>
    <tr>
        <td>prenom</td>
        <td>$prenom</td
    </tr>
    <tr>
        <td>password</td>
        <td>0000000</td
    </tr>
    <tr>
        <td>Cryptage</td>
        <td>$cryptage</td
    </tr>
    <tr>
        <td>age</td>
        <td>$age</td
    </tr>
    <tr>
        <td>sexe</td>
        <td>$sexe</td
    </tr>
    <tr>
        <td>Langue</td>
        <td>$Langue</td
    </tr>
    <tr>
        <td>loisir</td>
        <td>$loisir</td
    </tr>
    <tr>
        <td>Couleur</td>
        <td>$couleur</td
    </tr>
    <tr>
        <td>Commentaire</td>
        <td>$Commentaire</td
    </tr>
    <tr>
        <td>date</td>
        <td>$date</td
    </tr>
    </table>";
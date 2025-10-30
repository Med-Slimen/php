<?php
$nom=$_POST["nom"];
$prenom= $_POST["prenom"];
$adresse= $_POST["adress"];
$ville= $_POST["ville"];
$code=$_POST["code"];
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
        <td>adress</td>
        <td>$adresse</td
    </tr>
    <tr>
        <td>ville</td>
        <td>$ville</td
    </tr>
    <tr>
        <td>code</td>
        <td>$code</td
    </tr>
    </table>";
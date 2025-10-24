<?php
$nom=$_POST["nom"];
$pass=$_POST["pass"];
if($pass== "mot"){
    echo"Bienvenue M Ali : votre mot de passe est correct";
    echo"<button><a href='ex1.html'>Retour</a>";
}
else{
    echo"votre mot de passe est incorrect";
    echo"<button><a href='ex1.html'>Retour</a>";
}
<?php
require_once('user.php');
$us=new user();
$us->user_id=$_POST['iduser'];
$us->user_nom=$_POST['nomuser'];
$us->insertuser();
header('Location:index.php');
?>
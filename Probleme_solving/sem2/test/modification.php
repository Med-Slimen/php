<?php
require_once('user.php');
$us=new user();
$us-> modifier_user($_POST['num'],$_POST['nom']);
header('Location:index.php');
?>
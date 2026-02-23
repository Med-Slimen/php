<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
$clientCtr=new ClientController();
$client=new Client();

$client->setCin($_POST['ncin']);
$client->setFirstName($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setTel($_POST['tel']);
$clientCtr->modifier_user($client);
header('Location:index.php');

?>
<?php
include_once('../models/Client.php') ;
include_once('../database/config.php');
class ClientController extends Connexion{
function __construct() {
parent::__construct();
}

function insert(Client $c){

$query="insert into client(ncin,nom,prenom,telephone)values(?, ?, ?, ?)";
$res=$this->pdo->prepare($query);

$aryy =array($c->getNcin(),$c->getNom(),$c->getPrenom(),$c->getTel()) ;
//var_dump($aryy);
return $res->execute($aryy);

}

function getClient($id){
    $query="SELECT * FROM client WHERE idClient = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idClient) {
$query = "delete from client where idClient=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idClient));
}
function liste(){
$query = "select * from client";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_user(Client $c)
{
$sql = "UPDATE client SET  nom=?, prenom=?,telephone=? WHERE ncin=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getNcin()));
}


}

?>


	
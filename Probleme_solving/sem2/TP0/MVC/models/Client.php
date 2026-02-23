<?php

class Client {
private $ncin,$nom,$prenom,$telephone;
function __construct($ncin="",$nom="",$prenom="",$telephone="") {
	
    $this->ncin=$ncin;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->telephone=$telephone;
}

public function getNcin(){
	return $this->ncin;
}

public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}

public function getTel(){
	return $this->telephone;
}


public function setFirstName($nom){
        $this->nom = $nom;
    }

public function setCin($ncin){
        $this->ncin = $ncin;
    }

public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

 public function setTel($telephone){
        $this->telephone = $telephone	;
    }
	
}?>
<?php
class connexion
{ 
public function Cnx()
 {
 $dbc=new PDO('mysql:host=localhost;dbname=personnel','root',''); 
 return $dbc;
 } 
}?>
<?php
require_once('../controllers/ClientController.php');
$us=new ClientController();
$res=$us->liste();
echo "<table border=1>
<tr>
<td>id</td><td>Numero cin</td>
<td>Nom </td>
<td>Prenom </td>
<td>Telephone </td>
<td>Modifier</td>
<td>Supprimer</td></tr>";
if (is_array($res) || is_object($res)){
foreach ($res as $row)
{
echo "<tr><td>$row[idClient]</td><td>$row[ncin]</td>
<td>$row[nom]</td>
<td>$row[prenom]</td>
<td>$row[telephone]</td>
<td><a href ='modif.php?id=$row[idClient]'>Modifier</a></td>
<td><a href='sup.php?id=$row[idClient]'>Supprimer</a></td> </tr>";
}}
echo "</table>";
echo "<a href='inscription.html'>Inscription</a>";
?>
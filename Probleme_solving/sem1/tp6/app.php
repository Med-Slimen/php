<?php
include_once("conn.php");
$res=$connection->query("Select * from etudiant");
echo"Tableau du etuidant";
echo"<table border='3'>";
echo"<tr>
<th>Matricule</th>
<th>Nom</th>
<th>Prenom</th>
<th>Adresse</th>
</tr>";
while($row=$res->fetch(PDO::FETCH_ASSOC)){
    echo"<tr>
    <td>{$row['matricule']}</td>
    <td>{$row['nom']}</td>
    <td>{$row['prenom']}</td>
    <td>{$row['adresse']}</td>
    </tr>
    ";
}
echo"</table>";
$res2=$connection->prepare("Select * from etudiant where adresse=?");
$res2->bindValue(1,'nabeul');
$res2->execute();
echo"Tableau du etuidant qui habit a nabeul";
echo"<table border='3'>";
while($row2=$res2->fetch(PDO::FETCH_ASSOC)){
    echo"<tr>
    <td>{$row2['matricule']}</td>
    <td>{$row2['nom']}</td>
    <td>{$row2['prenom']}</td>
    <td>{$row2['adresse']}</td>
    </tr>
    ";
}
echo"</table>";
?>
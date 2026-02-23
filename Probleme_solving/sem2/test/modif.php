<?php
require_once('user.php');
$us=new user();
$res=$us->getuser($_GET['id']);
?>
<form name = 'f1' method='post' action='modification.php'>
<table border='1'>
<tr>
<td>Numéro utilisateur</td>
<td><input type = "text" name = "num" value = "<?php echo $res['id'] ?>"/></td></tr>
<tr><td>Nom utilisateur</td>
<td><input type = "text" name = "nom" value = "<?php echo $res['nom'] ?>"/></td></tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>
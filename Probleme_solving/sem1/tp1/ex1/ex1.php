<?php
$numb=3850;
$min=floor(($numb%3600)/60);
$heur=floor($numb/3600);
$second=$numb%60;
echo("$heur h:$min m : $second s")

?>
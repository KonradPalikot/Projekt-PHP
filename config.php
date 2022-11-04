<?php
$sql = "SELECT * FROM projekt_PHP WHERE email ='$email' AND password='$haslo'"
$result = $connection -> query($sql)
$connection = new mysqli($host, $db_user, $db_password, $db_name);
?>
<?php

require_once('config.php');

$email = $connessione->real_escape_string($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);

$sql = "INSERT INTO tutto (email, password) VALUE ('$email', '$password')";
if($connessione->query($query) === true) {
    
}else{
     "$sql." . $connessione->errore;
}
?>
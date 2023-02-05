<?php

require_once('config.php');

$email =  $connessione->real_escape_string($_POST['email']);
$password =  $connessione->real_escape_string($_POST['password']);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti (email, password) VALUES ('$email', '$password')";
if($connessione->query($sql) === true){
    header("location: ../../index.html");
}else{
    echo "Errore durante la registrazione utente $sql." . $connessione->error;
}
?>
<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "test";

$connessione = new mysqli($host, $user, $password, $db);

if($connessione === false){
    die("Errore dirante la connessione : " . $connessione->connet_error);
}
?>
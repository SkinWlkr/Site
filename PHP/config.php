<?php
 $host = "127.0.0.1";
 $user = "root";
 $password = "";
 $db = "bello";

 $connessione = new mysqli($host, $user, $password, $db);

 if ($connessione == false) {
    die("Errore" . $connessione->connect_error);
 }

?>
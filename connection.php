<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "utenti");
if(false === $conn){
    exit("Errore: impossibile stabilire una connessione " . mysqli_connect_error());
}
?>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$bd = "clinica_oftalmologica";

$conexiune = mysqli_connect($hostname, $username, $password, $bd) or die("Eroare!");
$baza_date = mysqli_select_db($conexiune, $bd) or die("Eroare! Numele acestei baze de date nu exista!");

?>

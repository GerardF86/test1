<?php
if(empty($_POST)) die;

$serwer = 'localhost';
$uzytkownik = 'root';
$haslo = '';
$baza = 'cwiczenia1_db';

$polaczenie = new mysqli($serwer, $uzytkownik, $haslo, $baza);

$sql = "INSERT INTO employees (first_name, last_name, email, job_id, department_id)
VALUES ('$_POST[imie]','$_POST[nazwisko]','$_POST[email]', 5,1)";

if ($polaczenie->query($sql) === TRUE) {
    echo 'dodaj nowego pracownika';
} else {
    echo "<h1>Połączenie nawiązane</h1>";
}
$polaczenie->close();

header("location:./index.php");
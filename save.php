<?php

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$godine = $_POST['godine'];
$broj = $_POST['broj'];
$klub = $_POST['klub'];
$broj_golova = $_POST['broj_golova'];

$db_connection = new mysqli("localhost", "root", "", "premijerliga");
$query = "INSERT INTO fudbaler VALUES (null, '$ime', '$prezime', '$godine', '$broj', '$klub', '$broj_golova')";
$db_connection->query($query);

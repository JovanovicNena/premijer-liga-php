<?php

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$godine = $_POST['godine'];
$broj = $_POST['broj'];
$klub = $_POST['klub'];
$broj_golova = $_POST['broj_golova'];
$id = $_POST['id'];

$db_connection = new mysqli("localhost", "root", "", "premijerliga");
$query = "UPDATE fudbaler set ime='" . $ime . "', prezime='" . $prezime . "', godine='" . $godine . "', broj_dres='" . $broj . "', klub_id='" . $klub . "', broj_golova='" . $broj_golova . "' where id=" . $id;
$db_connection->query($query);

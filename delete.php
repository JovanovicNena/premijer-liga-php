<?php

$db_connection = new mysqli("localhost", "root", "", "premijerliga");
$query = "DELETE from fudbaler where id=" . $_POST['ID'];
$db_connection->query($query);

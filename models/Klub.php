<?php

class Klub
{
    public $id;
    public $ime;
    public $grad;
    public $titule;
    public $trener;

    public function getKlubovi()
    {
        $db_connection = new mysqli("localhost", "root", "", "premijerliga");
        $query = "SELECT * FROM klub";
        $data = $db_connection->query($query);

        $klubovi = array();

        while ($row = mysqli_fetch_array($data))
            array_push($klubovi, $row);

        return $klubovi;
    }
}

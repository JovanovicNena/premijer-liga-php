<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>

    <?php
    require '../navmenu.html';

    $db_connection = new mysqli("localhost", "root", "", "premijerliga");
    $query = "SELECT * FROM fudbaler WHERE id=" . $_GET['id'];
    $data = $db_connection->query($query);
    $fudbaler = $data->fetch_object();

    ?>

    <div class="main">

        <div class="new-form">

            <div class="form mt-3">
                <label>Ime: </label>
                <input type="text" class="form-control" id="ime" value="<?php echo $fudbaler->ime ?>">
            </div>
            <div class="form">
                <label>Prezime: </label>
                <input type="text" class="form-control" id="prezime" value="<?php echo $fudbaler->prezime ?>">
            </div>
            <div class="form">
                <label>Godine: </label>
                <input type="text" class="form-control" id="godine" value="<?php echo $fudbaler->godine ?>">
            </div>
            <div class="form">
                <label>Broj: </label>
                <input type="text" class="form-control" id="broj" value="<?php echo $fudbaler->broj_dres ?>">
            </div>

            <?php
            require '../models/Klub.php';
            $klub = new Klub();

            $sviKlubovi = $klub->getKlubovi();
            ?>

            <div class="form">
                <label>Klub: </label>
                <select class="form-select" id="klub">
                    <?php
                    foreach ($sviKlubovi as $klub) :
                    ?>
                        <option value="<?php echo $klub['id']; ?>"><?php echo $klub['ime']; ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
                <?php
                ?>
            </div>

            <div class="form">
                <label>Broj golova: </label>
                <input type="number" class="form-control" id="broj_golova" value="<?php echo $fudbaler->broj_golova ?>">
            </div>

            <button type="button" id="button-update-player" value="<?php echo $_GET['id'] ?>" class="btn btn-dark">Save</button>

        </div>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="../js/jquery.js"></script>
</body>

</html>
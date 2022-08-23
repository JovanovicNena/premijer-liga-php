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
    ?>

    <div class="main">

        <div class="new-form">

            <div class="form mt-3">
                <label>Ime: </label>
                <input type="text" class="form-control" id="ime">
            </div>
            <div class="form">
                <label>Prezime: </label>
                <input type="text" class="form-control" id="prezime">
            </div>
            <div class="form">
                <label>Godine: </label>
                <input type="text" class="form-control" id="godine">
            </div>
            <div class="form">
                <label>Broj: </label>
                <input type="text" class="form-control" id="broj">
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

            <button type="button" id="button-save-player" class="btn btn-dark">Save</button>

        </div>




</body>

</html>
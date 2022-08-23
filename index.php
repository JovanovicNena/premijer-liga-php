<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premijer liga - Lista strelaca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/all.css">
</head>

<body>

    <?php
    require 'navmenu.html';
    ?>

    <div class="main">

        <div class="table-div">

            <table class="table text-center">

                <thead class="table-bordered">
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Godine</th>
                        <th>Broj na dresu</th>
                        <th>Klub</th>
                        <th>Broj golova</th>
                    </tr>
                </thead>

                <?php
                $db_connection = new mysqli("localhost", "root", "", "premijerliga");
                $query = "SELECT fudbaler.id, fudbaler.ime, fudbaler.prezime, fudbaler.godine, fudbaler.broj_dres, klub.ime as kime, fudbaler.broj_golova FROM fudbaler JOIN klub ON fudbaler.klub_id = klub.id";
                $data = $db_connection->query($query);

                while ($row = mysqli_fetch_array($data)) :
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['ime'];  ?></td>
                            <td><?php echo $row['prezime'];  ?></td>
                            <td><?php echo $row['godine'];  ?></td>
                            <td><?php echo $row['broj_dres']; ?></td>
                            <td><?php echo $row['kime']; ?></td>
                            <td><?php echo $row['broj_golova']; ?></td>
                        </tr>
                    <?php
                endwhile;
                    ?>
                    </tbody>

            </table>
        </div>
    </div>

</body>

</html>
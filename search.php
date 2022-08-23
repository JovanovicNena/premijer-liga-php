  <?php

    $ime = $_POST['ime'];
    $db_connection = new mysqli("localhost", "root", "", "premijerliga");

    $query = "SELECT fudbaler.id, fudbaler.ime, fudbaler.prezime, fudbaler.godine, fudbaler.broj_dres, klub.ime as kime, fudbaler.broj_golova
    FROM fudbaler JOIN klub ON fudbaler.klub_id = klub.id
    WHERE fudbaler.ime LIKE '%$ime%' OR fudbaler.prezime LIKE '%$ime%'";
    $data = $db_connection->query($query);

    while ($row = mysqli_fetch_array($data)) :
    ?>
      <tr>
          <td><?php echo $row['ime'];  ?></td>
          <td><?php echo $row['prezime'];  ?></td>
          <td><?php echo $row['godine'];  ?></td>
          <td><?php echo $row['broj_dres']; ?></td>
          <td><?php echo $row['kime']; ?></td>
          <td><?php echo $row['broj_golova']; ?></td>
      </tr>

  <?php endwhile; ?>
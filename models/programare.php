<?php
function showProgramare($idprogramare, $data, $ora, $clinic, $phone, $pret, $specializare){ ?>

    <tr>
        <td><?php echo $data; ?></td>
        <td><?php echo $ora; ?></td>
        <td><?php echo $clinic; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $pret; ?></td>
        <td><?php echo $specializare; ?></td>
        <td><button onclick="location.href='index.php?page=programari&take=<?php echo $idprogramare;?>'" class="button"> Rezervă </button></td>
    </tr>

<?php } ?>
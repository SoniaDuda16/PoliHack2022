<?php
function showProgramare($idprogramare, $data, $ora, $clinic, $phone, $specializare){ ?>

    <tr>
        <td><?php echo $data; ?></td>
        <td><?php echo $ora; ?></td>
        <td><?php echo $clinic; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $specializare; ?></td>
        <td><button onclick="location.href='index.php?page=programari&take=<?php echo $idprogramare;?>'" class="button"> Take </button></td>
    </tr>

<?php } ?>
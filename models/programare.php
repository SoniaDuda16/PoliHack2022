<?php
function showProgramare($idprogramare, $data, $ora, $clinic, $phone, $specializare){ ?>

    <tr>
        <th><?php echo $data; ?></th>
        <td><?php echo $ora; ?></td>
        <td><?php echo $clinic; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $specializare; ?></td>
        <th><button onclick="location.href='index.php?page=programari&take=<?php echo $idprogramare;?>'" class="button"> Take </button></th>
    </tr>

<?php } ?>
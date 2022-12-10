<link rel="stylesheet" type="text/css" href="public/css/requests.css">

<?php 
function showRequest($id, $name, $address, $phone, $idreprez, $i){
    if($i == 0){
      ?>
      <tr>
        <th><?php echo $name; ?></th>
        <td><?php echo $address; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $idreprez; ?></td>
        <td class="bifa1"> <i onclick="location.href='index.php?page=accept&id=<?php echo $id;?>'" class="fas fa-check"></i></td>
        <td class="bifa0"><i onclick="location.href='index.php?page=delete&id=<?php echo $id;?>'"class="fas fa-trash"></i></td>
      </tr>
      <?php
    }
    else{ ?>
      <tr class="active-row">
        <th><?php echo $name; ?></th>
        <td><?php echo $address; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $idreprez; ?></td>
        <td class="bifa1"><i onclick="location.href='index.php?page=accept&id=<?php echo $id;?>'" class="fas fa-check"></i></td>
        <td class="bifa0"><i onclick="location.href='index.php?page=delete&id=<?php echo $id;?>'" class="fas fa-trash"></i></td>
      </tr>
      <?php
    }
}
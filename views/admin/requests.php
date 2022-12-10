<link href="public/css/request.css" rel="stylesheet">

<table class="styled-table">
    <thead>
        <tr>
            <th>Nume</th>
            <th>Adresă</th>
            <th>Telefon Urgență</th>
            <th>ID Reprezentant</th>
            <th>Accept</th>
            <th>Deny</th>
        </tr>
    </thead>

    <tbody>
      <?php 
        include_once $_SERVER['DOCUMENT_ROOT']."/functions/others.php";

        showRequests($dbC);
      
      ?>
    </tbody>
</table>
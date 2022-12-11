<link href="public/css/progr.css" rel="stylesheet">

<table class="styled-table">
   
    <thead class="head">
        <tr>
            <th>Data</th>
            <th>Ora</th>
            <th>Clinica</th>
            <th>Telefon Clinica</th>
            <th>Specializare</th>
            <th> Take </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once $_SERVER['DOCUMENT_ROOT']."/functions/others.php";
        showProgramari();
        ?>
    </tbody>
</table>
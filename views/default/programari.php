<link href="public/css/search.css" rel="stylesheet">
<link href="public/css/progr.css" rel="stylesheet">

    <input type="text" id="myInput" onkeyup="searchAppo()" placeholder="Cauta o specializare.."> 

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
        <tbody id="myBody">
            <?php
                include_once $_SERVER['DOCUMENT_ROOT']."/functions/others.php";
                showProgramari($dbC);
            ?>
        </tbody>
    </table>
<script>
    function searchAppo() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    tbody = document.getElementById('myBody');
    filter = input.value.toUpperCase();
    tr = tbody.getElementsByTagName('tr');
  
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName('td')[4];
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
</script>

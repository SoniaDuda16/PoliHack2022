<link href="public/css/search.css" rel="stylesheet">
<link href="public/css/progr.css" rel="stylesheet">

    <input type="text" id="myInput" onkeyup="searchAppo()" placeholder="Cauta o specializare.."> 
    <h3> Sortează după: </h3>
    <button class="but but1" onclick="sortTable(0)" > data</button>
    <button class="but but2" onclick="sortTable(5)" > pret</button>
    <table id="myTable" class="styled-table">
        <thead class="head"> 
            <tr>
                <th>Data</th>
                <th onclick="sortTable(1)">Ora</th>
                <th>Clinica</th>
                <th>Telefon Clinica</th>
                <th>Specializare</th>
                <th  onclick="sortTable(2)">Preț</th>
                <th> Rezervă </th>
            </tr>
        </thead>
        <tbody id="myBody">
            <?php
                include_once $_SERVER['DOCUMENT_ROOT']."/functions/others.php";
                showProgramari($dbC);
            ?>
        </tbody>
    </table>
    
<!-- <table id="myTable2">
<tr>

<th onclick="sortTable(0)">Name</th>
<th onclick="sortTable(1)">Country</th>
</tr> -->


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

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  dir = "asc";
  while (switching) {
    switching = false;
    rows = table.rows;
   
    for (i = 1; i < (rows.length - 1); i++) {
      
      shouldSwitch = false;
      
      x = rows[i].getElementsByTagName("td")[n];
      y = rows[i + 1].getElementsByTagName("td")[n];
      if(n==5){
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase().length> y.innerHTML.toLowerCase().length) {
                
                    shouldSwitch = true;
                    break;
                }else if (x.innerHTML.toLowerCase().length == y.innerHTML.toLowerCase().length) {
                    if (x.innerHTML.toLowerCase()> y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    } 
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase().length < y.innerHTML.toLowerCase().length) {
                    shouldSwitch = true;
                    break;
                }else if (x.innerHTML.toLowerCase().length == y.innerHTML.toLowerCase().length) {
                    if (x.innerHTML.toLowerCase()< y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    } 
                }
            }
      }
      else{
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase()> y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                } 
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                }
            }
     
        }

    }
    if (shouldSwitch) {
   
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
     
      switchcount ++;
    } else {
      
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

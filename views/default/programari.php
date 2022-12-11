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
        <tbody>
            <!-- <tr>
                <td>Data</td>
                <td>Ora</td>
                <td>Clinica</td>
                <td>Telefon Clinica</td>
                <td>Specializare</td>
                <td><li><a href="#">Take</a></li></td>
            </tr> -->
            <?php
                include_once $_SERVER['DOCUMENT_ROOT']."/functions/others.php";
                showProgramari($dbC);
            ?>
        </tbody>
    </table>

    <!-- <ul id="myUL">
        <li><a href="#">Billy</a></li>
        <li><a href="#">Bob</a></li>

        <li><a href="#">Calvin</a></li>
        <li><a href="#">Christina</a></li>
        <li><a href="#">Cindy</a></li>
    </ul> -->

<script>
    function searchAppo() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
  
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }
</script>

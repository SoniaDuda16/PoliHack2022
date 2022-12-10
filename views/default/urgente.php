<h2 class="py-3"> &nbsp; Lista cabinetelor care au sectie de urgente: </h2>

   <!-- Search bar start
   <div class="input-group mx-4">
        <div class="form-outline">
            <input type="text" placeholder="Cauta dupa categorie..." id="form1" class="form-control"/>
        </div>
        <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
            </button>
    </div>
   Search bar end -->

<?php

    include_once $_SERVER['DOCUMENT_ROOT']."/functions/others.php";
    showClinicsEmergency($dbC);

?>

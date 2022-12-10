<?php
    if($_SESSION['level'] == 0){
        include $_SERVER["DOCUMENT_ROOT"]."/views/default/partial/header.php";
        if(isset($_GET['page'])){
            if($_GET['page']=="home"){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/home.php";
            }
            else if ($_GET['page'] == "inscrieclinica" && $_SESSION['hasRequest'] == 0){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/inscrieclinica.php";
            }
            else if ($_GET['page'] == "clinici"){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/clinici.php";
            }
            else if ($_GET['page'] == "urgente"){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/urgente.php";
            }
            else if ($_GET['page'] == "programari"){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/programari.php";
            }
            else if ($_GET['page'] == "programarilemele"){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/programarilemele.php";
            }
            else if ($_GET['page'] == "contulmeu"){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/contulmeu.php";
            }
            else {
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/home.php";
            }
        } else {
            include $_SERVER["DOCUMENT_ROOT"]."/views/default/home.php";
        }
        include $_SERVER["DOCUMENT_ROOT"]."/views/default/partial/footer.php";
    }
    else if($_SESSION['level'] == 1){
        include $_SERVER["DOCUMENT_ROOT"]."/views/clinicManager/partial/header.php";
        if(isset($_GET['create']) && $_GET['create'] == "true"){
            if(isset($_POST['data'])){
                createProgramare();
            }
        }
        include $_SERVER["DOCUMENT_ROOT"]."/views/clinicManager/manage.php";
        include $_SERVER["DOCUMENT_ROOT"]."/views/clinicManager/partial/footer.php";
    }else if($_SESSION['level'] == 2){
        if(isset($_GET['page']) && isset($_GET['id'])){
            if($_GET['page']=="accept"){
                createClinic($dbC);
            }
            else if($_GET['page']=="delete"){
                deleteRequest($dbC);
            }
        }
        include $_SERVER["DOCUMENT_ROOT"]."/views/admin/partial/header.php";
        include $_SERVER["DOCUMENT_ROOT"]."/views/admin/requests.php";
        include $_SERVER["DOCUMENT_ROOT"]."/views/admin/partial/footer.php";
    }
?>
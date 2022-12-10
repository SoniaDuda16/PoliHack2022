<?php
    if($_SESSION['level'] == 0){
        include $_SERVER["DOCUMENT_ROOT"]."/views/default/partial/header.php";
        if(isset($_GET['page'])){
            if($_GET['page']=="home"){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/home.php";
            }
            else if ($_GET['page'] == "inscrieclinica"){
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/inscrieclinica.php";
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

    }else if($_SESSION['level'] == 2){
        include $_SERVER["DOCUMENT_ROOT"]."/views/admin/partial/header.php";
        include $_SERVER["DOCUMENT_ROOT"]."/views/admin/requests.php";
        include $_SERVER["DOCUMENT_ROOT"]."/views/admin/partial/footer.php";
    }
?>
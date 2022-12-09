<?php
    include $_SERVER["DOCUMENT_ROOT"]."/views/default/partial/header.php";
    if(isset($_GET['page'])){
        if($_GET['page']=="home"){
            include $_SERVER["DOCUMENT_ROOT"]."/views/default/home.php";
        }
        else{
            include $_SERVER["DOCUMENT_ROOT"]."/views/default/home.php";
        }
    } else {
        include $_SERVER["DOCUMENT_ROOT"]."/views/default/home.php";
    }
    include $_SERVER["DOCUMENT_ROOT"]."/views/default/partial/footer.php";
?>
<?php
    include $_SERVER["DOCUMENT_ROOT"]."/views//auth/partial/header.php";
    if(isset($_GET['page'])){
        if($_GET['page']=="login"){
            include $_SERVER["DOCUMENT_ROOT"]."/views/auth/login.php";
        }
        else if($_GET['page']=="register"){
            include $_SERVER["DOCUMENT_ROOT"]."/views/auth/register.php";
        }
        else if($_GET['page']=="servicii"){
            include $_SERVER["DOCUMENT_ROOT"]."/views/auth/servicii.php";
        }
        else if($_GET['page']=="desprenoi"){
            include $_SERVER["DOCUMENT_ROOT"]."/views/auth/desprenoi.php";
        }
        else{
            include $_SERVER["DOCUMENT_ROOT"]."/views/auth/home.php";
        }
        
    } else {
        include $_SERVER["DOCUMENT_ROOT"]."/views/auth/home.php";
    }
    include $_SERVER["DOCUMENT_ROOT"]."/views/auth/partial/footer.php";
?>
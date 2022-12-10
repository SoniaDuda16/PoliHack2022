<?php

function createRequest($name, $address, $phone, $emphone, $dbC){
    if($emphone != ""){
        mysqli_query($_SESSION['connection'], "INSERT INTO ".$dbC->db_clinicsReqsTable."(name, address, phone, idreprez, hasemergency, emergency) VALUES ('".$name."', '".$address."','".$phone."','".$_SESSION['user_id']."', '1', '".$emphone."')");
    }
    else {
        mysqli_query($_SESSION['connection'], "INSERT INTO ".$dbC->db_clinicsReqsTable."(name, address, phone, idreprez, hasemergency, emergency) VALUES ('".$name."', '".$address."','".$phone."','".$_SESSION['user_id']."', '0', '-1')");
    }
    mysqli_query($_SESSION['connection'], "UPDATE ".$dbC->db_usersTable." SET hasRequest = 1 WHERE id = ".$_SESSION['user_id']);
    $_SESSION['hasRequest'] = 1;
}

function createClinique($dbC){
    $result = mysqli_query($_SESSION['connection'], "SELECT name, address, phone, idreprez, hasemergency, emergency FROM ".$dbC->db_clinicsReqsTable." WHERE id = ".$_GET['id']);
    $res = mysqli_fetch_row($result);
    $name = $res[0];
    $address = $res[1];
    $phone = $res[2];
    $idreprez = $res[3];
    $hasemergency = $res[4];
    $emergency = $res[5];

    mysqli_query($_SESSION['connection'], "DELETE FROM ".$dbC->db_clinicsReqsTable." WHERE id = ".$_GET['id']);
    mysqli_query($_SESSION['connection'], "INSERT INTO ".$dbC->db_clinicsTable."(name, address, phone, idreprez, hasemergency, emergency) VALUES ('".$name."', '".$address."','".$phone."','".$idreprez."', '".$hasemergency."', '".$emergency."')");
    
    mysqli_query($_SESSION['connection'], "UPDATE ".$dbC->db_usersTable." SET level = 1 WHERE id = ".$idreprez);
    mysqli_query($_SESSION['connection'], "UPDATE ".$dbC->db_usersTable." SET hospid = ".$_GET['id']." WHERE id = ".$idreprez);
}

function showRequests($dbC){
    $result = mysqli_query($_SESSION['connection'], "SELECT id,name,address,phone,idreprez FROM ".$dbC->db_clinicsReqsTable);
    $x=0;
    include_once $_SERVER['DOCUMENT_ROOT']."/models/request.php";
    while($res = mysqli_fetch_row($result)){
        showRequest($res[0],$res[1],$res[2],$res[3],$res[4], $x);
        if($x == 0){
            $x = 1;
        }
        else{
            $x = 0;
        }
    }
}

?>
<?php

function tryToCreateRequest($name, $address, $phone, $emphone, $dbC){
    if($emphone != ""){
        mysqli_query($_SESSION['connection'], "INSERT INTO ".$dbC->db_clinicsReqsTable."(name, address, phone, idreprez, hasemergency, emergency) VALUES ('".$name."', '".$address."','".$_SESSION['user_id']."','".$phone."', '1', '".$emphone."')");
    }
    else {
        mysqli_query($_SESSION['connection'], "INSERT INTO ".$dbC->db_clinicsReqsTable."(name, address, phone, idreprez, hasemergency, emergency) VALUES ('".$name."', '".$address."','".$_SESSION['user_id']."','".$phone."', '0', '-1')");
    }
}

?>
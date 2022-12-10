<?php

function dbConnect($dbC){

        $connection = mysqli_connect($dbC->db_host, $dbC->db_username, $dbC->db_password);
        if($connection){
            $connection->query("CREATE DATABASE IF NOT EXISTS ".$dbC->db_name.";");
            $connection = mysqli_connect($dbC->db_host, $dbC->db_username, $dbC->db_password, $dbC->db_name);
            $_SESSION['connection'] = $connection;
            //$connection->query("CREATE SCHEMA IF NOT EXISTS ".$dbC->db_schema);
            $connection->query("CREATE TABLE IF NOT EXISTS ".$dbC->db_usersTable."( id SERIAL primary key, username Varchar(255) not null, password Varchar(255) not null, fullname Varchar(255) not null, email Varchar(255), hasRequest Integer default 0, level Integer default 0, hospid Integer default -1)");
            //mysqli_query($dbC, "CREATE TABLE IF NOT EXISTS ".$dbC->db_schema.".".$dbC->db_hospTable."( id SERIAL primary key, owner Varchar(255) not null, title Varchar(255) not null, shortdescription Varchar(255) not null, longdescription Varchar(5000), datecreated timestamp NOT NULL DEFAULT now())");
            return true;
        }
        echo "No DB connection";
        return false;
}


?>

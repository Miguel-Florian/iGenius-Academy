<?php
$db['db_host']="localhost:3308";
$db['db_user']="root";
$db['db_name']="igenius";
$db['db_pass']="";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}
$connexion = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>
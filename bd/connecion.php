<?php 

 function connection() {
    $driver='mysql';
    $server="localhost";
    $user="root";
    $pass="";
    $dbName="lumia_ec_shop";
    $charset='utf8';
    $connec= mysqli_connect($server,$user,$pass,$dbName) or die ("Error al conectar".mysql_error());
    mysqli_set_charset($connec, $charset);
    return $connec;
   }
?> 

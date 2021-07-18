<?php

//datos de la conexion
$dataName = "localhost";
$usrName = "root";
$password = "";
$dbName = "colegio";

$cnx = mysqli_connect($dataName,$usrName,$password,$dbName);
if($cnx){
    echo "<script> console.log('se ha conectado a la base de datos')</script>";
}else{
    die("no se ha logrado realizar la conexion a la base de datos") . mysqli_error($cnx);
}



?>
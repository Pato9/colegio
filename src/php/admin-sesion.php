<?php

require_once('./conexion.php');

if(isset($_POST["rut"]) && isset($_POST["contrasena"])){

    $rut = mysqli_real_escape_string($cnx,$_POST["rut"]);
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT * FROM ADMINISTRADOR WHERE run='$rut' AND contrasena='$contrasena';";

    $nueva_consulta = mysqli_query($cnx,$sql);

    if($nueva_consulta){
        $resultado = mysqli_num_rows($nueva_consulta);
        //echo "cargando...";

        if($resultado>0){
            session_start();
           // echo "<script>
            //setTimeout(function(){window.location.href = '/colegio/admin-inicio.php'},2000);
            //</script>";
            echo 1;
        }else{
            echo 0;
        }

    }

   


}

?>
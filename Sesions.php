<?php
session_start();
require_once 'Conexion.php';
$bd = new Conexion(); 
$usuario = mysqli_real_escape_string($bd,$_POST['Usuario']);
$contra = mysqli_real_escape_string($bd,$_POST['contra']);
//$registros = $bd->query("Select Uname,Pass,Email from Usuarios");
$res = "Usuario No Valido" ;
//$registros = mysqli_query($bd,"Select Uname,Pass,Email from Usuarios"); 
$registros = $bd->query("SELECT Uname,Pass,Email,tipoUser FROM usuarios");
if ($registros->num_rows > 0 ){
    while($reg = mysqli_fetch_array($registros)){
        //echo $reg['ID'].'<br>';
        if($usuario == $reg['Uname'] && $contra == $reg['Pass']){
            $_SESSION['Usuario'] = $reg['Uname'];
            $_SESSION['Correo'] = $reg['Email'] ;
            $_SESSION['Tipo'] = $reg['tipoUser'];
            $_SESSION['NombrePersona'] = $reg['tipoUser'];
            $res = "Usuario Valido";
            break ; 
        }
    }
}
$bd->close();
$_SESSION['Err'] = $res ;
/*
echo 'Datos Recibidos<br>';
echo 'Nombre '.$usuario .'<br>'; 
echo 'Contra '.$contra .'<br>'; 
echo $res;
if($res == "Usuario Valido"){
   header('Location: Bienvenida.php');
}else{
    header('Location: Index.php');
}
*/
echo $res ; 
?>
<?php
include("../modelo/conexion.php");
$Id=$_POST["id"];
$Nombre=$_POST["nom"];
$apellido=$_POST["ape"];
$Correo=$_POST["cor"];

$sql="UPDATE DATOS_USUARIOS SET Nombre=:miNom, Apellido=:miApe, Correo=:micor WHERE Id=:miId";
$resultado=$base->prepare($sql);
$resultado->execute(array(":miId"=>$Id,":miNom"=>$Nombre,":miApe"=>$apellido,":micor"=>$Correo));

header("Location: ../settings2/index.php");



?>
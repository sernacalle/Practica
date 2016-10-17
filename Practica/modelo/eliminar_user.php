

<?php
include("conexion.php");
$Id=$_GET["Id"];
$base->query("DELETE FROM USUARIOS WHERE ID='$Id'");
header("Location:../settings2/index.php");

?>

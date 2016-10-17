
<?php

include("../modelo/conexion.php");
	$Id=$_POST["id"];
	$usuario=$_POST["usu"];
	$contrasenia= $_POST["contra"];
	$pass_cifrado=password_hash($contrasenia,PASSWORD_DEFAULT,array("cost"=>12));
	
	
			if ($contrasenia ==''){
			
	$sql="UPDATE USUARIOS SET Usuarios=:miUse WHERE Id=:miId";
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":miId"=>$Id,":miUse"=>$usuario));


			
			}else{
			
				$sql="UPDATE USUARIOS SET Usuarios=:miUse, Password=:miContra WHERE Id=:miId";
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":miId"=>$Id,":miUse"=>$usuario, ":miContra"=>$pass_cifrado));

			
			
			
				}
	
		


header("Location: ../settings2/index.php");

	
	
	
	

?>

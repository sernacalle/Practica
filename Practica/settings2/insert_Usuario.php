<?php
session_start();
if (!isset($_SESSION["usuario"])){
	header("location:../login.php");
	}
?>

<?php


	$usuario= $_POST["usu"];
	$contrasenia= $_POST["contra"];
	$pass_cifrado=password_hash($contrasenia,PASSWORD_DEFAULT,array("cost"=>12));
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		
		
		
		$sql="INSERT INTO USUARIOS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$base->prepare($sql);		
		
	
	$resultado->execute(array(":usu"=>$usuario, ":contra"=>$pass_cifrado));	
		
		echo "Registro insertado";
		header ("location:index.php");
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		echo "Línea del error: " . $e->getLine();
		die("Error" . $e->getMessage());

		
	}
	
	
	finally{
		
		$base=null;
		
		
	}

?>
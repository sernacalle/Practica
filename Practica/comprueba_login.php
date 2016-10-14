<?php

try {
		$base=new PDO ("mysql:host =localhost; dbname=pruebas", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM USUARIOS WHERE USUARIOS= :login AND PASSWORD= :password";
		$resultado=$base->prepare($sql);
		$login=htmlentities (addslashes($_POST["login"]));
		$password=htmlentities(addslashes($_POST["password"]));
		$resultado->bindValue(":login", $login);
		$resultado->bindValue(":password", $password);
		$resultado->execute();
		$numero_registro=$resultado->rowCount();
		
		
		
		if ($numero_registro!=0){
			
			//echo "<h2>Adelante!!</H2>";
			
			
			session_start();
			$_SESSION["usuario"]=$_POST["login"];
			header("location:Usuario_Registrados.php");
			
			}else{
				
				header("location:login.php");
				//echo $numero_registro;
				}
}
	
	catch (Exception $e){
		
		die (" Error: " .$e->getMessage());
		
		}


?>

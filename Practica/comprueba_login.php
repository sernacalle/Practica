<?php

try {
		$login=htmlentities(addslashes($_POST["login"]));
		$password=htmlentities(addslashes($_POST["password"]));
		
		$base=new PDO ("mysql:host =localhost; dbname=pruebas", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM USUARIOS WHERE USUARIOS= :login";
	
		
			
		
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":login"=>$login));
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
				
					if(password_verify($password, $registro['PASSWORD']));{
				$numero_registro=$resultado->rowCount();
			}
			
		
		}
		
		
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

<?php

	require_once ("Modelo/Usuarios_modelo.php");
	
	$usuario= new Usuarios_modelo();
	$matrizUsuarios=$usuario->get_usuarios();
	
	require_once ("vista/usuarios_view.php");


?>
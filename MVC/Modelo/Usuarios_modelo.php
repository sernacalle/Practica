<?php

	class Usuarios_modelo{
		private $db;
		private $usuarios;
		
		public function __construct(){
			
			require_once("Modelo/Conectar.php");
			$this->db=Conectar::conexion();
			
			$this->usuarios=array();
			
			}
		
		public function get_usuarios(){
			
			$consulta=$this->db->query ("SELECT * FROM usuarios");
			while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				$this->usuarios[]=$filas;
				}
				return $this->usuarios;
			
			}
		
		}
?>
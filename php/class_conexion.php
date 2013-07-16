<?php 
	class conexion
	{
		private $servidor="localhost";
		private $usuario="root";
		private $password="";
		private $bd="check_list";
		private $conectar;
		
		/*Otras variables de contenido*/
		private $titulo;
		private $id, $tabla, $condicion, $consulta, $campos, $datos, $perfil;

		/*
		public function __construct($tit)
		{
			$this->titulo=$tit;
		}*/
		
		public function conexion()
		{
			if(!isset($this->conectar))
			{
				/*$this->conectar=mysql_connect("localhost", "root","")or die ("Error al conectar".mysql_error());
				mysql_select_db("check_list", $this->conectar)or die ("Error al selecconar BD".mysql_error());*/
				$this->conectar=mysql_connect($this->servidor, $this->usuario, $this->password)or die ("Error al conectar".mysql_error());
				mysql_select_db($this->bd, $this->conectar)or die ("Error al selecconar BD".mysql_error());
				
			}
			return $this->conectar;
		}
		
		public function consulta_select($tabla)
		{
			return $resultado=mysql_query("select * from  $tabla");
		}
		
		public function  cuenta_registro($consulta)
		{
			$this->consulta=$consulta;
			return mysql_num_rows($this->consulta);
			return $numero;
		}
		
		public function consulta_general($consulta)
		{
			$this->consulta=$consulta;
			$resultado= mysql_query($this->consulta);
			return $resultado;
		}
		
		public function crear_array($consulta)
		{
			$arreglo= mysql_fetch_array($consulta);
			return $arreglo;
		}
		
		public function inserta_datos($tabla, $campos, $datos)
		{
			return mysql_query("INSERT INTO $tabla ($campos)values ($datos)");
		}
		
		public function eliminar_datos($id, $tabla, $condicion)
		{
			$this->id=$id;
			$this->tabla=$tabla;
			$this->condicion=$condicion;
			return mysql_query("DELETE FROM $this->tabla WHERE $this->condicion");
		}
		
		public function editar_datos($tabla, $campos, $condicion)
		{
			$this->tabla=$tabla;
			$this->campos=$campos;
			$this->condicion=$condicion;
			
			return mysql_query("UPDATE $this->tabla SET $this->campos WHERE $this->condicion ");
			
		}
		
		
		
		public function estatus($estatus)
		{
			if($estatus==1)
			{$estatus="Activo";}
			else
			{$estatus="Inactivo";}
			
			return $estatus;
		}
		
		public function estado($estado)
		{
			if($estado==1)
			{$estado="Conectado";}
			else
			{$estado="No Conectado";}
			
			return $estado;
		}
		
		public function perfiles($perfil)
		{
			$this->perfil=$perfil;
			
			if($this->perfil==1)
			{$p="Root";}
			if($this->perfil==2)
			{$p="Controller";}
			if($this->perfil==3)
			{$p="Administrador";}
			if($this->perfil==4)
			{$p="Controller Admin";}
			return $p;
		}
	
	
	/*Funciones de  estilo*/
	
	public function titulos($titulo)
	{
		$this->titulo=$titulo;
		return '<b style="text-align:center">'.$this->titulo.'</b>';	
	}
		
	}

	


?>
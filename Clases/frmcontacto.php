<?php
require_once ('inc/dbc.php');

class frmContacto
{
	
	var $id;
	var $nombre;
	var $tel;
	var $email;
	var $pais;
	var $estado;
	var $comentarios;
	var $fecha;
	
	
	var $tabla="frmcontacto";
	
	
	function __construct ($id=0,$nombre='',$tel='',$email='',$pais='',$estado='',$comentarios='',$fecha='')
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->tel = $tel;
		$this->email = $email;
		$this->pais = $pais;
		$this->estado = $estado;
		$this->comentarios = $comentarios;
		$this->fecha = $fecha;
	}
	
	
	function insertar () {
		$conexion = new dbc();
		$result = $conexion->prepare("INSERT INTO ".$this->tabla." (nombre,tel,email,pais,estado,comentarios,fecha) VALUES (?,?,?,?,?,?,?)");
		$dateRegister = date('d-m-Y');
		$result->bind_param("sssssss",$this->nombre,$this->tel,$this->email,$this->pais,$this->estado,$this->comentarios,$dateRegister);
		$result->execute();
		$nwid = $result->insert_id;
		if ($nwid) {
			$this->id = $nwid;
		}
		$result->close();
		return $nwid;
	}
	
	
	function modificar ()
	{
		$conexion = new dbc();
		$result = $conexion->prepare("UPDATE ".$this->tabla." SET nombre = ?, tel = ?, email = ?, pais = ?, estado = ?, comentarios = ?, fecha = ? WHERE idFrmContacto = ?");
		$dateRegister = date('d-m-Y');
		$result->bind_param("sssssssi",$this->nombre,$this->tel,$this->email,$this->pais,$this->estado,$this->comentarios,$dateRegister,$this->id);
		$result->execute();
		$result->close();
		return $this->id;
	}
	
	
	function eliminar ()
	{
		$conexion = new dbc();
		$result = $conexion->prepare("DELETE FROM ".$this->tabla." WHERE idFrmContacto = ?");
		$result->bind_param("i",$this->id);
		$result->execute();
		$result->close();
	}
	
	
	function obtener ()
	{
		$conexion = new dbc();
		$result = $conexion->prepare("SELECT idFrmContacto,nombre,tel,email,pais,estado,comentarios,fecha FROM ".$this->tabla." WHERE idFrmContacto=?");
		$result->bind_param('i', $this->id);
		$result->execute();
		$result->bind_result($this->id,$this->nombre,$this->tel,$this->email,$this->pais,$this->estado,$this->comentarios,$this->fecha);
		$result->fetch();
		$result->close();

	}
	
	function listar ()
	{
		$conexion = new dbc();
		$result = $conexion->query("SELECT idFrmContacto,nombre,tel,email,pais,estado,comentarios,fecha FROM ".$this->tabla);
		$resultados =array();
		while($row = $result->fetch_assoc()) {
			$resultados[$row['idFrmContacto']] = $row;
		}
		$result->free();
		
		return $resultados;
	}
	
	
}
?>
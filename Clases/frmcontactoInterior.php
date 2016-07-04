<?php
require_once ('inc/dbc.php');

class frmContactoInterior
{
	
	var $id;
	var $nombre;
	var $tel;
	var $email;
	var $comentarios;
	var $titulo;
	var $fecha;
	
	
	var $tabla="frmcontactointerior";
	
	
	function __construct ($id=0,$nombre='',$tel='',$email='',$comentarios='',$titulo='',$fecha='')
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->tel = $tel;
		$this->email = $email;
		$this->comentarios = $comentarios;
		$this->titulo = $titulo;
		$this->fecha = $fecha;
	}
	
	
	function insertar () {
		$conexion = new dbc();
		$result = $conexion->prepare("INSERT INTO ".$this->tabla." (nombre,tel,email,comentarios,titulo,fecha) VALUES (?,?,?,?,?,?)");
		$dateRegister = date('d-m-Y');
		$result->bind_param("ssssss",$this->nombre,$this->tel,$this->email,$this->comentarios,$this->titulo,$dateRegister);
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
		$result = $conexion->prepare("UPDATE ".$this->tabla." SET nombre = ?, tel = ?, email = ?, comentarios = ?, titulo = ?, fecha = ? WHERE idFrmContactoInterior = ?");
		$dateRegister = date('d-m-Y');
		$result->bind_param("ssssi",$this->nombre,$this->tel,$this->email,$this->comentarios,$this->titulo,$dateRegister,$this->id);
		$result->execute();
		$result->close();
		return $this->id;
	}
	
	
	function eliminar ()
	{
		$conexion = new dbc();
		$result = $conexion->prepare("DELETE FROM ".$this->tabla." WHERE idFrmContactoInterior = ?");
		$result->bind_param("i",$this->id);
		$result->execute();
		$result->close();
	}
	
	
	function obtener ()
	{
		$conexion = new dbc();
		$result = $conexion->prepare("SELECT idFrmContactoInterior,nombre,tel,email,comentarios,titulo,fecha FROM ".$this->tabla." WHERE idFrmContactoInterior=?");
		$result->bind_param('i', $this->id);
		$result->execute();
		$result->bind_result($this->id,$this->nombre,$this->tel,$this->email,$this->comentarios,$this->titulo,$this->fecha);
		$result->fetch();
		$result->close();

	}
	
	function listar ()
	{
		$conexion = new dbc();
		$result = $conexion->query("SELECT idFrmContactoInterior,nombre,tel,email,comentarios,titulo,fecha FROM ".$this->tabla);
		$resultados =array();
		while($row = $result->fetch_assoc()) {
			$resultados[$row['idFrmContactoInterior']] = $row;
		}
		$result->free();
		
		return $resultados;
	}
	
}
?>
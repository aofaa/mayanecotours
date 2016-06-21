<?php
require_once ('inc/dbc.php');

class frmContactoInterior
{
	
	var $id;
	var $nombre;
	var $tel;
	var $email;
	var $comentarios;
	
	
	var $tabla="frmcontactointerior";
	
	
	function __construct ($id=0,$nombre='',$tel='',$email='',$comentarios='')
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->tel = $tel;
		$this->email = $email;
		$this->comentarios = $comentarios;
	}
	
	
	function insertar () {
		$conexion = new dbc();
		$result = $conexion->prepare("INSERT INTO ".$this->tabla." (nombre,tel,email,comentarios) VALUES (?,?,?,?)");
		$result->bind_param("ssss",$this->nombre,$this->tel,$this->email,$this->comentarios);
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
		$result = $conexion->prepare("UPDATE ".$this->tabla." SET nombre = ?, tel = ?, email = ?, comentarios = ? WHERE idFrmContactoInterior = ?");
		$result->bind_param("ssssi",$this->nombre,$this->tel,$this->email,$this->comentarios,$this->id);
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
		$result = $conexion->prepare("SELECT idFrmContactoInterior,nombre,tel,email,comentarios FROM ".$this->tabla." WHERE idFrmContactoInterior=?");
		$result->bind_param('i', $this->id);
		$result->execute();
		$result->bind_result($this->id,$this->nombre,$this->tel,$this->email,$this->comentarios);
		$result->fetch();
		$result->close();

	}
	
	function listar ()
	{
		$conexion = new dbc();
		$result = $conexion->query("SELECT idFrmContactoInterior,nombre,tel,email,comentarios FROM ".$this->tabla);
		$resultados =array();
		while($row = $result->fetch_assoc()) {
			$resultados[$row['idFrmContactoInterior']] = $row;
		}
		$result->free();
		
		return $resultados;
	}
	
}
?>
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
	
	
	var $tabla="frmcontacto";
	
	
	function __construct ($id=0,$nombre='',$tel='',$email='',$pais='',$estado='',$comentarios='')
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->tel = $tel;
		$this->email = $email;
		$this->pais = $pais;
		$this->estado = $estado;
		$this->comentarios = $comentarios;
	}
	
	
	function insertar () {
		$conexion = new dbc();
		$result = $conexion->prepare("INSERT INTO ".$this->tabla." (nombre,tel,email,pais,estado,comentarios) VALUES (?,?,?,?,?,?)");
		$result->bind_param("ssssss",$this->nombre,$this->tel,$this->email,$this->pais,$this->estado,$this->comentarios);
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
		$result = $conexion->prepare("UPDATE ".$this->tabla." SET nombre = ?, tel = ?, email = ?, pais = ?, estado = ?, comentarios = ? WHERE idFrmContacto = ?");
		$result->bind_param("ssssssi",$this->nombre,$this->tel,$this->email,$this->pais,$this->estado,$this->comentarios,$this->id);
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
		$result = $conexion->prepare("SELECT idFrmContacto,nombre,tel,email,pais,estado,comentarios FROM ".$this->tabla." WHERE idFrmContacto=?");
		$result->bind_param('i', $this->id);
		$result->execute();
		$result->bind_result($this->id,$this->nombre,$this->tel,$this->email,$this->pais,$this->estado,$this->comentarios);
		$result->fetch();
		$result->close();

	}
	
	function listar ()
	{
		$conexion = new dbc();
		$result = $conexion->query("SELECT idFrmContacto,nombre,tel,email,pais,estado,comentarios FROM ".$this->tabla);
		$resultados =array();
		while($row = $result->fetch_assoc()) {
			$resultados[$row['idFrmContacto']] = $row;
		}
		$result->free();
		
		return $resultados;
	}
	
	
}
?>
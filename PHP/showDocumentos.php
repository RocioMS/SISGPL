<?php 
require 'config/conexion.php';
	$sql="SELECT (SELECT NOMBRE_CATEGORIA FROM tipo_entregable WHERE tipo_entregable.ID_CATEGORIA=entregable.ID_CATEGORIA) as NOMBRE,(SELECT CONCAT(NOMBRE_PERSONAL,' ',APELLIDO_PERSONAL) FROM personal WHERE personal.ID_PERSONAL=entregable.ID_PERSONAL) as RESPONSABLE,NOMBRE_DOCUMENTO,VERSION_DOCUMENTO,COMENTARIO_DOCUMENTO,DATECREATED FROM entregable WHERE ID_PROYECTO='20' "

 ?>
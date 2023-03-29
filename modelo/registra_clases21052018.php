<?php
require_once('bd.php');

$accion = $_GET["submit"];
$nameclass = $_GET["nombreclas"];
$horainicio = $_GET["horain"];
$horafin = $_GET["horafi"];
$direccion = $_GET["direcname"];
$id_usuario =  $_SESSION["id"];
$tipoclases = $_GET["tipoclases"];
//coordenadas
$ltd = $_GET["Latitude1"];
$lng = $_GET["Longitude1"];

//$id_usuario =  $_SESSION["id"];
//echo $id_usuario;

switch ($_GET["op"]) {

	case 'Registrarclase':

			$sql1=@mysql_query("INSERT INTO coordenadas(latitud, longitud) VALUES ('".$ltd."','".$lng."')");
				$coordenadaid = mysql_insert_id($db) or die (mysql_error());
			$sql=@mysql_query("INSERT INTO registro_clase(nombre_clase_instructor, horar_clase_inicio, hora_clase_fin, direccion, id_tipo_clases, id_instructor_clase, id_coordenadas) VALUES ('".$nameclass."','".$horainicio."','".$horafin."','".$direccion."','".$tipoclases."','".$id_usuario."','".$coordenadaid."')");
			//$sql=@mysql_query("INSERT INTO coordenadas(latitud, longitud ) VALUES ('".$ltd."','".$lng."')");
			
			
		
		
			$out['id'] = "ok";
			echo(json_encode($out));
		
	break;

	case 'getmarker':


		$sql=mysql_query("SELECT * FROM coordenadas");
		 //$i=0;

		$rows = array();
		while($row = mysql_fetch_array($sql)){
						
			$rows[] = $row;
			
			//$i++;
		}
		echo(json_encode($rows));

	break;

	case 'gettipoclases':

	$sql=mysql_query("SELECT * FROM tipo_clases");
	while($row=mysql_fetch_array($sql)){
		$out["clases"][] = array("id"=>$row["id"], "nombre_clases"=>strtoupper($row["nombre_clases"]));
	}
	echo json_encode($out);

	
	
	break;
}






?>

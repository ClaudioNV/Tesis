<?php
require_once('bd.php');

$accion = $_GET["submit"];
$nameclass = $_GET["nombreclas"];
$horainicio = $_GET["horain"];
$horafin = $_GET["horafinal"];
$direccion = $_GET["direcname"];
$id_usuario =  $_SESSION["id"];
$tipoclases = $_GET["tipoclases"];
$idclases = $_GET["idclass"];
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


		$sql=mysql_query("SELECT
							r.id as id,
							u.username as instructor,
							c.latitud as latitud,
							u.id as userid,
							c.longitud as longitud,
							r.nombre_clase_instructor as nombre_clase
							FROM registro_clase as r
							left join coordenadas as c on r.id_coordenadas = c.id
							left join usuario as u on u.id = r.id_instructor_clase and u.id_tipo_usuario=1
							WHERE u.id ='".$id_usuario."' ");
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

	case 'datosclases':

		$sql=mysql_query("SELECT 
							r.id as id,
							r.nombre_clase_instructor as nombreclases,
							r.horar_clase_inicio as hora1,
							r.hora_clase_fin as hora2,
							r.direccion as direccion,
							u.username as instructor,
							u.id as userid,
							c.latitud as latitud,
							c.longitud as longitud,
							t.id as idtipo,
							t.nombre_clases as tipoclases
							FROM registro_clase as r
							left join tipo_clases as t on t.id = r.id_tipo_clases
							left join coordenadas as c on r.id_coordenadas = c.id
							left join usuario as u on u.id = r.id_instructor_clase and u.id_tipo_usuario=1
							WHERE r.id ='".$idclases."' ");
		 //$i=0;

		$rows = array();
		while($row = mysql_fetch_array($sql)){
						
			$rows[] = $row;
			
			
			//$i++;
		}
		echo(json_encode($rows));

	break;

	case 'upClase':

	$nameclase = $_GET["nombre"];
	$horain = $_GET["inicio"];
	$horaf = $_GET["fin"];
	$direccion = $_GET["direccion"];
	$idclases = $_GET["clase"];
	$idregistro = $_GET["idregistro"];
//$ltd = $_GET["Latitude1"];
//$lng = $_GET["Longitude1"];

		$sql=mysql_query("UPDATE registro_clase set nombre_clase_instructor = '".$nameclase."' , horar_clase_inicio = '".$horain."', hora_clase_fin = '".$horaf."' ,direccion = '".$direccion."'
		  WHERE id ='".$idclases."'");
		//$sql=mysql_query("UPDATE registro_clase set nombre_clase_instructor = '".$nombre."', horar_clase_inicio = '".$horain."', hora_clase_fin = '".$horaf."' ,direccion = '".$direccion."',id_tipo_clases = '".$idclases."',
		 //$i=0;

		$rows = array();
		while($row = mysql_fetch_array($sql)){
						
			$rows[] = $row;
			
			
			//$i++;
		}
		echo(json_encode($rows));

	break;
	case 'getclases':


		$sql=mysql_query("SELECT
							r.id as id,
							r.nombre_clase_instructor as nombreclases,
							r.horar_clase_inicio as hora1,
							r.hora_clase_fin as hora2,
							r.direccion as direccion,
							u.username as instructor,
							u.id as userid,
							c.latitud as latitud,
							c.longitud as longitud
							FROM registro_clase as r
							left join coordenadas as c on r.id_coordenadas = c.id
							left join usuario as u on u.id = r.id_instructor_clase and u.id_tipo_usuario=1 WHERE horar_clase_inicio >= '".date('Y-m-d H:i:s')."' AND id_tipo_clases = '".$_GET["idClase"]."'
							");
		 //$i=0;

		$rows = array();
		while($row = mysql_fetch_array($sql)){
						
			$rows[] = $row;
			
			//$i++;
		}
		echo(json_encode($rows));

	break;
	
	case 'muestradatosclases':

		$sql=mysql_query("SELECT 
							r.id as id,
							r.nombre_clase_instructor as nombre_clases,
							r.horar_clase_inicio as hora1,
							r.hora_clase_fin as hora2,
							r.direccion as direccion,
							u.username as instructor1,
							u.id as userid,
							c.latitud as latitud,
							c.longitud as logitud,
							t.id as idtipo,
							t.nombre_clases as tipoclases
							FROM registro_clase as r
							left join tipo_clases as t on t.id = r.id_tipo_clases
							left join coordenadas as c on r.id_coordenadas = c.id
							left join usuario as u on u.id = r.id_instructor_clase and u.id_tipo_usuario=1
							WHERE r.id = '".$class."'");

					$rows = array();
					while($row = mysql_fetch_array($sql)){
						$rows[] = $row;
					}
					echo(json_encode($rows));
	break;
}






?>

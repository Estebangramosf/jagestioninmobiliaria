
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

function portada($servicio_id, $servicio, $tipoServicio){
	$modificar = "";
	if (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="1") {
		$modificar = '<a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
		$eliminar = '<a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>';
	}

	$salida = "";
	//Se concatena todo para tener mayor orden
	$salida = $salida . '<div class="col-md-4" align="center">';
	$salida = $salida . '<h2>' . $servicio["nombre"] . '</h2>';
	$salida = $salida . '<img src="' . $servicio["imagen"] .'" alt="' . $servicio["nombre"] . '"class="img-rounded" width=65% height=65%>';
	$salida = $salida . '<p>' . $servicio["introDescripcion"] . '</p>';
	$salida = $salida . '<p><a href="gestion.php?id=' . $servicio_id . "&ts=" . $tipoServicio .'" role="button" class="btn btn-info">Ver detalles</a></p>' . $modificar.$eliminar . '
	</div>';
	// . '<strong> - Ahora:$' . $servicio["precioOferta"] . '</strong></a></p>'; 
	//$salida = $salida . '<p>Ahorras:$' . ($servicio["precio"]-$servicio["precioOferta"]) . '</p></div>';

	return $salida;
}

function conectaBase(){
	//$conexion=mysql_connect("localhost","root","root") or die("Error en la Conexion del Motor de Bd".mysql_error());
	//$base=mysql_select_db("jagi") or die("Error en la Conexion en la Base de Datos".mysql_error());
/*
}	$conexion=mysqli_connect("357384N","root","","jagi");
	
para la del hosting
*/
}	$conexion=mysqli_connect("mysql.hostinger.es","u443371958_jagi","jagi2015","u443371958_jagi");


function fecha_base($fecha)
{
	$dia=substr($fecha,0,2);
	$mes=substr($fecha,3,2);
	$anho=substr($fecha,6,4);
	$fecha_base=$anho."-".$mes."-".$dia;
	return $fecha_base;
}
function fecha_normal($fecha)
{
	$anho=substr($fecha,0,4);
	$mes=substr($fecha,5,2);
	$dia=substr($fecha,8,2);
	$fecha_normal=$dia."-".$mes."-".$anho;
	return $fecha_normal;
}
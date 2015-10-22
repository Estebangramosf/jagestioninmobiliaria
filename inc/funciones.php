
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
}	$conexion=mysqli_connect("localhost","root","root","jagi");

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




$vCasas = array();
$vCasas[001] = array(
"nombre" => "Casa 2 pisos",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "40mts cuadrados, sector industrial cercano.",
"imagen" => "img/galerias/exterioresCasas/1.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vCasas[002] = array(
"nombre" => "Casa 2 pisos",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresCasas/2.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vCasas[003] = array(
"nombre" => "Casa grande 2 pisos",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresCasas/3.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vCasas[004] = array(
"nombre" => "Casa grande 2 pisos",
"introDescripcion" => "Casa grande de 2 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresCasas/4.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vCasas[005] = array(
"nombre" => "Casa estilo mediterraneo",
"introDescripcion" => "Casa grande de 2 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresCasas/5.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vCasas[006] = array(
"nombre" => "Casa grande de 2 pisos",
"introDescripcion" => "Casa con terraza amoblada",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresCasas/6.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vCasas[007] = array(
"nombre" => "Casa grande de 3 pisos",
"introDescripcion" => "Mansión de 3 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresCasas/7.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vCasas[008] = array(
"nombre" => "Casa grande de 3 pisos",
"introDescripcion" => "Mansión de 3 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresCasas/8.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);

$aCasas = array();
$aCasas[001] = array(
"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/1.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aCasas[002] = array(
"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/2.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aCasas[003] = array(
"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/3.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aCasas[004] = array(
"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/4.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aCasas[005] = array(
"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/5.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aCasas[006] = array(
"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/6.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aCasas[007] = array(
"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/7.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aCasas[008] = array(
"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/8.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);

$vDepartamentos = array();
$vDepartamentos[001] = array(
"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/1.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vDepartamentos[002] = array(
"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/2.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vDepartamentos[003] = array(
"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/3.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vDepartamentos[004] = array(
"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/4.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vDepartamentos[005] = array(
"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/5.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vDepartamentos[006] = array(
"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/6.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vDepartamentos[007] = array(
"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/7.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vDepartamentos[008] = array(
"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/8.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);


$aDepartamentos = array();
$aDepartamentos[001] = array(
"nombre" => "Arriendo departamento",
"introDescripcion" => "Relajate en el mejor momento que puedas",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/1.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aDepartamentos[002] = array(
"nombre" => "Arriendo departamento",
"introDescripcion" => "Disfruta de uno de los mejores platos de la casa",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/2.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aDepartamentos[003] = array(
"nombre" => "Arriendo departamento",
"introDescripcion" => "Si quieres comer bien, esto no te lo puedes perder",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/3.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aDepartamentos[004] = array(
"nombre" => "Arriendo departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/4.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aDepartamentos[005] = array(
"nombre" => "Arriendo departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/5.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aDepartamentos[006] = array(
"nombre" => "Arriendo departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/6.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aDepartamentos[007] = array(
"nombre" => "Arriendo departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/7.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$aDepartamentos[008] = array(
"nombre" => "Arriendo departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/8.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);


$publicacionesDestacadas = array();
$publicacionesDestacadas[001] = array(

"nombre" => "Casa 2 pisos",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresCasas/2.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")

);
$publicacionesDestacadas[002] = array(

"nombre" => "Arriendo departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresDepartamentos/8.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")

);
$publicacionesDestacadas[003] = array(

"nombre" => "Departamento",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/exterioresDepartamentos/8.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")

);
$publicacionesDestacadas[004] = array(

"nombre" => "Terreno",
"introDescripcion" => "Mansión de 3 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/8.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")

);
$publicacionesDestacadas[005] = array(

"nombre" => "Arriendo de Casa",
"introDescripcion" => "Ahorra el tiempo de limpieza",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/interioresCasas/1.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")

);
$publicacionesDestacadas[006] = array(

"nombre" => "Terreno",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/3.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")

);
$publicacionesDestacadas[007] = array(

"nombre" => "Terreno",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "40mts cuadrados, sector industrial cercano.",
"imagen" => "img/galerias/terrenos/1.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")

);
$publicacionesDestacadas[008] = array(

"nombre" => "Terreno",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/2.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")

);

$vTerrenos = array();
$vTerrenos[001] = array(
"nombre" => "Terreno",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "40mts cuadrados, sector industrial cercano.",
"imagen" => "img/galerias/terrenos/1.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vTerrenos[002] = array(
"nombre" => "Terreno",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/2.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vTerrenos[003] = array(
"nombre" => "Terreno",
"introDescripcion" => "Casa amoblada de 2 pisos.",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/3.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vTerrenos[004] = array(
"nombre" => "Terreno",
"introDescripcion" => "Casa grande de 2 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/4.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vTerrenos[005] = array(
"nombre" => "Terreno",
"introDescripcion" => "Casa grande de 2 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/5.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vTerrenos[006] = array(
"nombre" => "Terreno",
"introDescripcion" => "Casa con terraza amoblada",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/6.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vTerrenos[007] = array(
"nombre" => "Terreno",
"introDescripcion" => "Mansión de 3 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/7.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);
$vTerrenos[008] = array(
"nombre" => "Terreno",
"introDescripcion" => "Mansión de 3 pisos",
"descripcion" => "No te puedes perder ...",
"imagen" => "img/galerias/terrenos/8.jpg",
"precio" => number_format(28000000,0,",","."),
"precioOferta" => number_format(30000000,0,",",".")
);

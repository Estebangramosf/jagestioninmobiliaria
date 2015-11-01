<?php
include("funciones.php");
conectaBase();
if (isset($_POST['opciones'])) {
	$tipoConsulta = $_POST['opciones'];
	$password = addslashes($_REQUEST['password']);
	$usuario = addslashes($_REQUEST['email']);
	if ($tipoConsulta == "1") {
		$sql="select * from cli_usuarios where cli_correo='".$usuario."' and cli_clave='".$password."'";
	}else if ($tipoConsulta == "2") {
		$sql="select * from ja_usuarios where ja_correo='".$usuario."' and ja_clave='".$password."'";
	}
	$registros=mysqli_query($conexion, $sql);
	$datos=mysqli_fetch_array($registros);
	$total=mysqli_num_rows($registros);
}
$validar=2;//2 estado=desactivado
if($total==0){
	header("Location:../error-desconocido.php");
	exit;
}else{
	if($datos['ja_estado']==$validar){
		header("Location:../error-desconocido.php");
		exit;
	}else{
		session_start();
		if ($tipoConsulta == "1") {
			$_SESSION['sesionActiva']=$datos['cli_nombre']." ".$datos['cli_apellido'];
			$_SESSION['idSesion']=$datos['cli_id'];
			$_SESSION['sesionNombre']=$datos['cli_nombre'];
			$_SESSION['sesionApellido']=$datos['cli_apellido'];
			$_SESSION['sesionRut']=$datos['cli_rut'];
			$_SESSION['sesionCorreo']=$datos['cli_correo'];
			$_SESSION['sesionClave']=$datos['cli_clave'];
			$_SESSION['sesionEstado']=$datos['cli_estado'];
			$_SESSION['sesionFoto']=$datos['cli_foto'];
			$_SESSION['sesionDireccion']=$datos['cli_direccion'];
			$_SESSION['sesionCiudad']=$datos['cli_ciudadorigen'];
			$_SESSION['sesionNacimiento']=$datos['cli_nacimiento'];
			$_SESSION['sesionNumerofono']=$datos['cli_numerofono'];
			$_SESSION['sesionNumerocasa']=$datos['cli_numerocasa'];
			$_SESSION['sesionGenero']=$datos['cli_genero'];
			$_SESSION['sesionEstadoCivil']=$datos['cli_estadocivil'];
			$_SESSION['tipoSesion']=$datos['cli_tipousuario'];			
			$_SESSION['fotoSesion']=$datos['cli_foto'];			
		}else if ($tipoConsulta == "2") {
			$_SESSION['sesionActiva']=$datos['ja_nombre']." ".$datos['ja_apellido'];
			$_SESSION['idSesion']=$datos['ja_id'];
			$_SESSION['sesionNombre']=$datos['ja_nombre'];
			$_SESSION['sesionApellido']=$datos['ja_apellido'];
			$_SESSION['sesionRut']=$datos['ja_rut'];
			$_SESSION['sesionCorreo']=$datos['ja_correo'];
			$_SESSION['sesionClave']=$datos['ja_clave'];
			$_SESSION['sesionEstado']=$datos['ja_estado'];
			$_SESSION['sesionFoto']=$datos['ja_foto'];
			$_SESSION['sesionDireccion']=$datos['ja_direccion'];
			$_SESSION['sesionCiudad']=$datos['ja_ciudadorigen'];
			$_SESSION['sesionNacimiento']=$datos['ja_nacimiento'];
			$_SESSION['sesionNumerofono']=$datos['ja_numerofono'];
			$_SESSION['sesionNumerocasa']=$datos['ja_numerocasa'];
			$_SESSION['sesionGenero']=$datos['ja_genero'];
			$_SESSION['sesionEstadoCivil']=$datos['ja_estadocivil'];
			$_SESSION['tipoSesion']=$datos['ja_tipousuario'];			
			$_SESSION['fotoSesion']=$datos['ja_foto'];		
		}		
		mysqli_free_result($registros);
		mysqli_close($conexion);		
		header("Location:../index.php");
		exit;
	}
}
?>
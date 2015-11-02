<?php 
include ("../inc/funciones.php");
	conectaBase();

if(isset($id)){
	$sql="DELETE FROM ja_usuarios WHERE ja_id=".$id;
	mysqli_query($sql);
	header("Location:formulario_usuario.php");
	exit;	
}		
		
switch($_REQUEST['accion']){
	case "Registrar": 
		
	$sql="SELECT * FROM cli_usuarios WHERE cli_correo='".$_REQUEST['correo']."'";
	$registros=mysqli_query($conexion, $sql);
	$total=mysqli_num_rows($registros);
	if($total==0){
		$nombre=$_FILES['frm_archivo']['name'];
		$tipo=$_FILES['frm_archivo']['type'];
		$tmp=$_FILES['frm_archivo']['tmp_name'];
			$sql="	INSERT INTO cli_usuarios 	(cli_nombre, 
												cli_apellido, 
												cli_rut, 
												cli_correo, 
												cli_clave, 
												cli_estado, 
												cli_foto, 
												cli_direccion, 
												cli_ciudad, 
												cli_nacimiento, 
												cli_numerofono, 
												cli_numerocasa, 
												cli_genero, 
												cli_estadocivil, 
												cli_tipousuario) 
							VALUES 				('".$_REQUEST['nombre']."',
												'".$_REQUEST['apellido']."',
												'".$_REQUEST['rut']."',
												'".$_REQUEST['correo']."',
												'".$_REQUEST['claveRep']."',
												'".$_REQUEST['estado']."',
												'".$_REQUEST['foto']."',
												'".$_REQUEST['direccion']."',
												'".$_REQUEST['ciudad']."',
												'".$_REQUEST['nacimiento']."',
												'".$_REQUEST['numerofono']."',
												'".$_REQUEST['numerocasa']."',
												'".$_REQUEST['genero']."',
												'".$_REQUEST['estadocivil']."',
												'".$_REQUEST['tipousuario']."')";
			mysqli_query($conexion, $sql);
			header("Location:../index.php?registro=ok");	
	}else{
		header("Location:../registro.php?error=1");
	}	
		break;		
	case "Modificar":
	
		//$nombre=$_FILES['frm_archivo']['name'];
		//$tipo=$_FILES['frm_archivo']['type'];
		//$tmp=$_FILES['frm_archivo']['tmp_name'];
		
		//if($nombre==""){
		if ($_REQUEST['tipousuario']=="1"||$_REQUEST['tipousuario']=="10"){						
			$sql="
					UPDATE 	ja_usuarios 
					SET 	ja_nombre='".$_REQUEST['nombre']."', 
							ja_apellido='".$_REQUEST['apellido']."', 
							ja_rut='".$_REQUEST['rut']."', 
							ja_correo='".$_REQUEST['correo']."', 
							ja_clave='".$_REQUEST['claveRep']."', 
							ja_estado='".$_REQUEST['estado']."', 
							ja_foto='".$_REQUEST['foto']."', 
							ja_direccion='".$_REQUEST['direccion']."', 
							ja_ciudad='".$_REQUEST['ciudad']."', 
							ja_nacimiento='".$_REQUEST['nacimiento']."', 
							ja_numerofono='".$_REQUEST['numerofono']."', 
							ja_numerocasa='".$_REQUEST['numerocasa']."', 
							ja_genero='".$_REQUEST['genero']."', 
							ja_estadocivil='".$_REQUEST['estadocivil']."', 
							ja_tipousuario='".$_REQUEST['tipousuario']."' 
					WHERE 	ja_id='".$_REQUEST['id']."'";
		}elseif ($_REQUEST['tipousuario']=="100") {
			$sql="
					UPDATE 	cli_usuarios 
					SET 	cli_nombre='".$_REQUEST['nombre']."', 
							cli_apellido='".$_REQUEST['apellido']."', 
							cli_rut='".$_REQUEST['rut']."', 
							cli_correo='".$_REQUEST['correo']."', 
							cli_clave='".$_REQUEST['claveRep']."', 
							cli_estado='".$_REQUEST['estado']."', 
							cli_foto='".$_REQUEST['foto']."', 
							cli_direccion='".$_REQUEST['direccion']."', 
							cli_ciudad='".$_REQUEST['ciudad']."', 
							cli_nacimiento='".$_REQUEST['nacimiento']."', 
							cli_numerofono='".$_REQUEST['numerofono']."', 
							cli_numerocasa='".$_REQUEST['numerocasa']."', 
							cli_genero='".$_REQUEST['genero']."', 
							cli_estadocivil='".$_REQUEST['estadocivil']."', 
							cli_tipousuario='".$_REQUEST['tipousuario']."' 
					WHERE 	cli_id='".$_REQUEST['id']."'";			
		}				
	//}else{
		//if($tipo=="image/jpeg"||$tipo=="image/gif"||$tipo=="image/png"||$tipo==""){
		//$sql="UPDATE usuarios SET rut='".$_REQUEST['frm_rut']."', nombre='".$_REQUEST['frm_nombre']."', ap_paterno='".$_REQUEST['frm_paterno']."', ap_materno='".$_REQUEST['frm_materno']."', fecha_nac='".fecha_base($_REQUEST['frm_fecha'])."', estado=".$_REQUEST['frm_estado'].", usuario='".$_REQUEST['frm_usuario']."', clave='".$_REQUEST['frm_clave']."', id_perfil='".$_REQUEST['frm_perfil']."', fotografia='".$nombre."' WHERE id_usuario=".$_REQUEST['id_usuario'];
		
			//}
		//}
		//move_uploaded_file($tmp,"imagenes/".$nombre);
		mysqli_query($conexion, $sql);
		header("Location:../login.php?exito");		
		
		break;	
					
	case "Eliminar":
		$sql="DELETE FROM usuarios WHERE id_usuario=".$_REQUEST['id_usuario'];
		mysqli_query($conexion, $sql);
		header("Location:formulario_usuario.php");		
	
		break;		
	case "Cancelar":
	header("Location:../index.php");
		break;				
}

?>
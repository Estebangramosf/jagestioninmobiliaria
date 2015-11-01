<?php 
include ("../inc/funciones.php");
	conectaBase();

if(isset($id)){
	$sql="DELETE FROM usuarios WHERE id_usuario=".$id;
	mysqli_query($sql);
	header("Location:formulario_usuario.php");
	exit;	
}		
		
switch($_REQUEST['accion']){
	case "Agregar": 
		/*
	$sql="select * from cli_usuarios where cli_correo='".$_REQUEST['correo']."'";
	$registros=mysqli_query($conexion, $sql);
	$total=mysqli_num_rows($registros);
		*/
	/*if($total==0){
		$nombre=$_FILES['frm_archivo']['name'];
		$tipo=$_FILES['frm_archivo']['type'];
		$tmp=$_FILES['frm_archivo']['tmp_name'];
		}*/

			//unset($imagenes);
			for ($i=1; $i<=10; $i++) {
				if ($_REQUEST['imagen'.$i]=="-"){					
					$_REQUEST['imagen'.$i]="img/FAVICON.png";
				}
			}
		
							
			$sql="	INSERT INTO ja_servicios	(srvc_tipo, 
												srvc_titulo, 
												srvc_introDescripcion, 
												srvc_descripcion, 
												srvc_precio, 
												srvc_descuentoPrecio, 
												srvc_comuna, 
												srvc_dormitorios, 
												srvc_banos, 
												srvc_superficie, 
												srvc_estacionamientos, 
												srvc_imagen1, 
												srvc_imagen2,
												srvc_imagen3,
												srvc_imagen4,
												srvc_imagen5,
												srvc_imagen6,
												srvc_imagen7,
												srvc_imagen8,
												srvc_imagen9,
												srvc_imagen10,												
												srvc_fechaPublicacion, 
												srvc_horaPublicacion,
												pk_srvc_idSesion,
												pk_srvc_tipoUsuario
												) 
					VALUES 						('".$_REQUEST['tipo']."',
												'".$_REQUEST['titulo']."',
												'".$_REQUEST['introDescripcion']."',
												'".$_REQUEST['descripcion']."',
												'".$_REQUEST['precio']."',
												'".$_REQUEST['descuentoPrecio']."',
												'".$_REQUEST['comuna']."',
												'".$_REQUEST['dormitorios']."',
												'".$_REQUEST['banos']."',
												'".$_REQUEST['superficie']."',
												'".$_REQUEST['estacionamientos']."',
												'".$_REQUEST['imagen1']."',
												'".$_REQUEST['imagen2']."',
												'".$_REQUEST['imagen3']."',
												'".$_REQUEST['imagen4']."',
												'".$_REQUEST['imagen5']."',
												'".$_REQUEST['imagen6']."',
												'".$_REQUEST['imagen7']."',
												'".$_REQUEST['imagen8']."',
												'".$_REQUEST['imagen9']."',
												'".$_REQUEST['imagen10']."',
												'".$_REQUEST['fechaPublicacion']."',
												'".$_REQUEST['horaPublicacion']."',
												'".$_REQUEST['idSesion']."',
												'".$_REQUEST['tipoUsuario']."'
												)";
			mysqli_query($conexion, $sql);
			header("Location:../panel.php?exito");	
	/*}else{
		header("Location:../registro.php?error=1");
	}	*/
		break;		
	case "Modificar":
	
		//$nombre=$_FILES['frm_archivo']['name'];
		//$tipo=$_FILES['frm_archivo']['type'];
		//$tmp=$_FILES['frm_archivo']['tmp_name'];
		
		//if($nombre==""){
			$sql="
					UPDATE 	ja_servicios 
					SET srvc_tipo='".$_REQUEST['tipo']."', 
							srvc_titulo='".$_REQUEST['titulo']."', 
							srvc_introDescripcion='".$_REQUEST['introDescripcion']."', 
							srvc_descripcion='".$_REQUEST['descripcion']."', 
							srvc_precio='".$_REQUEST['precio']."', 
							srvc_descuentoPrecio='".$_REQUEST['descuentoPrecio']."', 
							srvc_comuna='".$_REQUEST['comuna']."', 
							srvc_dormitorios='".$_REQUEST['dormitorios']."', 
							srvc_banos='".$_REQUEST['banos']."', 
							srvc_superficie='".$_REQUEST['superficie']."', 
							srvc_estacionamientos='".$_REQUEST['estacionamientos']."', 
							srvc_imagen1='".$_REQUEST['imagen1']."', 
							srvc_imagen2='".$_REQUEST['imagen2']."', 
							srvc_imagen3='".$_REQUEST['imagen3']."', 
							srvc_imagen4='".$_REQUEST['imagen4']."', 
							srvc_imagen5='".$_REQUEST['imagen5']."', 			
							srvc_imagen6='".$_REQUEST['imagen6']."', 
							srvc_imagen7='".$_REQUEST['imagen7']."', 
							srvc_imagen8='".$_REQUEST['imagen8']."', 
							srvc_imagen9='".$_REQUEST['imagen9']."', 
							srvc_imagen10='".$_REQUEST['imagen10']."', 																																	
							srvc_fechaPublicacion='".$_REQUEST['fechaPublicacion']."', 
							srvc_horaPublicacion='".$_REQUEST['horaPublicacion']."'
					WHERE 	srvc_id='".$_REQUEST['id']."'";
	//}else{
		//if($tipo=="image/jpeg"||$tipo=="image/gif"||$tipo=="image/png"||$tipo==""){
		//$sql="UPDATE usuarios SET rut='".$_REQUEST['frm_rut']."', nombre='".$_REQUEST['frm_nombre']."', ap_paterno='".$_REQUEST['frm_paterno']."', ap_materno='".$_REQUEST['frm_materno']."', fecha_nac='".fecha_base($_REQUEST['frm_fecha'])."', estado=".$_REQUEST['frm_estado'].", usuario='".$_REQUEST['frm_usuario']."', clave='".$_REQUEST['frm_clave']."', id_perfil='".$_REQUEST['frm_perfil']."', fotografia='".$nombre."' WHERE id_usuario=".$_REQUEST['id_usuario'];
		
			//}
		//}
		//move_uploaded_file($tmp,"imagenes/".$nombre);
		mysqli_query($conexion, $sql);
		header("Location:../panel.php?exito");		
		
		break;	
					
	case "Eliminar":
		$sql="DELETE FROM ja_servicios WHERE srvc_id=".$_REQUEST['id'];
		mysqli_query($conexion, $sql);
		header("Location:../panel.php");		
	
		break;		
	case "Cancelar":
	header("Location:../panel.php?cancelado");
		break;				
}

?>
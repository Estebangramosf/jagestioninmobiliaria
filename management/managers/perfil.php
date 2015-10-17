<?php   
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  
  if(isset($_REQUEST['cancelado'])){ 
    ?> <script languaje="javascript">alert("Acción cancelada");</script>" <?php
  }
  if(isset($_REQUEST['exito'])){ 
    ?> <script languaje="javascript">alert("Datos guardados correctamente");</script> <?php
  }  
}
if (isset($_SESSION['sesionActiva'])&&$_SESSION['tipoSesion']=="1"){
    include('inc/funciones.php');
    conectaBase();
      if ($_SESSION['tipoSesion'] == "100") {
        $sql="select * from cli_usuarios where cli_id='".$_SESSION['idSesion']."'";
      }else if ($_SESSION['tipoSesion'] == "10" || $_SESSION['tipoSesion'] == "1" ) {
        $sql="select * from ja_usuarios where ja_id='".$_SESSION['idSesion']."'";
      }
      conectaBase();
      $registros=mysqli_query($conexion, $sql);
      $datos=mysqli_fetch_array($registros);
      $total=mysqli_num_rows($registros);
      if ($_SESSION['tipoSesion'] == "100") {
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
        $_SESSION['sesionCiudad']=$datos['cli_ciudad'];
        $_SESSION['sesionNacimiento']=$datos['cli_nacimiento'];
        $_SESSION['sesionNumerofono']=$datos['cli_numerofono'];
        $_SESSION['sesionNumerocasa']=$datos['cli_numerocasa'];
        $_SESSION['sesionGenero']=$datos['cli_genero'];
        $_SESSION['sesionEstadoCivil']=$datos['cli_estadocivil'];
        $_SESSION['tipoSesion']=$datos['cli_tipousuario'];     
        $_SESSION['fotoSesion']=$datos['cli_foto'];       

      }else if ($_SESSION['tipoSesion'] == "1" || $_SESSION['tipoSesion'] == "10") {
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
        $_SESSION['sesionCiudad']=$datos['ja_ciudad'];
        $_SESSION['sesionNacimiento']=$datos['ja_nacimiento'];
        $_SESSION['sesionNumerofono']=$datos['ja_numerofono'];
        $_SESSION['sesionNumerocasa']=$datos['ja_numerocasa'];
        $_SESSION['sesionGenero']=$datos['ja_genero'];
        $_SESSION['sesionEstadoCivil']=$datos['ja_estadocivil'];
        $_SESSION['tipoSesion']=$datos['ja_tipousuario'];     
        $_SESSION['fotoSesion']=$datos['ja_foto'];  
      }
    $tituloPagina = "Perfil";
    $pagina = "Perfil";
    include('inc/header.php');
    //include('inc/carousel.php') ?>
          <!-- Perfil -->
    <div id="content" class="container">
        <div class="row">
          <article class="body">
            <h2>- Perfil -</h2>
          </article>
          <hr>
          <div style="" id="" class="">
            <div>
                <?php 
                  include("inc/informacionUsuario.php"); 
                ?>
            </div>
          </div>
          <br>
        </div>        
        <!-- /Perfil --> 
<?php
  include('inc/footer.php');
}else{
  header("Location:../clientes/perfil.php");
}
?>

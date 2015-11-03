<?php   
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $do = "";
  if(isset($_REQUEST['delete'])){
    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h3>Estimado Cliente:</h3><h4>Est&aacute; apunto de eliminar una publicaci&oacute;n, baje por el formulario y para confirmar la eliminaci&oacute;n presione <span class="btn btn-danger btn-xs">Eliminar</span></h4></div>';
    $do = "yes";    
  }
  if(isset($_REQUEST['cancelado'])){ 
    ?> <script languaje="javascript">alert("Acción cancelada");</script>" <?php
  }
  if(isset($_REQUEST['exito'])){ 
    ?> <script languaje="javascript">alert("Datos guardados correctamente");</script> <?php
  }  
}
if (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="1"){
    include('inc/funciones.php');
    $srvc_id = addslashes($_REQUEST["id"]);    
    conectaBase();

    if ($_SESSION['tipoSesion'] == "10" || $_SESSION['tipoSesion'] == "1" ) {
      $sql="select * from ja_servicios where srvc_id='".$srvc_id."'";
    }
      conectaBase();
      $registros=mysqli_query($conexion, $sql);
      $datos=mysqli_fetch_array($registros);
      $total=mysqli_num_rows($registros);

    $tituloPagina = "Modificar Servicio";
    $pagina = "Gesti&oacute;n";
    include('inc/header.php');
    //include('inc/carousel.php') ?>
          <!-- Perfil -->
    <div id="content" class="container">
      <article class="row">
        <article class="body">
          <h2>- Gestionar servicio -</h2>
        </article>
        <hr>
        <article id="contentIn">
          <?php 
            include("inc/informacionServicio.php"); 
          ?>
          <br>
        </article>
      </article>
        <!-- /Perfil --> 
<?php
  include('inc/footer.php');
}else{
  header("Location:../../index.php");
}
?>

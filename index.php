<?php include('inc/funciones.php');?>
<?php 
  if (isset($_REQUEST['registro'])){
    //echo '<script languaje="javascript">alert("EL REGISTRO SE HA COMPLETADO CON EXITO");</script>';
    //header("Location:index.php");
  }
  if (isset($_REQUEST['gana'])){
    echo '<div class="alert alert-danger">Estimado cliente, ya es cliete promotor.</div>';
  }
  if (isset($_REQUEST['update'])){
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Datos guardados correctamente.</h4></div>';
  }
  $tituloPagina = "Inicio";
  $pagina = "inicio";
  conectaBase();

  $sql="SELECT JS.srvc_id, JS.srvc_titulo, JS.srvc_introDescripcion, JS.srvc_imagen1, JS.srvc_imagen2, JS.srvc_imagen3, JS.srvc_descuentoPrecio, JS.pk_srvc_idSesion, JS.pk_srvc_tipoUsuario, CONCAT(CU.cli_nombre,' ',CU.cli_apellido) AS NombreCliente, CU.cli_tipoUsuario, CONCAT(JU.ja_nombre,' ',JU.ja_apellido) AS NombreManager, JU.ja_tipousuario
        FROM (SELECT * FROM `ja_servicios`) AS JS
        INNER JOIN cli_usuarios AS CU
        ON JS.pk_srvc_idsesion=CU.cli_id
        INNER JOIN ja_usuarios as JU
        ORDER BY srvc_id 
        DESC LIMIT 0,9";
  include('inc/header.php');
  include('inc/carousel.php'); 
?>
<script>
  $('body,html').animate({scrollTop: $(document).height(1200);}, 1000);
</script>
<div id="contentIn" class="container">  
  <article class="body">
    <h2>- Novedades -</h2>
    <hr>
  </article>
  <article id="" class="alert alert-default alert-dismissable">
    <?php include('inc/galeriaPromociones.php'); ?>    
  </article>
  <hr>
  <article class="body">
    <h2>- Publicaciones destacadas -</h2>
  </article>
  <hr>
    <!-- Index -->   
  <div class="row">
  	<?php 
      include("inc/detalleServicios.php");
      //este detalleServicios esta en las carpetas principales, en caso d modificar, revisar el de las carpetas management
    ?>
  </div>  
    <!-- /Index --> 
<?php include('inc/footer.php') ?>
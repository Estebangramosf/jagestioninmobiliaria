<?php include('inc/funciones.php');?>
<?php 
  if (isset($_REQUEST['registro'])){
    //echo '<script languaje="javascript">alert("EL REGISTRO SE HA COMPLETADO CON EXITO");</script>';
    //header("Location:index.php");
  }
  if (isset($_REQUEST['gana'])){
    echo '<script languaje="javascript">alert("ATENCION!:\nUsted ya se encuentra trabajando como Promotor.");</script>';
  }
  $tituloPagina = "Inicio";
  $pagina = "inicio";
  conectaBase();

    $sql="SELECT srvc_id, srvc_titulo, srvc_introDescripcion, srvc_imagen1, srvc_imagen2, srvc_imagen3, srvc_descuentoPrecio, pk_srvc_idSesion, pk_srvc_tipoUsuario, CONCAT(cli_usuarios.cli_nombre, ' ', cli_usuarios.cli_apellido) AS NombreCliente, cli_usuarios.cli_tipousuario, CONCAT(ja_usuarios.ja_nombre, ' ', ja_usuarios.ja_apellido) AS NombreManager, ja_usuarios.ja_tipousuario  
          FROM ja_servicios
          INNER JOIN cli_usuarios
          ON ja_servicios.pk_srvc_idSesion=cli_usuarios.cli_id
          INNER JOIN ja_usuarios
          ON ja_servicios.pk_srvc_idSesion=ja_usuarios.ja_id
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
<?php include('inc/funciones.php');?>
<?php 
$tituloPagina = "A> de Casas";
$pagina = "Arriendo de Casas";
conectaBase();
  $sql="SELECT ja_servicios.srvc_id, ja_servicios.srvc_titulo, ja_servicios.srvc_introDescripcion, ja_servicios.srvc_imagen1, ja_servicios.srvc_imagen2, ja_servicios.srvc_imagen3, ja_servicios.srvc_descuentoPrecio, ja_servicios.pk_srvc_idSesion, ja_servicios.pk_srvc_tipoUsuario, CONCAT(cli_usuarios.cli_nombre, ' ', cli_usuarios.cli_apellido) AS NombreCliente, cli_usuarios.cli_tipousuario, CONCAT(ja_usuarios.ja_nombre, ' ', ja_usuarios.ja_apellido) AS NombreManager, ja_usuarios.ja_tipousuario  
        FROM ja_servicios        
        INNER JOIN cli_usuarios
        ON ja_servicios.pk_srvc_idSesion=cli_usuarios.cli_id
        INNER JOIN ja_usuarios
        ON ja_servicios.pk_srvc_idSesion=ja_usuarios.ja_id
        WHERE ja_servicios.srvc_tipo='4'
        ORDER BY srvc_id 
        DESC LIMIT 0,9";
include('inc/header.php');
//include('inc/carousel.php') ?>
      <!-- Arriendos de Casas -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div id="contentIn" class="container">
    <article class="body">
      <h2>- Arriendo de Casas -</h2>
    </article>
    <hr>	
    <div class="row">
    <?php       
      include("inc/detalleServicios.php");
    ?>
	</div>        
  <!-- /Arriendos de Casas -->
<?php include('inc/footer.php');?>
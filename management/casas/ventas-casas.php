<?php include('inc/funciones.php');?>
<?php 
$tituloPagina = "V> de Casas";
$pagina = "Ventas de Casas";
conectaBase();
//$sql="select * from ja_servicios where srvc_tipo='1'";

  $sql="SELECT srvc_id, srvc_titulo, srvc_introDescripcion, srvc_imagen1, srvc_imagen2, srvc_imagen3, srvc_descuentoPrecio, pk_srvc_idSesion, pk_srvc_tipoUsuario, CONCAT(cli_usuarios.cli_nombre, ' ', cli_usuarios.cli_apellido) AS NombreCliente, cli_usuarios.cli_tipousuario, CONCAT(ja_usuarios.ja_nombre, ' ', ja_usuarios.ja_apellido) AS NombreManager, ja_usuarios.ja_tipousuario  
        FROM ja_servicios
        INNER JOIN cli_usuarios
        ON ja_servicios.pk_srvc_idSesion=cli_usuarios.cli_id
        INNER JOIN ja_usuarios
        ON ja_servicios.pk_srvc_idSesion=ja_usuarios.ja_id
        WHERE srvc_tipo='1'        
        ORDER BY srvc_id 
        DESC LIMIT 0,9";

include('inc/header.php');
//include('inc/carousel.php') ?>
      <!-- Ventas de casas -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div id="contentIn" class="container">
    <article class="body">
      <h2>- Venta de casas -</h2>
    </article>
    <hr>  
  <div class="row">
    <?php       
      include("inc/detalleServicios.php");
    ?>
  </div>    
  <!-- /Ventas de casas -->
<?php include('inc/footer.php');?>
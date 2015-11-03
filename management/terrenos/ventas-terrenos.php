<?php include('inc/funciones.php');?>
<?php 
$tituloPagina = "V> de Terrenos";
$pagina = "Ventas de Terrenos";
conectaBase();
  $sql="SELECT JS.srvc_id, JS.srvc_titulo, JS.srvc_introDescripcion, JS.srvc_imagen1, JS.srvc_imagen2, JS.srvc_imagen3, JS.srvc_descuentoPrecio, JS.pk_srvc_idSesion, JS.pk_srvc_tipoUsuario, CONCAT(CU.cli_nombre,' ',CU.cli_apellido) AS NombreCliente, CU.cli_tipoUsuario, CONCAT(JU.ja_nombre,' ',JU.ja_apellido) AS NombreManager, JU.ja_tipousuario
        FROM (SELECT * FROM `ja_servicios` WHERE ja_servicios.srvc_tipo='3' ORDER BY srvc_id DESC) AS JS
        INNER JOIN cli_usuarios AS CU
        ON JS.pk_srvc_idsesion=CU.cli_id
        INNER JOIN ja_usuarios as JU";
include('inc/header.php');
//include('inc/carousel.php') ?>
      <!-- Ventas de Terrenos -->    
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">      
<div id="contentIn" class="container">
  <div class="row">
    <article class="body">
      <h2>- Venta de Terrenos -</h2>
    </article>
    <hr>    
    <?php       
      include("inc/detalleServicios.php");
    ?>
  </div>        
  <!-- /Ventas de Terrenos -->
<?php include('inc/footer.php');?>
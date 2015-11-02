<?php   
if (session_status() == PHP_SESSION_NONE) {
	session_start();
  if ($_SESSION['tipoSesion']=="10") {
    $tituloPagina = "Agregar Servicio";
    $pagina = "ventas";
    include('inc/header.php');
      //include('inc/carousel.php') ?>
            <!-- Registro -->   
    <div id="content" class="container">
        <article class="row">
          <article class="body">
          <h2>- Agregar Servicio -</h2>
          </article>
          <hr>
          <?php 
            if (isset($_SESSION['sesionActiva'])){  
          ?>          
          <article style="" id="contentIn" class="">
            <?php
              include("inc/formularioServicio.php");
            ?>
            <br>
          </article>
          <?php                     
            }else{
              echo '<h5><a href="../../registro.php" class="btn btn-success">Registrate</a> para agregar un servicio a nuestro sitio o <a href="../../index.php" class="btn btn-info">Inicia Sesi&oacute;n</a></h5>';
            } 
          ?>
        </article>        
        <!-- /Registro --> 
    <?php include('inc/footer.php');
  }else{
    header("Location:../../index.php");
  }

}else{
	header("Location:../../index.php");
}
?>












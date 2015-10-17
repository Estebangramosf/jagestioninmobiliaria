<?php include('inc/funciones.php');?>
<?php 
$tituloPagina = "Clientes";
$pagina = "Clientes";
include('inc/header.php');
//include('inc/carousel.php') ?>
      <!-- Clientes -->
<div id="content" class="container">
    <div class="row">
      <article class="body">
        <h2>- Clientes -</h2>
      </article>
      <hr>
      <div class="horizontal divPadre">
        <div class="vertical">        
          <div id="perfil" >
            <a href="panel.php">
              <div id="info">
                <p id="headline">Panel</p>
                <p id="pie">Haz click aqu&iacute; para ir al panel.</p>
              </div>
            </a>  
          </div>
          <div id="cerrarsesion" >
            <a href="../../inc/cerrarSesion.php">
              <div id="info">
                <p id="headline"> Cerrar Sesi&oacute;n</p>
                <p id="pie">Haz click aqu&iacute; para cerrar sesi&oacute;n.</p>
              </div>
            </a>  
          </div> 
        </div>
      </div>              
    </div>        
    <!-- /Clientes --> 
<?php include('inc/footer.php') ?>
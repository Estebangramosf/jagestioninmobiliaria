<?php   
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="100" || $_SESSION['tipoSesion']=="10"){
  include('inc/funciones.php');  
  $tituloPagina = "Panel";
  $pagina = "Panel";
  include('inc/header.php');
  //include('inc/carousel.php') ?>
        <!-- Panel -->
  <div id="content" class="container">
      <div class="row">
        <article class="body">
          <h2>- Panel -</h2>
        </article>
        <hr>
        <div class="horizontal divPadre">
          <div class="vertical">
          <?php if ($_SESSION['tipoSesion']=="10"){ echo '<a href="agregar-servicio.php"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </a>Agregar Venta o Arriendo'; } ?>
            <div id="perfil" >
              <a href="perfil.php">
                <div id="info">
                  <p id="headline">Perfil</p>
                  <p id="pie">Haz click aqu&iacute; para editar tu perfil.</p>
                </div>
              </a>  
            </div>
            <div id="casa" >
              <a href="../casas/ventas-casas.php">
                <div id="info">
                  <p id="headline">Venta de Casas</p>
                  <p id="pie">Haz click aqu&iacute; para ver la Venta de Casas.</p>
                </div>
              </a>  
            </div>
            <div id="departamento" >
              <a href="../departamentos/ventas-departamentos.php">
                <div id="info">
                  <p id="headline">Venta de Departamentos</p>
                  <p id="pie">Haz click aqu&iacute; para ver la Venta de Departamentos.</p>
                </div>
              </a>  
            </div>                    
            <div id="terreno" >
              <a href="../terrenos/ventas-terrenos.php">
                <div id="info">
                  <p id="headline">Venta de Terrenos</p>
                  <p id="pie">Haz click aqu&iacute; para ver la Venta de Terrenos.</p>
                </div>
              </a>  
            </div> 
            <div id="casa" >
              <a href="../casas/arriendos-casas.php">
                <div id="info">
                  <p id="headline">Arriendo de Casas</p>
                  <p id="pie">Haz click aqu&iacute; para ver el arriendo de Casas.</p>
                </div>
              </a>  
            </div>
            <div id="departamento" >
              <a href="../departamentos/arriendos-departamentos.php">
                <div id="info">
                  <p id="headline">Arriendo de Departamentos</p>
                  <p id="pie">Haz click aqu&iacute; para ver el arriendo de Departamentos.</p>
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
      <!-- /Panel --> 
  <?php include('inc/footer.php'); 
}else{
  header("Location:../managers/panel.php");
}?>
<?php include('inc/funciones.php');?>
<?php 
$tituloPagina = "Arriendos";
$pagina = "Arriendos";
include('inc/header.php');
//include('inc/carousel.php') ?>
      <!-- Arriendos -->
<div id="content" class="container">
    <div class="row">
      <article class="body">
        <h2>- Arriendos -</h2>
      </article>
      <hr>    
      <div class="horizontal divPadre">
        <div class="vertical">        
          <div id="casa" >
            <a href="management/casas/arriendos-casas.php">
              <div id="info">
                <p id="headline">Arriendo de Casas</p>
                <p id="pie">Haz click aqu&iacute; para conocer mas detalles sobre el arriendo de Casas.</p>
              </div>
            </a>  
          </div>
          <div id="departamento" >
            <a href="management/departamentos/arriendos-departamentos.php">
              <div id="info">
                <p id="headline">Arriendo de Departamentos</p>
                <p id="pie">Haz click aqu&iacute; para conocer mas detalles sobre el arriendo de Departamentos.</p>
              </div>
            </a>  
          </div>        
        </div>
      </div> 
    </div>        
    <!-- /Arriendos --> 
<?php include('inc/footer.php') ?>
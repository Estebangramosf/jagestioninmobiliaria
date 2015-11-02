<?php 
  include('inc/funciones.php'); 
  $tituloPagina = "Ventas";
  $pagina = "Ventas";
  include('inc/header.php');
?>
<!-- Ventas -->
<div id="content" class="container">
    <div class="row">
      <article class="body">
        <h2>- Ventas -</h2>
      </article>
      <hr>
      <div class="horizontal divPadre">        
        <div class="vertical">
          <!-- Div venta casa -->
          <div id="casa" >
            <a href="management/casas/ventas-casas.php">
              <div id="info">
                <p id="headline">Venta de Casas</p>
                <p id="pie">Haz click aqu&iacute; para conocer mas detalles sobre la Venta de Casas.</p>
              </div>
            </a>  
          </div>
          <!-- /Div venta casa -->
          <!-- Div venta departamento -->
          <div id="departamento" >
            <a href="management/departamentos/ventas-departamentos.php">
              <div id="info">
                <p id="headline">Venta de Departamentos</p>
                <p id="pie">Haz click aqu&iacute; para conocer mas detalles sobre la Venta de Departamentos.</p>
              </div>
            </a>  
          </div> 
          <!-- /Div venta departamento -->
          <!-- Div venta terreno -->
          <div id="terreno" >
            <a href="management/terrenos/ventas-terrenos.php">
              <div id="info">
                <p id="headline">Venta de Terrenos</p>
                <p id="pie">Haz click aqu&iacute; para conocer mas detalles sobre la venta de Terrenos.</p>
              </div>
            </a>  
          </div> 
          <!-- /Div venta terreno -->
        </div>
      </div>              
    </div>        
<!-- /Ventas --> 
<?php include('inc/footer.php') ?>
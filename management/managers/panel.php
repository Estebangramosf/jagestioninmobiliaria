<?php   
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="1"){
  include('inc/funciones.php');  
  $tituloPagina = "Panel";
  $pagina = "Panel";
  include('inc/header.php');
  if(isset($_REQUEST['exito'])){ 
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Datos guardados correctamente.</h4></div>';
  }    
  if(isset($_REQUEST['cancelado'])){ 
    echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Cancelado por el usuario.</h4></div>';
  }    
?>
        <!-- Panel -->
  <div id="content" class="container">
      <div class="row">
        <article class="body">
          <h2>- Panel Administrativo -</h2>
        </article>
        <hr>
        <div class="horizontal divPadre">
          <div class="vertical">
            <a href="agregar-servicio.php"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </a>Agregar Venta o Arriendo
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
                  <p id="headline">Modificar venta de Casas</p>
                  <p id="pie">Haz click aqu&iacute; para modificar la Venta de Casas.</p>
                </div>
              </a>  
            </div>
            <div id="departamento" >
              <a href="../departamentos/ventas-departamentos.php">
                <div id="info">
                  <p id="headline">Modificar venta de Departamentos</p>
                  <p id="pie">Haz click aqu&iacute; para modificar la Venta de Departamentos.</p>
                </div>
              </a>  
            </div>                    
            <div id="terreno" >
              <a href="../terrenos/ventas-terrenos.php">
                <div id="info">
                  <p id="headline">Modificar venta de Terrenos</p>
                  <p id="pie">Haz click aqu&iacute; para modificar la Venta de Terrenos.</p>
                </div>
              </a>  
            </div> 
            <div id="casa" >
              <a href="../casas/arriendos-casas.php">
                <div id="info">
                  <p id="headline">Modificar arriendo de Casas</p>
                  <p id="pie">Haz click aqu&iacute; para modificar el arriendo de Casas.</p>
                </div>
              </a>  
            </div>
            <div id="departamento" >
              <a href="../departamentos/arriendos-departamentos.php">
                <div id="info">
                  <p id="headline">Modificar arriendo de Departamentos</p>
                  <p id="pie">Haz click aqu&iacute; para modificar el arriendo de Departamentos.</p>
                </div>
              </a>  
            </div>
            <div id="usuarios" >
              <a href="gestion-de-usuarios.php">
                <div id="info">
                  <p id="headline"> Gesti&oacute;n de usuarios</p>
                  <p id="pie">Haz click aqu&iacute; para gestionar usuarios.</p>
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
  header("Location:../clientes/panel.php");
}?>
<?php   
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (!isset($_SESSION['sesionActiva'])){
    include('inc/funciones.php');
    $tituloPagina = "Ingreso";
    $pagina = "Ingreso";
    include('inc/header.php');
  if(isset($_REQUEST['exito'])){ 
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Registro realizado correctamente.</h4></div>';
  } 
?>
<!-- Login -->
    <div id="content" class="container">
      <div class="row">
        <article class="body">
          <h2>- Acceso -</h2>
        </article>
        <hr>
        <!-- Div login -->
        <div id="contentIn">
          <!-- Formulario login -->
          <form name="formLogin" id="formLogin" method="post" action="inc/checkLogin.php" enctype="application/x-www-form-urlencoded">
            <!-- Div tipo usuario -->
            <div class="radio">
              <label>
                <input type="radio" name="opciones" id="opciones_1" value="1" checked>
                <strong>Clientes</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="opciones" id="opciones_2" value="2">
                <strong>Administraci&oacute;n</strong>
              </label>
            </div>  
            <!-- /Div tipo usuario -->
            <!-- Campo email/usuario -->
            <div class="form-group">
              <label>Su usuario</label>
              <input name="email" type="email" required="" class="form-control input-sm" id="email" placeholder="Su E-mail *" data-validation-required-message="Ingrese su dirección de e-mail." >
              <p class="help-block text-danger"></p>
            </div>  
            <!-- /Campo email/usuario -->          
            <!-- Campo clave -->
            <div class="form-group">
              <label>Su contrase&ntilde;a</label>
              <input type="password" name="password" required=""  placeholder="Clave *" data-validation-required-message="" class="form-control input-sm">
            </div>
            <!-- /Campo clave -->
            <!-- Botones submit -->            
            <div class="form-group">
              <button type="button" id="submitButton" class="btn btn-info ">Acceder <b class="caret right"></b></button> 
              <button type="button" class="btn btn-link">¿Olvid&oacute; su clave?</button>
            </div>
            <!-- /Botones submit --> 
          </form>
          <!-- /Formulario login -->
        </div>      
        <!-- /Div login -->
      </div>        
<!-- /Login -->     
<?php include('inc/footer.php'); 
  }else{
    header("Location:index.php");
  }
}elseif(isset($_SESSION['sesionActiva'])){
  header("Location:index.php");
}
?>

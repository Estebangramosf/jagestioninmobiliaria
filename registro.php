<?php   
if (session_status() == PHP_SESSION_NONE) {
	session_start();
  if (!isset($_SESSION['sesionActiva'])){
    $tituloPagina = "Registro";
    $pagina = "Registro";
    include('inc/header.php');
    //include('inc/carousel.php') ?>
          <!-- Registro -->
    <div id="content" class="container">
      <div class="row">
        <article class="body">
          <h2>- Registro -</h2>
          <?php 
              if (isset($_REQUEST['error'])){
                if ($_REQUEST['error']=="1"){
                  echo '<script languaje="javascript">alert("ESTIMADO CLIENTE, YA SE ENCUENTRA REGISTRADO");</script>';
                }
              }     
              if (isset($_REQUEST['gana-con-nosotros'])) {
                echo '<script>alert("ATENCION!:\n\nEstimado usuario:\nEsta seccion es solo para clientes registrados, invitamos a que te registres y seas participe!.");</script>';
              }        
          ?>
        </article>
        <hr>
        <div style="" id="contentIn" class="">
          <div>
            <?php 
              include("inc/formularioUsuario.php");                   
            ?>
          </div>
        </div>
        <br>          
      </div>        
      <!-- /Registro --> 
    <?php include('inc/footer.php');
  }else{
    header("Location:index.php");
  }
}elseif(isset($_SESSION['sesionActiva'])){
	header("Location:index.php");
}
?>











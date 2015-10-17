<?php   
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="100"){
    include('inc/funciones.php');
    $tituloPagina = "Ingreso";
    $pagina = "Ingreso";
    include('inc/header.php');?>
    <!-- Login -->
    <div id="content" class="container">
      <div class="row">
        <article class="body">
          <h1>- Gana con nosotros! -</h1>
        </article>
        <hr>
        <div id="contentIn">
          <h3>Invierte tiempo con nosotros!</h3>  
          <h4>Sigue las instrucciones</h4>
          <article id="contentIn">
            <?php include('inc/galeriaPromociones.php'); ?>  
          </article>          
          <article>
            <a href="<?php echo $perfil . 'perfil.php?dar-de-alta'; ?>" class="btn btn-info">Aqu&iacute;</a>.
          </article>            
          <br />
        </div>      
      </div>        
    <?php include('inc/footer.php'); 
  }else{
    echo '<script>alert("Esta seccion es solo para clientes registrados, invitamos a registrarte.");</script>';
    header("Location:registro.php?gana-con-nosotros");
  }
}elseif(isset($_SESSION['sesionActiva'])&&$_SESSION['tipoSesion']=="10"){
  header("Location:index.php?gana");
}
?>

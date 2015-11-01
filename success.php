<?php 
if(isset($_GET['state'])){
	$state = $_GET['state'];
	if ($state == 0){
		$tituloPagina = "Exitoso";
		$pagina = "Exitoso";
		include('inc/header.php');
		//include('inc/carousel.php') ?>
 		<div id="content" class="container">
	    	<div class="row">
			    <h1>El env&iacute;o ha sido exitoso</h1>
			    <p><h3>Te invitamos a seguir en el sitio!</h3></p>
			    <br/>
			    <p>Pinche <a href="index.php" class="btn btn-success">Aqu&iacute;</a> para volver a la p&aacute;gina de inicio.</p>
			    <?php 
			    	//$pagina_anterior = $_SERVER['HTTP_REFERER'];
			    	//echo $pagina_anterior; 
			    	//$url = $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']; 
			    	//echo $url;
			    ?>
		    </div>
    	<?php include ("inc/footer.php"); 
    }else{
	header('Location:index.php');
	}
}
?>


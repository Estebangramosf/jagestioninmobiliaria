<?php
if(isset($_POST['clave'])){
	include("../funciones.php"); 
	conectaBase();
	$query = "DELETE FROM cli_usuarios WHERE cli_id=".$_REQUEST['id'];
	$rs = mysql_query($query);
}
?>
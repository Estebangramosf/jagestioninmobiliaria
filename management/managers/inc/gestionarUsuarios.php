<?php
include("funciones.php");
conectaBase();
$load = htmlentities(strip_tags($_POST['load'])) * 2;
$sql="select * from cli_usuarios order by cli_id desc limit ".$load.",6";
$resultados=mysqli_query($conexion, $sql);
 while ($datos=mysqli_fetch_array($resultados)){
?>
  <strong><?php echo $datos["cli_nombre"]." "; ?></strong><?php echo strip_tags($datos["cli_apellido"]); ?><br>
<?php
}
?>
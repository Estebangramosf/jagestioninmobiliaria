<?php 
if (isset($_SESSION['sesionActiva'])){
  $load = htmlentities(strip_tags($_POST['load'])) * 2;  
  $sql="SELECT srvc_id, srvc_titulo, srvc_introDescripcion, srvc_imagen1, srvc_descuentoPrecio FROM ja_servicios ORDER BY srvc_id DESC LIMIT ".$load.",1";  
  $registros=mysqli_query($conexion, $sql);
  $datos=mysqli_fetch_array($registros);
  $total=mysqli_num_rows($registros);
  if ($total >= 1) {        
    do{
      $modificar = "";
      $eliminar = "";
      $salida = "";          
      if (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="1") {
        $modificar = '<a href="gestionar-servicio.php?id='.$datos['srvc_id'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar</a>';
        $eliminar = '<a href="gestionar-servicio.php?delete&id='.$datos['srvc_id'].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>';
      }//'<img src="' . $datos["srvc_imagen1"] . '" class="img-rounded" width=65% height=65%>';
      //Se concatena todo para tener mayor orden
      $salida = $salida . '<div class="col-md-4" align="center">';
      $salida = $salida . '<h2>' . $datos["srvc_titulo"] . '</h2>';
      $salida = $salida . '<img src="'.$datos["srvc_imagen1"].'" class="img-rounded" width=65% height=65% />';
      if (intval($datos["srvc_descuentoPrecio"])>0) {
        $salida = $salida . '<img src="img/listones/listonn.png" width=40% height=30% style="position:absolute; left:15%;"/>';
      }
      $salida = $salida . '<p>' . $datos['srvc_introDescripcion'] . '</p>';
      $salida = $salida . '<p><a href="gestion.php?id=' . $datos['srvc_id'] . '" role="button" class="btn btn-info">Ver detalles</a></p>' . $modificar.$eliminar . '
      </div>';
      // . '<strong> - Ahora:$' . $servicio["precioOferta"] . '</strong></a></p>'; 
      //$salida = $salida . '<p>Ahorras:$' . ($servicio["precio"]-$servicio["precioOferta"]) . '</p></div>';
      echo $salida;            
    }while(($datos=mysqli_fetch_array($registros))!=NULL);                   
  }else{
    echo '<h2>No existen servicios disponibles para ventas o arriendos</h2>';
  }
  mysqli_free_result($registros);
  mysqli_close($conexion);
}else{
  echo '<h5><a href="registro.php" class="btn btn-success">Registrate</a> para ver los servicios de nuestro sitio o <a href="login.php" class="btn btn-info">Inicia Sesi&oacute;n</a></h5>';
}
?>
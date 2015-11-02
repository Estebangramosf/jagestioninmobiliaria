<?php 
  $registros=mysqli_query($conexion, $sql);
  $datos=mysqli_fetch_array($registros);
  $total=mysqli_num_rows($registros);
  echo '<link rel="stylesheet" type="text/css" href="css/bootstrap.css">';
  if ($total >= 1) { 
    $i=0;       
    do{
      $modificar = "";
      $eliminar = "";
      $salida = "";          
      if (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="1") {
        $modificar = '<a class="btn-xs btn-default btn-group-sm-6" href="../managers/gestionar-servicio.php?id='.$datos['srvc_id'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar</a>';
        $eliminar = '<a class="btn-xs btn-danger btn-group-sm-6" href="../managers/gestionar-servicio.php?delete&id='.$datos['srvc_id'].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>';
      }elseif (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="10") {
        if ($datos['pk_srvc_idSesion']==$_SESSION['idSesion']&&$datos['pk_srvc_tipoUsuario']==$_SESSION['tipoSesion']) {
        $modificar = '<a class="btn-xs btn-default btn-group-sm-6" href="../clientes/gestionar-servicio.php?id='.$datos['srvc_id'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar</a>';
        $eliminar = '<a class="btn-xs btn-danger btn-group-sm-6" href="../clientes/gestionar-servicio.php?delete&id='.$datos['srvc_id'].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>';
        }
      }//'<img src="' . $datos["srvc_imagen1"] . '" class="img-rounded" width=65% height=65%>';
      //Se concatena todo para tener mayor orden
      $salida = $salida . '<div class="col-md-4" align="center">';
      $salida = $salida . '<h2>' . $datos["srvc_titulo"] . '</h2>';
      if (intval($datos["srvc_descuentoPrecio"])>0) {
        //$salida = $salida . '<img src="img/listones/listonn.png" width=40% height=30% style="position:absolute; left:15%;"/>';
        $salida = $salida . '<br><span style="color:green;">Precio en oferta</span>';
      }         
      $i = $i + 1;
      $salida .= '<div id = "myGaleriaSrvc'.$i.'" class = "carousel slide " style="font-family: "Century Gothic"; text-shadow: black 3px 2px;">
                    <ol class = "carousel-indicators">                    
                      <li data-target = "#myGaleriaSrvc'.$i.'" data-slide-to = "0" class="active"></li>
                      <li data-target = "#myGaleriaSrvc'.$i.'" data-slide-to = "1" ></li>
                      <li data-target = "#myGaleriaSrvc'.$i.'" data-slide-to = "2" ></li>
                    </ol>
                    <div class = "carousel-inner">
                      <div class = "item active">
                        <!-- Set the 1 background image using inline CSS below. -->    
                        <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "'.$datos["srvc_imagen1"].'" height=100% width=100%></div>
                          <div class = "carousel-caption">
                            <div class="title-slide" align="center"><br>            
                            </div>            
                          </div>
                      </div>

                      <div class = "item">
                        <!-- Set the 2 background image using inline CSS below. -->    
                        <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "'.$datos["srvc_imagen2"].'" height=100% width=100%></div>
                          <div class = "carousel-caption">
                            <div class="title-slide" align="center"><br>            
                            </div>
                          </div>
                      </div>

                      <div class = "item">
                        <!-- Set the 3 background image using inline CSS below. -->    
                        <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "'.$datos["srvc_imagen3"].'" height=100% width=100%></div>
                          <div class = "carousel-caption">
                            <div class="title-slide" align="center"><br>            
                            </div>  
                          </div>
                      </div>
                    </div> 
                    <!-- Controles -->         
                    <a class = "carousel-control left" href = "#myGaleriaSrvc'.$i.'" data-slide = "prev">
                      <span class = "icon-prev"></span>
                    </a>
                    <a class = "carousel-control right" href = "#myGaleriaSrvc'.$i.'" data-slide = "next">
                      <span class = "icon-next"></span>
                    </a>
                  </div>';      
      //$salida = $salida . '<img src="'.$datos["srvc_imagen1"].'" class="img-rounded" width=65% height=65% />';
      $salida = $salida . '<p>' . $datos['srvc_introDescripcion'] . '</p>';
      $salida = $salida . '<p><a href="../../gestion.php?id=' . $datos['srvc_id'] . '" role="button" class="btn-xs btn-info">Ver detalles</a></p>' . $modificar.$eliminar;
      if (isset($_SESSION['sesionActiva'])&&$_SESSION['tipoSesion']=="1") {
        if ($datos['pk_srvc_tipoUsuario']==$_SESSION['tipoSesion']&&$datos['pk_srvc_idSesion']==$_SESSION['idSesion']) {
          $salida = $salida.'<br><small>(Publicado por: '.$datos['NombreManager'].')</small>';
        }else{
          $salida = $salida.'<br><small>(Publicado por: '.$datos['NombreCliente'].')</small>';
        }
      }elseif (isset($_SESSION['sesionActiva'])&&$_SESSION['tipoSesion']=="10") {
        if ($datos['pk_srvc_tipoUsuario']==$_SESSION['tipoSesion']&&$datos['pk_srvc_idSesion']==$_SESSION['idSesion']) {
          $salida = $salida.'<br><small>(Publicado por: '.$datos['NombreCliente'].')</small>';
        }else{
          $salida = $salida.'<br><small>(Publicado por: '.$datos['NombreManager'].')</small>';
        }
      }  
      $salida = $salida . '</div>';
      // . '<strong> - Ahora:$' . $servicio["precioOferta"] . '</strong></a></p>'; 
      //$salida = $salida . '<p>Ahorras:$' . ($servicio["precio"]-$servicio["precioOferta"]) . '</p></div>';
      echo $salida;            
    }while(($datos=mysqli_fetch_array($registros))!=NULL);                   
  }else{
    echo '<h2>No existen servicios disponibles para ventas o arriendos</h2>';
  }
  mysqli_free_result($registros);
  mysqli_close($conexion);
  //echo '<h5><a href="../../registro.php" class="btn btn-success">Registrate</a> para ver los servicios de nuestro sitio o <a href="../../login.php" class="btn btn-info">Inicia Sesi&oacute;n</a></h5>';
?>
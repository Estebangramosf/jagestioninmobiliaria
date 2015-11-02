<?php 
if(isset($_SESSION['sesionActiva'])){
  /*echo $_SESSION["tipoSesion"];
  echo $_SESSION["sesionClave"];*/
  date_default_timezone_set('Chile/Continental');  
  $nowDate = new DateTime();
  $nowTime = new DateTime();
  //echo $now->format('Y-m-d H:i:s');    // MySQL datetime format
  //echo $nowDate->format('Y-m-d');
  //echo $nowTime->format('H:i:s');
  //echo $nowDate->getTimestamp();    
?>
  <form name="formServicio" method="post" action="inc/procesaInformacionServicio.php" enctype="application/x-www-form-urlencoded">
    <!-- Campo id -->
    <article class="form-group">                
      <input name="id" type="hidden" required="" class="form-control" id="id" placeholder="Tu ID *" data-validation-required-message="Ingrese su id." value="<?php echo $datos['srvc_id']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo id -->
    <!-- Campo titulo -->
    <article class="form-group col-md-12">
      <label>T&iacute;tulo del servicio</label>             
      <input maxlength="30" name="titulo" type="text" onbLur="validarServicio()" style="text-align:center;" required="" class="form-control input-lg" id="titulo" placeholder="Ej: Se vende.." data-validation-required-message="Ingrese t&iacute;tulo del servicio." value="<?php echo $datos['srvc_titulo']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo titulo -->    
    <!-- Campo categoria -->
    <article class="form-group col-xs-12">   
      <label>Seleccione categor&iacute;a</label>
      <select name="tipo"  class="form-control" onclick="validarServicio()">
        <option id="tipo_1" value="1" onclick="validarServicio(this.value)" <?php if ($datos['srvc_tipo']==1){echo 'selected';}?>>Venta de Casas</option>
        <option id="tipo_2" value="2" onclick="validarServicio(this.value)" <?php if ($datos['srvc_tipo']==2){echo 'selected';}?>>Venta de Departamentos</option>
        <option id="tipo_3" value="3" onclick="validarServicio(this.value)" <?php if ($datos['srvc_tipo']==3){echo 'selected';}?>>Venta de Terrenos</option>
        <option id="tipo_4" value="4" onclick="validarServicio(this.value)" <?php if ($datos['srvc_tipo']==4){echo 'selected';}?>>Arriendo de Casas</option>
        <option id="tipo_5" value="5" onclick="validarServicio(this.value)" <?php if ($datos['srvc_tipo']==5){echo 'selected';}?>>Arriendo de Departamentos</option>
      </select>
    </article>
    <!-- /Campo categoria -->
    <!-- Campo comuna -->
    <article class="form-group col-xs-12">   
      <label>Indique Comuna</label>                
      <select name="comuna"  class="form-control" onclick="validarServicio()">
        <?php                
          $comunas = array(
            0=>"Antofagasta",
            1=>"Iquique",
            2=>"Calama",
            3=>"La Serena",
            4=>"Coquimbo",
            5=>"Valparaiso",
            6=>"Region Metropolitana");
          for ($city=0;$city<7;$city++){                       
            ?>
            <option <?php echo 'id="comuna_'.$city.'"'; if($comunas[$city]==$datos['srvc_comuna']){ echo 'selected';}?> > <?php echo $comunas[$city]; ?></option>
          <?php }
        ?>                  
      </select>
    </article>

    <!-- /Campo comuna -->
    <!-- Campo descripcion introductoria -->
    <article class="form-group col-xs-12">
      <label>Descripci&oacute;n introductoria</label>
      <textarea maxlength="99" rows="2" name="introDescripcion" onbLur="validarServicio()" type="text" required="" class="form-control input-lg" id="introDescripcion" placeholder="Descripci&oacute;n introductiva *" data-validation-required-message="Ingrese una breve descripci&oacute;n." value=""><?php echo $datos['srvc_introDescripcion']; ?></textarea>
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo descripcion introductoria -->
    <!-- Campo descripcion completa -->
    <article class="form-group col-xs-12">
      <label>Descripci&oacute;n completa</label>
      <textarea maxlength="499" rows="6" name="descripcion" onbLur="validarServicio()" type="textarea" required="" class="form-control input-lg" id="descripcion" placeholder="Descripcion completa *" data-validation-required-message="Ingrese descripci&oacute;n del servicio." value=""><?php echo $datos['srvc_descripcion']; ?></textarea>
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo descripcion completa -->
    <!-- Campo precio -->
    <article class="form-group col-xs-12">
      <label>Precio $</label>
      <input maxlength="12" name="precio" type="number" onbLur="formatoPesos(this.value)" onkeyup="" required="" class="form-control input-lg" id="precio" placeholder="Ej: 200000" data-validation-required-message="Ingrese precio." value="<?php echo $datos['srvc_precio']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo precio -->
    <!-- Campo descuento -->
    <article class="form-group col-xs-12">
      <label>Descuento $ (indique 0 si no incluye)</label>              
      <input maxlength="12" name="descuentoPrecio" type="number" onbLur="validarServicio()" required="" class="form-control input-lg" id="descuentoPrecio" placeholder="Ej: 300000" data-validation-required-message="Ingrese descuento del servicio." value="<?php echo $datos['srvc_descuentoPrecio']; ?>" >
      <p class="help-block text-danger"></p>
    </article>  
    <!-- /Campo descuento -->
    <!-- Campo dormitorios -->
    <article  class="form-group col-xs-6">
      <label>Dormitorios</label>              
      <input maxlength="1" name="dormitorios" type="number" onbLur="validarServicio()" required="" class="form-control input-lg" id="dormitorios" placeholder="Ej: 1, 2, etc." data-validation-required-message="Ingrese cantidad de dormitorios." value="<?php echo $datos['srvc_dormitorios']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo dormitorios -->
    <!-- Campo Baños -->
    <article  class="form-group col-xs-6">
      <label>Ba&ntilde;os</label>              
      <input maxlength="1" name="banos" type="number" onbLur="validarServicio()" required="" class="form-control input-lg" id="banos" placeholder="Ej: 1, 2, etc." data-validation-required-message="Ingrese cantidad de ba&ntilde;os." value="<?php echo $datos['srvc_banos']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo Baños -->
    <!-- Campo estacionamientos -->
    <article  class="form-group col-xs-6">
      <label>Estacionamientos</label>              
      <input maxlength="1" name="estacionamientos" type="number" onbLur="validarServicio()" required="" class="form-control input-lg" id="estacionamientos" placeholder="Ej: 1, 2, etc." data-validation-required-message="Ingrese cantidad de estacionamientos." value="<?php echo $datos['srvc_estacionamientos']; ?>" >
      <p class="help-block text-danger"></p>
    </article>     
    <!-- /Campo estacionamientos -->
    <!-- Campo superficie -->
    <article class="form-group col-xs-6">
      <label>Superficie</label>              
      <input maxlength="4" name="superficie" type="number" onbLur="validarServicio()" required="" class="form-control input-lg" id="superficie" placeholder="Ej: 250" data-validation-required-message="Ingrese dimensi&oacute;n." value="<?php echo $datos['srvc_superficie']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo superficie -->
    <!-- Campo fecha publicacion -->
    <article class="form-group col-xs-12">
      <label>Fecha de publicaci&oacute;n</label>
      <input class="form-control" type="date" onbLur="validarServicio()" name="fechaPublicacion" id="fechaPublicacion" step="3" placeholder="dia/mes/a&ntilde;o" data-validation-required-message="Ingrese fecha de publicacion" min="<?php echo $nowDate->format('Y-m-d'); ?>" max="<?php echo $nowDate->format('Y-m-d'); ?>" value="<?php echo $datos['srvc_fechaPublicacion']; ?>">                          
    </article>    
    <!-- /Campo fecha publicacion -->
    <!-- Campo hora publicacion -->
    <article class="form-group col-xs-12">
      <label>Hora Publicaci&oacute;n</label>              
      <input maxlength="10" name="horaPublicacion" type="time" onbLur="validarServicio()" required="" class="form-control input-sm" id="horaPublicacion" placeholder="Ej: 18:00" data-validation-required-message="Ingrese hora de publicacion" value="<?php echo $datos['srvc_horaPublicacion']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <!-- /Campo hora publicacion -->
    <!-- Campo fotos (10) -->
    <?php 
      for ($i=1;$i<=10;$i++) {
        echo  '
              <article class="form-group">
                <label>Link Imagen N '.$i.'</label>              
                <input maxlength="500" name="imagen'.$i.'" type="text" required="" class="form-control input-sm" id="imagen'.$i.'" placeholder="Link Imagen '.$i.' *" data-validation-required-message="Ingrese el link de la Imagen '.$i.'." value="'.$datos['srvc_imagen'.$i].'" >
                <p class="help-block text-danger"></p>
                <input type="checkbox" name="sinImagen'.$i.'" id="sinImagen'.$i.'" value="sinImagen'.$i.'" class="checkbox-inline" onclick="validarSinImagen(this.value)" /> Sin imagen temporalmente.
                <input type="checkbox" name="marcarRestantes" id="marcarRestantes'.$i.'" value="'.$i.'" class="checkbox-inline" onclick="marcarRestantesSinImagen(this.value)" /> Marcar restantes.                
              </article>  
              <hr> 
              '
        ;
      }
    ?>    
    <!-- /Campo fotos (10) -->       
    <!--<article class="form-group">
      <label>Link Imagen N1</label>              
      <input maxlength="500" name="imagen1" type="text" required="" class="form-control input-sm" id="imagen1" placeholder="Link Imagen 1 *" data-validation-required-message="Ingrese el link de la Imagen 1." value="<?php echo $datos['srvc_imagen1']; ?>" >
      <p class="help-block text-danger"></p>
    </article>       
    <article class="form-group">
      <label>Link Imagen N2</label>              
      <input maxlength="500" name="imagen2" type="text" required="" class="form-control input-sm" id="imagen2" placeholder="Link Imagen 2 *" data-validation-required-message="Ingrese el link de la Imagen 2." value="<?php echo $datos['srvc_imagen2']; ?>" >
      <p class="help-block text-danger"></p>
    </article>  
    <article class="form-group">
      <label>Link Imagen N3</label>              
      <input maxlength="500" name="imagen3" type="text" required="" class="form-control input-sm" id="imagen3" placeholder="Link Imagen 3 *" data-validation-required-message="Ingrese el link de la Imagen 3." value="<?php echo $datos['srvc_imagen3']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <article class="form-group">
      <label>Link Imagen N4</label>              
      <input maxlength="500" name="imagen4" type="text" required="" class="form-control input-sm" id="imagen4" placeholder="Link Imagen 4 *" data-validation-required-message="Ingrese el link de la Imagen 4." value="<?php echo $datos['srvc_imagen4']; ?>" >
      <p class="help-block text-danger"></p>
    </article>       
    <article class="form-group">
      <label>Link Imagen N5</label>              
      <input maxlength="500" name="imagen5" type="text" required="" class="form-control input-sm" id="imagen5" placeholder="Link Imagen 5 *" data-validation-required-message="Ingrese el link de la Imagen 5." value="<?php echo $datos['srvc_imagen5']; ?>" >
      <p class="help-block text-danger"></p>
    </article>  
    <article class="form-group">
      <label>Link Imagen N6</label>              
      <input maxlength="500" name="imagen6" type="text" required="" class="form-control input-sm" id="imagen6" placeholder="Link Imagen 6 *" data-validation-required-message="Ingrese el link de la Imagen 6." value="<?php echo $datos['srvc_imagen6']; ?>" >
      <p class="help-block text-danger"></p>
    </article>
    <article class="form-group">
      <label>Link Imagen N7</label>              
      <input maxlength="500" name="imagen7" type="text" required="" class="form-control input-sm" id="imagen7" placeholder="Link Imagen 7 *" data-validation-required-message="Ingrese el link de la Imagen 7." value="<?php echo $datos['srvc_imagen7']; ?>" >
      <p class="help-block text-danger"></p>
    </article>       
    <article class="form-group">
      <label>Link Imagen N8</label>              
      <input maxlength="500" name="imagen8" type="text" required="" class="form-control input-sm" id="imagen8" placeholder="Link Imagen 8 *" data-validation-required-message="Ingrese el link de la Imagen 8." value="<?php echo $datos['srvc_imagen8']; ?>" >
      <p class="help-block text-danger"></p>
    </article>  
    <article class="form-group">
      <label>Link Imagen N9</label>              
      <input maxlength="500" name="imagen9" type="text" required="" class="form-control input-sm" id="imagen9" placeholder="Link Imagen 9 *" data-validation-required-message="Ingrese el link de la Imagen 9." value="<?php echo $datos['srvc_imagen9']; ?>" >
      <p class="help-block text-danger"></p>
    </article>    
    <article class="form-group">
      <label>Link Imagen N10</label>              
      <input maxlength="500" name="imagen10" type="text" required="" class="form-control input-sm" id="imagen10" placeholder="Link Imagen 10 *" data-validation-required-message="Ingrese el link de la Imagen 10." value="<?php echo $datos['srvc_imagen10']; ?>" >
      <p class="help-block text-danger"></p>
    </article>-->       
<?php 
  if ($_SESSION["tipoSesion"]=="1"||$_SESSION["tipoSesion"]=="10"||$_SESSION["tipoSesion"]=="100"){
    echo '
    <article class="btn-group btn-group-sm-6" role="group">
      <input type="button" name="cancelar" class="btn btn-group-justified btn-warning btn-xs" id="submitButton" value="Cancelar" onclick = "validarDatosServicio(this.value)" />
    </article> ';
    if(!$do=="yes"){
      echo '
      <article class="btn-group btn-group-sm-6" role="group">
        <input type="button" name="modificar" class="btn btn-group-justified btn-info btn-xs" id="submitButton" value="Modificar" onclick = "validarDatosServicio(this.value)" />
      </article>';
    }
    if (($_SESSION["tipoSesion"]=="1" || $_SESSION["tipoSesion"]=="10")&&$do=="yes") {
      echo '
      <script>jQuery("body,html").animate({scrollTop: ($(document).height() - $(window).height(300))}, 800);</script>
      <article class="btn-group btn-group-sm-6" role="group">
        <input type="button" name="eliminar" class="btn btn-group-justified btn-danger btn-xs" id="submitButton" value="Eliminar" onclick = "validarDatosServicio(this.value)" />                  
      </article>
      <!-- 
      <article class="btn-group btn-group-sm-6" role="group">
        <input type="button" name="insertar" class="btn btn-group-justified btn-success btn-xs" id="submitButton" value="Insertar" onclick = "validarDatosServicio(this.value)" />
      </article>    
        -->                   
    ';
    }
  }    
?>
      <input type="hidden" name="accion" id="accion" />
  </form>    
<script type="text/javascript">

function validarServicio(valor){
  if (document.formServicio.tipo.value == 3){
    document.getElementById("dormitorios").readOnly = true;
    //document.getElementById("dormitorios").style.visibility = "hidden";
    document.getElementById("banos").readOnly = true;
    //document.getElementById("banos").style.visibility = "hidden";
    document.getElementById("estacionamientos").readOnly = true;
    //document.getElementById("estacionamientos").style.visibility = "hidden";
    document.formServicio.dormitorios.value = "0";
    document.formServicio.banos.value = "0";
    document.formServicio.estacionamientos.value = "0";
  }else{
    document.getElementById("dormitorios").readOnly = false;
    document.getElementById("banos").readOnly = false;
    document.getElementById("estacionamientos").readOnly = false;
    //document.formServicio.dormitorios.value = "";
    //document.formServicio.banos.value = "";
    //document.formServicio.estacionamientos.value = "";    
  }
  if (document.formServicio.tipo.value == 1){
    document.formServicio.titulo.placeholder = "Ej: Se vende casa...";
    document.formServicio.precio.placeholder = "Ej: 20000000";
    document.formServicio.descuentoPrecio.placeholder = "Ej: 200000";
    document.formServicio.introDescripcion.placeholder = "Ej: Casa amoblada, cercania a centro comercial, etc";
    document.formServicio.descripcion.placeholder = "Descripción detallada sobre la venta de la casa.";

  }else if (document.formServicio.tipo.value == 2){
    document.formServicio.titulo.placeholder = "Ej: Se vende depto...";
    document.formServicio.precio.placeholder = "Ej: 20000000";
    document.formServicio.descuentoPrecio.placeholder = "Ej: 200000";
    document.formServicio.introDescripcion.placeholder = "Ej: Departamento amoblado, cercania a locomoción, etc.";
    document.formServicio.descripcion.placeholder = "Descripción detallada sobre la venta del departamento.";

  }else if (document.formServicio.tipo.value == 3) {
    document.formServicio.titulo.placeholder = "Ej: Se vende terreno...";
    document.formServicio.precio.placeholder = "Ej: 50000000";
    document.formServicio.descuentoPrecio.placeholder = "Ej: 200000";
    document.formServicio.introDescripcion.placeholder = "Ej: Terreno con parcela, sitio vacío, etc.";
    document.formServicio.descripcion.placeholder = "Descripción detallada de la venta del terreno.";

  }else if (document.formServicio.tipo.value == 4) {
    document.formServicio.titulo.placeholder = "Ej: Se arrienda casa...";
    document.formServicio.precio.placeholder = "Ej: 200000";
    document.formServicio.descuentoPrecio.placeholder = "Ej: 20000";
    document.formServicio.introDescripcion.placeholder = "Ej: Casa amoblada, cercania a centro comercial, etc";
    document.formServicio.descripcion.placeholder = "Descripción detallada sobre el arriendo de la casa.";

  }else if (document.formServicio.tipo.value == 5) {
    document.formServicio.titulo.placeholder = "Ej: Se arrienda depto...";
    document.formServicio.precio.placeholder = "Ej: 200000";
    document.formServicio.descuentoPrecio.placeholder = "Ej: 20000";
    document.formServicio.introDescripcion.placeholder = "Ej: Departamento amoblado, cercania a locomoción, etc.";
    document.formServicio.descripcion.placeholder = "Descripción detallada sobre el arriendo del departamento.";

  }

}
  function validarSinImagen (imagen) {
    //le agrega i al substring de imagen que contiene sinImagen + valor, quedaria i + magen + numero
    if (document.getElementById(imagen).checked == true) {
      document.getElementById("i" + imagen.substr(4,7)).readOnly = true;
      document.getElementById("i" + imagen.substr(4,7)).value = "-";

    }else{
      document.getElementById("i" + imagen.substr(4,7)).readOnly = false;
      document.getElementById("i" + imagen.substr(4,7)).value = "";

    }
    return 0;
  }
  function marcarRestantesSinImagen (pivote) {
    var i = pivote;
    for(pivote;pivote<=10;pivote++){
      if (document.getElementById("marcarRestantes" + i).checked == true) {
        document.getElementById("imagen" + pivote).readOnly = true;
        document.getElementById("imagen" + pivote).value = "-";
        document.getElementById("sinImagen" + pivote).checked = true;
        document.getElementById("sinImagen" + pivote).disabled = true;
        document.getElementById("marcarRestantes" + pivote).disabled = true;    
      }else{
        document.getElementById("imagen" + pivote).readOnly = false;
        document.getElementById("imagen" + pivote).value = "";
        document.getElementById("sinImagen" + pivote).checked = false;
        document.getElementById("sinImagen" + pivote).disabled = false;
        document.getElementById("marcarRestantes" + pivote).disabled = false;  
      }
    }
    document.getElementById("marcarRestantes" + i).disabled = false;    
  }
  function validarDatosServicio (valor) {
    var verificador=true;
    document.formServicio.accion.value=valor;
  
    if(valor=="Cancelar" || valor=="Eliminar"){
      document.formServicio.submit();
    }else{
        if (!document.formServicio.titulo.value) {
        document.getElementById("informacion").value = "Falta el titulo";
        document.formServicio.titulo.focus();
        verificador=false;
      } else if (!document.formServicio.tipo.value) {
        document.getElementById("informacion").value = "Falta elegir tipo";
        document.formServicio.tipo.focus();
        verificador=false;        
      } else if (!document.formServicio.introDescripcion.value) {
        document.getElementById("informacion").value = "Falta descripcion";
        document.formServicio.introDescripcion.focus();
        verificador=false;
      } else if (!document.formServicio.descripcion.value) {
        document.getElementById("informacion").value = "Falta descripcion";
        document.formServicio.descripcion.focus();
        verificador=false;
      } else if (!document.formServicio.precio.value) {
        document.getElementById("informacion").value = "Falta precio";
        document.formServicio.precio.focus();
        verificador=false;
      } else if (!document.formServicio.descuentoPrecio.value) {
        document.getElementById("informacion").value = "0 si no hay";
        document.formServicio.descuentoPrecio.value=0;
        document.formServicio.descuentoPrecio.focus();
        verificador=false;
      } else if (!document.formServicio.comuna.value) {
        document.getElementById("informacion").value = "Seleccione comuna";
        document.formServicio.comuna.focus();
        verificador=false;
      } else if (!document.formServicio.dormitorios.value) {
        document.getElementById("informacion").value = "Indique cantidad";
        document.formServicio.dormitorios.focus();
        verificador=false;
      }/* else if (!document.formServicio.foto.value) {
        alert("Debes incluír una foto en tu perfil");
        document.formServicio.foto.focus();
        verificador=false;
      }*/else if (!document.formServicio.banos.value) {
        document.getElementById("informacion").value = "Indique cantidad";
        document.formServicio.banos.focus();
        verificador=false;
      } else if (!document.formServicio.superficie.value) {
        document.getElementById("informacion").value = "Indique tamaño";
        document.formServicio.superficie.focus();
        verificador=false;
      } else if (!document.formServicio.estacionamientos.value) {
        document.getElementById("informacion").value = "Indique cantidad";
        document.formServicio.estacionamientos.focus();
        verificador=false;  
      } else if (!document.formServicio.imagen1.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen1.focus();
        verificador=false; 
      } else if (!document.formServicio.imagen2.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen2.focus();
        verificador=false; 
      } else if (!document.formServicio.imagen3.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen3.focus();
        verificador=false;  
      } else if (!document.formServicio.imagen4.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen4.focus();
        verificador=false; 
      } else if (!document.formServicio.imagen5.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen5.focus();
        verificador=false; 
      } else if (!document.formServicio.imagen6.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen6.focus();
        verificador=false;    
      } else if (!document.formServicio.imagen7.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen7.focus();
        verificador=false; 
      } else if (!document.formServicio.imagen8.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen8.focus();
        verificador=false; 
      } else if (!document.formServicio.imagen9.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen9.focus();
        verificador=false;       
      } else if (!document.formServicio.imagen10.value) {
        document.getElementById("informacion").value = "Falta esta foto";
        document.formServicio.imagen10.focus();
        verificador=false;                   
      } else if (!document.formServicio.fechaPublicacion.value) {
        document.getElementById("informacion").value = "Seleccione fecha";
        document.formServicio.fechaPublicacion.focus();
        verificador=false; 
      } else if (!document.formServicio.horaPublicacion.value) {
        document.getElementById("informacion").value = "Seleccione hora";
        document.formServicio.horaPublicacion.focus();
        verificador=false; 
      }
      if (verificador) {
        document.formServicio.submit();      
      }
    }
  }

  window.onload = function () {
    //document.getElementById("submitButton").onclick = validarDatosContacto(this.value);
  }
</script> <!-- script para validar el ingreso de datos y valores -->


<?php 

}else{
  header("Location:../../index.php");
}
?>
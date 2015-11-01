<?php
//Defino las variables de la casa y simbolo JA
  $logoJA = "<img src='img/carousel/carouselLogos/JA.png' height=5% width=5% class='img-responsive'> ";
  $logoCasa = "<img src='img/carousel/carouselLogos/Casa-final.png' height=5% width=5% class='img-responsive'> ";
?>
<!-- Full Page Image Background Carousel Header -->
<div id = "myGaleria" class = "carousel slide " style="font-family: 'Century Gothic'; text-shadow: black 3px 2px;">
<!-- Indicadores -->
  <ol class = "carousel-indicators">
    <li data-target = "#myGaleria" data-slide-to = "0" class="active" ></li>
    <li data-target = "#myGaleria" data-slide-to = "1" ></li>
    <li data-target = "#myGaleria" data-slide-to = "2" ></li>
    <li data-target = "#myGaleria" data-slide-to = "3" ></li>
    <li data-target = "#myGaleria" data-slide-to = "4" ></li>
    <li data-target = "#myGaleria" data-slide-to = "5" ></li>
    <li data-target = "#myGaleria" data-slide-to = "6" ></li>
    <li data-target = "#myGaleria" data-slide-to = "7" ></li>
    <li data-target = "#myGaleria" data-slide-to = "8" ></li>
    <li data-target = "#myGaleria" data-slide-to = "9"></li>
  </ol>
  <!-- Páginas de Slides -->
  <div class = "carousel-inner"> <!-- <?php echo $datos["srvc_imagen1"]; ?> -->
    <div class = "item active">
      <!-- Set the 1 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen1"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>            
        </div>
    </div>
    <div class = "item">
      <!-- Set the 2 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen2"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>
        </div>
    </div>
    <div class = "item">
      <!-- Set the 3 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen3"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>
    <div class = "item">
          <!-- Set the 4 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen4"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
           <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>
    <div class = "item">
          <!-- Set the 5 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen5"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>
    <div class = "item">
          <!-- Set the 6 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen6"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>
    <div class = "item">
          <!-- Set the 7 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen7"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>
    <div class = "item">
          <!-- Set the 8 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen8"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>    
    <div class = "item">
          <!-- Set the 9 background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" class="img-rounded" src = "<?php echo $datos["srvc_imagen9"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>            
    <div class = "item">
          <!-- Set the 10 background image using inline CSS below. -->    
      <div class="fill"><img style="" class="img-rounded" src = "<?php echo $datos["srvc_imagen10"]; ?>" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide" align="center"><br>            
            <?php echo $logoJA, $logoCasa; ?> 
          </div>
        </div>
    </div>
  </div> 
  <!-- Controles -->         
  <a class = "carousel-control left" href = "#myGaleria" data-slide = "prev">
    <span class = "icon-prev"></span>
  </a>
  <a class = "carousel-control right" href = "#myGaleria" data-slide = "next">
    <span class = "icon-next"></span>
  </a>

</div>
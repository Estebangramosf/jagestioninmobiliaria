<?php
//Defino las variables de la casa y simbolo JA
  $logoJA = "<img src='img/LOGOJA.png' height=20% width=20% />" ;
  $logoCasa = "" ;
?>

<!-- Full Page Image Background Carousel Header -->
<header id = "myCarousel" class = "carousel slide " style="">
<!-- Indicadores -->
  <ol class = "carousel-indicators">
    <li data-target = "#myCarousel" data-slide-to = "0" class="active"></li>
    <li data-target = "#myCarousel" data-slide-to = "1" ></li>
    <li data-target = "#myCarousel" data-slide-to = "2" ></li>
    <li data-target = "#myCarousel" data-slide-to = "3" ></li>
    <li data-target = "#myCarousel" data-slide-to = "4" ></li>
  </ol>
  <!-- Páginas de Slides -->
  <div class = "carousel-inner">
    <div class = "item active">
      <!-- Set the first background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" src = "img/carousel/1.jpg" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide"><br>            
            <h3 class="txt-responsive">Gesti&oacute;n Inmobiliaria</h3>
            <p>Encontrar donde vivir, est&aacute; Aqu&iacute;.</p> 
            <?php echo $logoJA, $logoCasa; ?> 
          </div>            
        </div>
    </div>
    <div class = "item">
      <!-- Set the second background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" src = "img/carousel/2.jpg" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide"><br>
              <h3 class="txt-responsive">Gesti&oacute;n Inmobiliaria</h3>
              <p>Sitio web exclusivo de ventas y arriendos de propiedades.</p>
              <?php echo $logoJA, $logoCasa; ?>   
          </div>
        </div>
    </div>
    <div class = "item">
      <!-- Set the third background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" src = "img/carousel/3.jpg" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide"><br>
              <h3 class="txt-responsive">Gesti&oacute;n Inmobiliaria</h3>
              <p>Gesti&oacute;n r&aacute;pida y transparente.</p>
              <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>
    <div class = "item">
          <!-- Set the fourth background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" src = "img/carousel/4.jpg" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide"><br>
              <h3 class="txt-responsive">Gesti&oacute;n Inmobiliaria</h3>
              <p>Ventas y arriendos de propiedades en la cuarta regi&oacute;n</p>
              <?php echo $logoJA, $logoCasa; ?> 
          </div>  
        </div>
    </div>
    <div class = "item">
          <!-- Set the fifth background image using inline CSS below. -->    
      <div class="fill"><img style="background-size:cover;" src = "img/carousel/5.jpg" height=100% width=100%></div>
        <div class = "carousel-caption">
          <div class="title-slide"><br>
            <h3 class="txt-responsive">Gesti&oacute;n Inmobiliaria</h3>
            <p>Entra a 'Nosotros' y conoce nuestra gesti&oacute;n.</p>
            <?php echo $logoJA, $logoCasa; ?>   
          </div>
        </div>
    </div>
  </div> 
  <!-- Controles -->         
  <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">
    <span class = "icon-prev"></span>
  </a>
  <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">
    <span class = "icon-next"></span>
  </a>

</header>
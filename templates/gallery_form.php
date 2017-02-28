<!-- Carousel code Starts -->


 <body class="gallery-bg">
<style> 
 

    .carousel-inner>.item>img, .carousel-inner>.item>a>img
    {
        height:400px;
        width:700px;
    }
 
</style> 
<div class="container" style="width: 730px;">
  </br>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
         <?php echo $Indicators; ?>
        </ol>
 
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <?php echo $slides;?>  
        </div>
 
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
  </body></div>
 
    <br>
    
    </br>


               
             
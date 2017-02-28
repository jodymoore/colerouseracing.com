<!-- Carousel code Starts -->


 <body class="delete-bg">
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
 
 
    <br>
    
    </br>
    <form action="delete.php" method="post" enctype="multipart/form-data">
    Enter image name to Delete:
             <input id="dlt" class="form-control" name="image" placeholder="Image To Delete" type="text"/>
             <br>
             <input type="submit" value="Delete Image" name="submit">
</form>

      <a href ="uploadFile.php"><span>
        <input id = "dltp" type="button" value = "Go To Upload Page"></span></a></p>

 </body></div>


</br>
</br>


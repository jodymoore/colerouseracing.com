<?php
   require("../includes/config.php");
	if($_SESSION['logged']) { 
        $files = glob("uploads/*.*");
	$slides='';
	$Indicators='';
	$counter=0;
	 
	  for ($i=0; $i<count($files); $i++)
	
	{
	
		$image = $files[$i];
		$image_title = $image;
		$image_title = substr($image,8);
		$supported_file = array(
		    'gif',
		    'jpg',
		    'jpeg',
		    'png'
		);

		$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
		if (in_array($ext, $supported_file)) {

		        if($counter == 0)
		        {
		            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
		            $slides .= '<div class="item active">
		            <img src="'.$image.'" alt="img" />
		            <div class="carousel-caption">
                           <h3>'.$image_title.'</h3>       
                           </div>
		          </div>';
		 
		        }
		        else
		        {
		            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
		            $slides .= '<div class="item">
		            <img src="'.$image.'" alt="img" />
		           <div class="carousel-caption">
                           <h3>'.$image_title.'</h3>        
                           </div>
		          </div>';
		        }
		        $counter++;
	        } else {
		    continue;
		}
	    }
	    
	     $result = "";
	     if ('POST' === $_SERVER['REQUEST_METHOD']) {
	         $result = $_POST['image'];
	         unlink("uploads/".$result);
	    }

  

      renderUp_form("delete_form.php", ['result' => $result, 'Indicators' => $Indicators,'slides'=> $slides, "title" => "delete"]); 
      }
      else{
          redirect("login.php"); 
      }
?>
<?php
   require("../includes/config.php");
	 
        $files = glob("uploads/*.*");
	$slides='';
	$Indicators='';
	$counter=0;
	 
	  for ($i=0; $i<count($files); $i++)
	
	{
	
		$image = $files[$i];
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
		          </div>';
		 
		        }
		        else
		        {
		            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
		            $slides .= '<div class="item">
		            <img src="'.$image.'" alt="img" />
		          </div>';
		        }
		        $counter++;
	        } else {
		    continue;
		}
	    }

      render("gallery_form.php", ['Indicators' => $Indicators,'slides'=> $slides, "title" => "gallery"]); 
?>

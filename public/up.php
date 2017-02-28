<?php
 require("../includes/config.php");

$errmsg = false;
if($_SESSION['logged']) {
// Insert any new image into database

	 if(isset($_REQUEST['completed']) && $_REQUEST['completed'] == 1) {
	        // Need to add - check for large upload. Otherwise the code
	        // will just duplicate old file ;-)
	        // ALSO - note that latest.img must be public write and in a
	        // live appliaction should be in another (safe!) directory.
	        move_uploaded_file($_FILES['imagefile']['tmp_name'],"latest.img");
	        $instr = fopen("latest.img","rb");
	        $image = addslashes(fread($instr,filesize("latest.img")));
	        if (strlen($_FILES['imagefile']['size']) < 149000) {
	               query ("insert into pix (title, imgdata) values (\"".
	                $_REQUEST['whatsit'] .
	                "\", \"".
	                $image.
	                "\")");
	        } else {
	                $errmsg = "Too large!";
	        }
	}


// Find out about latest image

$gotten = query("select * from pix order by pid desc limit 1");
          
if(!empty($gotten) ){
        $title = htmlspecialchars($gotten[0]['title']);
        $bytes = $gotten[0]['imgData'];
}else {
        $errmsg = "There is no image in the database yet";
        $title = "no database image available";
        // Put up a picture of our training centre
        $instr = fopen("../public/img/g1.jpg","rb");
        $bytes = fread($instr,filesize("../public/img/g1.jpg"));

}
// If this is the image request, send out the image



 if(isset($_REQUEST['gim'])) {
        header("Content-type: image/jpeg");
        print $bytes;
        exit ();
        }

      renderUp_form("up_form.php", ['title' => $title, 'errmsg' => $errmsg,"title" => "upload"]); 
      }
      
      else{
          redirect("login.php");
      }



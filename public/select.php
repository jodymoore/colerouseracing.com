<?php
   require("../includes/config.php");
   if($_SESSION['logged']) { 
      renderUp_form("select_form.php", [ "title" => "start"]); 
      }
      else {
          redirect("login.php");
      }
?>
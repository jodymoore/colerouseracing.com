<!DOCTYPE html>

<html>

    <head>

        <link href="/public/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/public/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/public/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>ColeRouseRacing<?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>ColeRouseRacing</title>
        <?php endif ?>
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script> 
        <script src="/public/js/jquery-1.10.2.min.js"></script>
        <script src="/public/js/bootstrap.min.js"></script>
        <script src="/public/js/scripts.js"></script>
        <script src="/public/js/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="/public/js/jcarousel.basic.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    </head>



        <div class="container">

            <div id="top">
                <a href="/"><img id="logo" alt="coleslogo" src="/public/img/crLogo.png"/></a>
            <div id="navigation">
                 <ul class="nav nav-pills">
                     <li><a href="/public/index.php">Home</a></li>
                     <li><a href="/public/about.php">About</a></li>
                     <li><a href="/public/news.php">News</a></li>
                     <li><a href="/public/schedule.php">Schedule</a></li>
                     <li><a href="/public/gallery.php">Gallery </a></li>
                     <li><a href="/public/sponsors.php">Sponsors</a></li>
                     <li><a href="/public/contact.php">Contact </a></li> 
                 </ul>
            </div>
            
            
              

            
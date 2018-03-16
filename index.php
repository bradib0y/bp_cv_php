<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>Balazs Pukli, developer</title>
  	<link href="css/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Abel|Fugaz+One" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
  </head>
  <?php $name = "Balazs Pukli"?>
  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
          <img src="img/logo.png" alt="BP">
          </div>
          <h1><?php echo($name);?></h1>
          <p>developer</p>
          <hr />
          <ul class="social">
            <li><a href="https://bradib0y.github.com/"><span class="icon github"></span></a></li>
            <li><a href="https://facebook.com/balazspukli"><span class="icon facebook"></span></a></li>
          </ul>
          <hr />
          <p>Today: <?php echo(date("D, d M Y"));?></p>
        </section>
        <section class="main">             
          <h2>Experience</h2>
            <?php include "inc/experience.php"; ?> 
            
          <h2>Studies</h2>
            <?php include "inc/studies.php"; ?>
          
          <h2>Languages</h2>
            <?php include "inc/languages.php"; ?>
          
          <h2>Goal</h2>
            <?php include "inc/goal.php"; ?>
          
          <h2>Lifestyle</h2>
            <?php include "inc/lifestyle.php"; ?>
        </section>        
    </div>
    <section class="footer text-center">
      &copy; <?php echo(date("Y")); echo(" "); echo($name);?>
    </section>
  </body>
</html>
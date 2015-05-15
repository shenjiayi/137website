<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>
  <script src="scripts/rotate.js" type="text/javascript"></script>
  <script src="scripts/smaller.js" type="text/javascript"></script>
</head>

<body onload="startRotation()">
  <?php 
  include("common/menu.php");
  ?>


  <div id="showingWindow">
  	<div id ="contentText">
    <h2> Spin </h2>
    <h3>"Unleash the Imagination"</h3>
    <p>Provide 3d printing service on various of exsiting models or your own models in simple steps.</p>
    </div>

    <div id="contentImage">
    <img src="" id ="placeholder" alt="print" height="450px" width="500px"/>
    </div>
  </div>


  <div id="itemList">
 		    <div class="Picture"> <a href="penholder.php"><img src="img/penholder3.png" alt="1" width="240px" height="180px" onMouseOver="smallImg(this)" onmouseout="normalImg(this)" /></a></div>
        <div class="Picture"> <a href="plane.php"><img src="img/plane2.jpg" alt="2" width="240px" height="180px" onMouseOver="smallImg(this)" onmouseout="normalImg(this)"/></a> </div>
        <div class="Picture"> <a href="deer.php"><img src="img/deer1.jpg" alt="3" width="240px" height="180px" onMouseOver="smallImg(this)" onmouseout="normalImg(this)"/> </a></div>
        <div class="Picture"> <a href="trailer.php"><img src="img/trailer1.jpg" alt="4" width="240px" height="180px" onMouseOver="smallImg(this)" onmouseout="normalImg(this)"/> </a></div>
  </div>

  <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

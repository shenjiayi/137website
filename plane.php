<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/detail.css"/>
  <script src="scripts/plane.js" type="text/javascript"></script>

</head>

<body>
  <?php 
  include("common/menu.php");
  ?>

  <div id="body">
    <div id="container">
      <img id="picture" src="img/plane1.jpg"/>
      <div id="left_holder"><img onclick= "slide(-1)" class ="left" src="img/leftArrow.png" /></div>
      <div id="right_holder"><img  onclick="slide(1)" class= "right" src="img/rightArrow.png"/></div>
    </div>

    <div id="discriptionRight">
    <h3>Plane </h3>
    <p>by DIGITALAB</p>
    <hr/>
    <p>Price:$100</p>
    <p>Firm black plastic with a smooth surface and rubbery feel.</p>
    <p><a href="#download">Download File</a></p>
    <p><a href="order.php">Order now</a></p>
    </div>

    <div id="smallPic">
    <img class="Preview" id="plane1" src="img/plane1.jpg"/>
    <img class="Preview" id="plane2" src="img/plane2.jpg"/>
    <img class="Preview" id="plane3" src="img/plane3.jpg"/>
    <img class="Preview" id="plane4" src="img/plane4.jpg"/>
    </div>

    <div id="discriptionButtom">
    <h3>MORE ABOUT THIS ITEM</h3>
    <hr/>
    <p>The Sopwith Pup was a British single seater biplane fighter aircraft built by the Sopwith Aviation Company. It entered service with the Royal Flying Corps and the Royal Naval Air Service in the autumn of 1916. With pleasant flying characteristics and good maneuverability, the aircraft proved very successful. The Pup was eventually outclassed by newer German fighters, but it was not completely replaced on the Western Front until the end of 1917.
Perfect for the wargamers and collectors.</p>

  </div>


  </div>



  <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

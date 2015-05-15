<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/detail.css"/>
  <script src="scripts/detail.js" type="text/javascript"></script>

</head>

<body>
  <?php 
  include("common/menu.php");
  ?>

  <div id="body">
    <div id="container">
      <img id="picture" src="img/penholder1.png"/>
      <div id="left_holder"><img onclick= "slide(-1)" class ="left" src="img/leftArrow.png" /></div>
      <div id="right_holder"><img  onclick="slide(1)" class= "right" src="img/rightArrow.png"/></div>
    </div>

    <div id="discriptionRight">
    <h3>GENERATIVE PEN HOLDER</h3>
    <p>by DIGITALAB</p>
    <hr/>
    <p>Price:$100</p>
    <p>A beautiful and useful pen holder for your desktop, that can be used daily. Exploring generative design and biomorphic structures.</p>
    <p><a href="#download">Download File</a></p>
    <p><a href="order.php">Order now</a></p>
    </div>

    <div id="smallPic">
    <img class="Preview" id="penholder1" src="img/penholder1.png"/>
    <img class="Preview" id="penholder2" src="img/penholder2.png"/>
    <img class="Preview" id="penholder3" src="img/penholder3.png"/>
    <img class="Preview" id="penholder4" src="img/penholder4.png"/>
    </div>

    <div id="discriptionButtom">
    <h3>MORE ABOUT THIS ITEM</h3>
    <hr/>
    <p>Exploring parametric processes, resembling a honeycomb - Hexagonal grids and attractors curves.
    discriptionButtom</p>
    </div>


  </div>



  <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

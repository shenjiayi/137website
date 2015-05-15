<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/detail.css"/>
  <script src="scripts/skull.js" type="text/javascript"></script>

</head>

<body>
  <?php 
  include("common/menu.php");
  ?>

  <div id="body">
    <div id="container">
      <img id="picture" src="img/skull1.jpg"/>
      <div id="left_holder"><img onclick= "slide(-1)" class ="left" src="img/leftArrow.png" /></div>
      <div id="right_holder"><img  onclick="slide(1)" class= "right" src="img/rightArrow.png"/></div>
    </div>

    <div id="discriptionRight">
    <h3>Crania Anatomica Filigre Skull </h3>
    <p>by DIGITALAB</p>
    <hr/>
    <p>Price:$100</p>
    <p>White nylon plastic with a matte finish and slight grainy feel.</p>
    <p><a href="#download">Download File</a></p>
    <p><a href="order.php">Order now</a></p>
    </div>

    <div id="smallPic">
    <img class="Preview" id="skull1" src="img/skull1.jpg"/>
    <img class="Preview" id="skull2" src="img/skull2.jpg"/>
    <img class="Preview" id="skull3" src="img/skull3.jpg"/>
    <img class="Preview" id="skull4" src="img/skull4.jpg"/>
    </div>

    <div id="discriptionButtom">
    <h3>MORE ABOUT THIS ITEM</h3>
    <hr/>
    <p>The little filigree 3d printed skull that became the #1 most funded Sculpture project in Kickstarter history & an icon of the 3D printed medium. The piece marks the 1st application of Joshua’s surrealist automatism technique to representational form. It gives a new identity to the shape & invites the viewer to discover the form through the gentle visual lead of the pattern. This has been an exploration in how 2D images & designs can change the interpretation of 3D form & geometry. Representing the passing of an era & the ever growing renewal over the ghost of the past, the skull symbolized the end of Joshua’s commitment to traditional means of making & selling art while the filigree pattern represents the creative exploration of a new medium & ways to share his work.</p>
    </div>


  </div>



  <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

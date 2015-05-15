<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/detail.css"/>
  <script src="scripts/trailer.js" type="text/javascript"></script>

</head>

<body>
  <?php 
  include("common/menu.php");
  ?>

  <div id="body">
    <div id="container">
      <img id="picture" src="img/trailer1.jpg"/>
      <div id="left_holder"><img onclick= "slide(-1)" class ="left" src="img/leftArrow.png" /></div>
      <div id="right_holder"><img  onclick="slide(1)" class= "right" src="img/rightArrow.png"/></div>
    </div>

    <div id="discriptionRight">
    <h3>Dry Bulk Trailer</h3>
    <p>by DIGITALAB</p>
    <hr/>
    <p>Price:$100</p>
    <p>White nylon plastic with a matte finish and slight grainy feel.</p>
    <p><a href="#download">Download File</a></p>
    <p><a href="order.php">Order now</a></p>
    </div>

    <div id="smallPic">
    <img class="Preview" id="trailer1" src="img/trailer1.jpg"/>
    <img class="Preview" id="trailer2" src="img/trailer2.jpg"/>
    <img class="Preview" id="trailer3" src="img/trailer3.jpg"/>
    <img class="Preview" id="trailer4" src="img/trailer4.jpg"/>
    </div>

    <div id="discriptionButtom">
    <h3>MORE ABOUT THIS ITEM</h3>
    <hr/>
    <p>I'm afraid Shapeways have recently increased their prices on WSF models. Recent communications with customers suggest the White-Strong-Flexible material is more than suitable, but does need a primer-filler (Auto-shop, 'Duplicolour') paint to smooth out the 'powdery' finish. Look out for a side-laddered version coming soon. My thanks to Mike Ozosky for photos of his 'cow/calf' combo using my 1040 & pup trailer models.</p>  </div>


  </div>



  <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

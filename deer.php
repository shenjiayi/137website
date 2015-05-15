<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/detail.css"/>
  <script src="scripts/deer.js" type="text/javascript"></script>

</head>

<body>
  <?php 
  include("common/menu.php");
  ?>

  <div id="body">
    <div id="container">
      <img id="picture" src="img/deer1.jpg"/>
      <div id="left_holder"><img onclick= "slide(-1)" class ="left" src="img/leftArrow.png" /></div>
      <div id="right_holder"><img  onclick="slide(1)" class= "right" src="img/rightArrow.png"/></div>
    </div>

    <div id="discriptionRight">
    <h3>Deer decoration </h3>
    <p>by DIGITALAB</p>
    <hr/>
    <p>Price:$100</p>
    <p>Black nylon plastic with a matte finish and slight grainy feel.</p>
    <p><a href="#download">Download File</a></p>
    <p><a href="order.php">Order now</a></p>
    </div>

    <div id="smallPic">
    <img class="Preview" id="deer1" src="img/deer1.jpg"/>
    <img class="Preview" id="deer2" src="img/deer2.jpg"/>
    <img class="Preview" id="deer3" src="img/deer3.jpg"/>
    <img class="Preview" id="deer4" src="img/deer4.jpg"/>
    </div>

    <div id="discriptionButtom">
    <h3>MORE ABOUT THIS ITEM</h3>
    <hr/>
    <p>Deer head decoration. Will work for wall (has a hole for nail hanging) or just as standing statue.</p>
    </div>


  </div>



  <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

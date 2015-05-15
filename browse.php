<!DOCTYPE html>


<html>
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv=Content-Type content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/browse.css"/>

</head>
<body>
  <?php 
  include("common/menu.php");
  ?>

  <div id="contentBody">

  <h1>ArtWork:</h1>
    <div class="layerLight">

      <div class="layerContainer">

        <div class="itemTile">
          <a href="penholder.php"><img src="img/penholder2.png"/></a>
          <p>Penholder</p>
          <p>Item number: 222221</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <a href="skull.php"><img src="img/skull1.jpg"/></a>
          <p>Skull</p>
          <p>Item number: 222222</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/19.png"/>
          <p>FLowers</p>
          <p>Item number: 222223</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/17.jpg"/>
          <p>Heel</p>
          <p>Item number: 222224</p>
          <p>Price: $100</p>
        </div>
      </div>

    </div>
    <div class="more"><a href="artwork.php">See more</a></div>

<h1>Animals:</h1>

    <div class="layerDark">
      <div class="layerContainer">

        <div class="itemTile">
          <a href="deer.php"><img src="img/deer1.jpg"/></a>
          <p>Deer decoration</p>
          <p>Item number: 111111</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/8.jpg"/>
          <p>Elephant</p>
          <p>Item number: 111112</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/11.jpg"/>
          <p>Shark</p>
          <p>Item number: 111113</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/14.jpg"/>
          <p>Lion</p>
          <p>Item number: 111114</p>
          <p>Price: $100</p>
        </div>
      </div>
    </div>

<div class="more"><a href="animal.php">See more</a></div>
<h1>Machine:</h1>

    <div class="layerContainer">

        <div class="itemTile">
          <a href="plane.php"><img src="img/plane1.jpg"/></a>
          <p>Plane</p>
          <p>Item number: 333331</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <a href="trailer.php"><img src="img/trailer1.jpg"/></a>
          <p>trailer</p>
          <p>Item number: 333332</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/5.jpg"/>
          <p>Starship Yamato</p>
          <p>Item number: 333333</p>
          <p>Price: $100</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/1.jpg"/>
          <p>Drone</p>
          <p>Item number: 333334</p>
          <p>Price: $100</p>
        </div>
      </div>
<div class="more"><a href="machine.php">See more</a></div>
    </div>
    
  </div>


<script src="scripts/menu.js" type="text/javascript"></script>
  <!--footer-->

<?php 
  include("common/footer.php");
  ?>

</body>

</html>

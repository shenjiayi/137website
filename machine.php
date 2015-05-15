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

    <div class="layerLight">

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

    </div>

    <div class="layerDark">
      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/2.jpg"/>
          <p>deer</p>
          <p>Item number: 333335</p>
          <p>Price: $200</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/3.jpg"/>
          <p>Boat</p>
          <p>Item number: 333336</p>
          <p>Price: $200</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/7.jpg"/>
          <p>Car</p>
          <p>Item number: 333337</p>
          <p>Price: $200</p>
        </div>
      </div>

      <div class="layerContainer">
        <div class="itemTile">
          <img src="img/12.jpg"/>
          <p>Bicycle</p>
          <p>Item number: 333338</p>
          <p>Price: $200</p>
        </div>
      </div>

    </div>
</div>
<script src="scripts/menu.js" type="text/javascript"></script>
  <!--footer-->

<?php 
  include("common/footer.php");
  ?>

</body>

</html>

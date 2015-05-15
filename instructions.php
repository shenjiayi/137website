<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/instructions.css"/>


</head>
<!--menubar -->
<body>
  <?php 
  include("common/menu.php");
  ?>

  <div id="content">

        <!--first four steps summary -->
      <div id ="summary">
        <div id ="title">
            How 3D printing works
        </div>

        <ul id="steps">
            <li> <p> 1.Design a product </p></li>
            <li> <p> 2.Upload to website </p></li>
            <li> <p> 3.We will produce </p></li>
            <li> <p> 4.Share in the community </p></li>
        </ul>
      </div>

        <!--first step design-->
      <div class="Step">
        <div class="StepName">
            1. Design a Product
        </div>

        <div class ="ImgDisplay">
            <img src="img/design1.jpg" alt="design1" width="400px" height="300px"/>
            <div class="Discription">
                <div class ="PicTitle"> Use Your Favorite Software </div>
                <div class ="PicDis"> We support a wide range of programmatic, parametric, sculpting and modeling software. </div>
            </div>
        </div>


        <div class ="ImgDisplay">
            <img src="img/design2.jpg" alt="design2" width="400px" height="300px"/>
            <div class="Discription">
                <div class ="PicTitle"> Hire a Designer</div>
                <div class ="PicDis">Work with the best 3D modellers in the world to bring your idea to life.  </div>
            </div>
        </div>

      </div>


    <!--second step upload-->
     <div class="DarkStep">
        <div class="StepName">
            2.Upload to website
        </div>

        <div class ="ImgDisplay">
            <img src="img/upload1.jpg" alt="upload1" width="400px" height="300px"/>
        </div>

        <div class ="ImgDisplay">
            <img src="img/upload2.jpg" alt="upload2" width="400px" height="300px"/>
        </div>

        <div class="Button">
            <span class="Color"><a href="upload.php">Upload Your Model</a></span>
        </div>

      </div>


    <!--third step produce-->
      <div class="Step">
        <div class="StepName">
            3.We will produce
        </div>

        <div id="video">
         <iframe width="600" height="400" src="https://www.youtube.com/embed/G0EJmBoLq-g" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>


    <!--final step share-->
     <div class="DarkStep">
      <div class="StepName">
        4.Share in the community
      </div>

      <div class ="ImgDisplay">
          <img src="img/share1.png" alt="share1" width="400px" height="300px"/>
          <div class="Discription">
            <div class ="PicTitle"> Upload to our our source community </div>
            <div class ="PicTitle">Get feedback and make friends </div>
          </div>
      </div>

        <div class ="ImgDisplay">
            <img src="img/share2.jpg" alt="share2" width="400px" height="300px"/>
            <div class="Discription">
              <div class ="PicTitle">You can directly download and order the product</div>
            </div>
        </div>

      <div class="Button">
        <span class="Color"><a href="browse.php">Share Your Model</a></span>
      </div>

      </div>



  </div>

   <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

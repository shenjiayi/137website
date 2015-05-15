<!DOCTYPE html>

<html>
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv=Content-Type content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/upload.css"/>

</head>

<body>

  <?php 
  include("common/menu.php");
  ?>
  <div class="uploadbox">

    <img src="img/server.png" alt="" width="350"/>

    <fieldset>
      <legend>Upload Your Files</legend>

      <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

      <div>
      	<label for="fileselect">Files to upload:</label>
      	<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
      </div>

      <div id="submitbutton">
      	<button type="submit">Upload</button>
      </div>

    </fieldset>

  </div>

  <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

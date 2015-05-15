<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/contact.css"/>
  <script src="scripts/contact.js" type="text/javascript"></script>

</head>
<body>
  <?php 
  include("common/menu.php");
  ?>


  <div id="contactBody">
  		<div id ="formHeader">
        	<h1>Contact Form</h1>
        </div>

        <form id="contactForm" onsubmit="return processcontactForm()" action="scripts/processFeedback.php" method="post">
        <table width="100%">
          <col style="width:20%"/>
          <col style="width:80%"/>
                <tr>
                    <td> Last Name: <span class ="RedHighlight"> * </span> </td>
                    <td><input type ="text" name="lastName" size="30" /></td>
                </tr>

                <tr>
                    <td> First Name: <span class ="RedHighlight"> * </span></td>
                    <td><input type ="text" name="firstName" size="30" /></td>
                </tr>

                 <tr>
                    <td> Phone: </td>
                    <td><input type ="text" name="phone" size="30" /></td>
                </tr>

                <tr>
                    <td> Email: <span class ="RedHighlight"> * </span> </td>
                    <td><input type ="text" name="email" size="60" /></td>
                </tr>


                <tr>
                    <td> Subject: <span class ="RedHighlight"> * </span></td>
                    <td><input type ="text" name="subject" size="60" /></td>
                </tr>

                <tr>
                    <td> Message: <span class ="RedHighlight"> * </span> </td>
                    <td><textarea name="message" rows="6" cols="60"></textarea></td>
                </tr>

                <tr>
                     <td colspan="2">Please check here if you wish to receive a
                     reply: <input type="checkbox" name="reply" value="yes" />
                     </td>
                </tr>

                <tr>
                     <td><input type="submit" value="Send Feedback" /></td>
                     <td> <input type="reset" value="Reset Form" /></td>
                </tr>

            </table>
         </form>



  </div>



  <!--footer-->

<?php 
  include("common/footer.php");
  ?>
<script src="scripts/menu.js" type="text/javascript"></script>
</body>

</html>

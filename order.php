<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>E-Commerce Project</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/contact.css"/>
  <script src="scripts/order.js" type="text/javascript"></script>

</head>
<body>
  <?php 
  include("common/menu.php");
  ?>


  <div id="contactBody">
      <div id ="formHeader">
          <h1>Order Now</h1>
        </div>

        <form id="orderForm" onsubmit="return processOrder" action="scripts/processOrder.php" method="post">
        <table width="100%">
          <col style="width:25%"/>
          <col style="width:25%"/>
          <col style="width:25%"/>
          <col style="width:25%"/>
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
                    <td><input type ="text" name="email" size="40" /></td>
                </tr>


                <tr>
                    <td> Item Number: <span class ="RedHighlight"> * </span></td>
                    <td><input type="number" name="order1" min="111111" max="999999" value="111111"/></td>
                    <td> Quantity: <span class ="RedHighlight"> * </span></td>
                    <td><input type="number" name="count1" min="1" max="100" value="1"/></td>
                </tr>

                <tr>
                    <td> Item Number: </td>
                    <td><input type="number" name="order2" min="111111" max="999999" /></td>
                    <td> Quantity: </td>
                    <td><input type="number" name="count2" min="1" max="100" value="1"/></td>
                </tr>


                <tr>
                    <td> Item Number: </td>
                    <td><input type="number" name="order3" min="111111" max="999999" /></td>
                    <td> Quantity: </td>
                    <td><input type="number" name="count3" min="1" max="100" value="1"/></td>
                </tr>

                <tr>
                    <td> Additional Information: </td>
                    <td><textarea name="message" rows="6" cols="60"></textarea></td>
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

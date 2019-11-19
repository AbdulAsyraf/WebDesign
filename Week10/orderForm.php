<?php
  include("header.php");
?>

<!DOCTYPE html>
  <head>
    <title>Order Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="orderFormResult.php" method="post">
      <center><table border="3px">
        <tr><td colspan="4">PERSONAL DETAILS</td></tr>
        <tr><td>Name </td><td colspan="2"><input type="text" name="name" /></td></tr>
        <tr><td>Email </td><td colspan="2"><input type="email" name="email" /></td></tr>
        <tr><td>Phone </td><td colspan="2"><input type="tel" name="phone" /></td></tr>
        <tr><td>Address </td><td colspan="2"><input type="text" name="address" /></td></tr>
        <tr><td colspan="4">ORDERING DETAILS</td></tr>
        <tr><td>Item </td><td>Price (RM)</td><td>Quantity</td></tr>
        <tr><td>Nasi Ayam </td><td>4.50</td><td><input type="number" name="nasiAyamQty" /></td></tr>
        <tr><td>Nasi Tomato </td><td>5.50</td><td><input type="number" name="nasiTomatoQty" /></td></tr>
        <tr><td>Nasi Goreng </td><td>4.00</td><td><input type="number" name="nasiGorengQty" /></td></tr>
        <tr><td colspan="3"><input type="submit" value="Submit Order" /><input type="reset" value="Clear Order" /></td></tr>
      </table>
    </form></center>
  </body>
</html>

<?php
  include("footer.php");
?>

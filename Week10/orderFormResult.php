<?php include("header.php");
  $nasiAyamQty = $_POST["nasiAyamQty"];
  $nasiTomatoQty = $_POST["nasiTomatoQty"];
  $nasiGorengQty = $_POST["nasiGorengQty"];
  $nasiAyamTotal = $nasiAyamQty * 4.5;
  $nasiTomatoTotal = $nasiTomatoQty * 5.5;
  $nasiGorengTotal = $nasiGorengQty * 4.0;
  $total = $nasiAyamTotal + $nasiTomatoTotal + $nasiGorengTotal;
?>

<!DOCTYPE html>
  <head>
    <title>Order Form Result</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2>Thank you <?php echo "<span style=\"color:red\">" . $_POST["name"] . "</span>";?> for ordering food with us</h2>
      <center><table border="3px">
        <tr><td>Name </td><td colspan="3"><?php echo $_POST["name"];?></td></tr>
        <tr><td>Email </td><td colspan="3"><?php echo $_POST["email"];?></td></tr>
        <tr><td>Phone </td><td colspan="3"><?php echo $_POST["phone"];?></td></tr>
        <tr><td>Address </td><td colspan="3"><?php echo $_POST["address"];?></td></tr>
        <tr><td>Item </td><td>Price (RM)</td><td>Quantity</td><td>Total Price (RM)</tr>
        <tr><td>Nasi Ayam </td><td>4.50</td><td><?php echo $_POST["nasiAyamQty"];?></td><td><?php echo $_POST["nasiAyamQty"] * 4.50;?></td></tr>
        <tr><td>Nasi Tomato </td><td>5.50</td><td><?php echo $_POST["nasiTomatoQty"];?></td><td><?php echo $_POST["nasiTomatoQty"] * 5.50;?></td></tr>
        <tr><td>Nasi Goreng </td><td>4.00</td><td><?php echo $_POST["nasiGorengQty"];?></td><td><?php echo $_POST["nasiGorengQty"] * 4.00;?></td></tr>
        <tr><td>Total Bayaran</td><td colspan="3"><?php echo "<span style='color:red'>" . $total . "</span>"; ?></td></tr>
      </table></center>
  </body>
</html>

<?php include("footer.php") ?>

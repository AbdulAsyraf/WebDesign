<?php
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $address = $_POST["address"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $gender = $_POST["gender"];
  $fav = $_POST["fav"];
  $comment = $_POST["comment"];
  include("header.php");
?>

<!DOCTYPE html>
  <head>
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2>Welcome <?php echo $fname . " " . $lname; ?></h2>
    <center><table border="5px">
      <tr>
        <td>First Name</td>
        <td><?php echo $fname; ?></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><?php echo $lname; ?></td>
      </tr>
      <tr>
        <td>Adress</td>
        <td><?php echo $address; ?></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td><?php echo $email; ?></td>
      </tr>
      <tr>
        <td>Phone Number</td>
        <td><?php echo $phone; ?></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php echo $gender; ?></td>
      </tr>
      <tr>
        <td>Favourite Site</td>
        <td><?php
          foreach($fav as $k => $v){
            echo $v."<br>";
          }
        ?></td>
      </tr>
      <tr>
        <td>Comment</td>
        <td><?php echo $comment; ?></td>
      </tr>
    </table></center>
  </body>
</html>

<?php
  include("footer.php");
?>

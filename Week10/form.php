<?php
  include("header.php");
 ?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Form Page</h1>
  <h2>Please fill in the form and click submit form</h2>
  <form action="formResult.php" method="post">
    <center><table>
      <tr><td>First Name: </td><td><input type="text" name="fname" /></td></tr>
      <tr><td>Last Name: </td><td><input type="text" name="lname" /></td></tr>
      <tr><td>Address: </td><td><textarea name="address"></textarea></td></tr>
      <tr><td>Email: </td><td><input type="email" name="email" /></td></tr>
      <tr><td>Phone Number: </td><td><input type="tel" name="phone" /></td></tr>
      <tr><td>Gender: </td><td><input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female</td></tr>
      <tr><td>Favourite Site: </td><td><input type="checkbox" name="fav[]" value="google">Google
        <input type="checkbox" name="fav[]" value="facebook">Facebooooooook
        <input type="checkbox" name="fav[]" value="utem">UTeM</td></tr>
      <tr><td>Comment: </td><td><textarea name="comment"></textarea></td></tr>
      <tr><td><input type="submit" value="Submit Form" /></td><td><input type="reset" value="Clear Form" /></td></tr>
    </table></center>
  </form>
</body>
</html>

<?php
  include("footer.php");
?>

<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Challenge One</title>
  <link rel="stylesheet" href="./lib/css/style.css">
</head>
<body>
  <form method="POST" action="submit.php">
    <div>
      <label for="fname">First Name</label>
      <input type="text" id="fname">
    </div>
    <div>
      <label for="lname">Last Name</label>
      <input type="text" id="lname">
    </div>
    <div>
      <label for="states">State:</label>
      <select name="states" id="states">
  <!--    This is where table will go    -->
    <?php
    foreach($states as $state) {
      echo "<option value=$state[name]>$state[name]</option>";
    }
    ?>
      </select>
    </div>
    <div>
      <input type="submit" id="submit">
    </div>
  </form>
</body>
</html>

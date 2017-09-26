<!DOCTYPE html>
<html>
<head>
  <title>Challenge Two</title>
  <link rel="stylesheet" href="./lib/css/style.css">
</head>
<body>
  <form method="post" action="products.php">
    <div>
      <label for="colors">Select a color:</label>
      <select name="colors" id="colors">
        <option value="Yellow" selected>Yellow</option>
        <option value="Blue">Blue</option>
        <option value="Purple">Purple</option>
        <option value="Orange">Orange</option>
        <option value="Brown">Brown</option>
        <option value="Green">Green</option>
      </select>
    </div>
    <div>
      <input type="submit" id="submit">
    </div>
  </form>
</body>
</html>

<?php
include('connection.php');
$userData = $_POST[colors];

$tables = $db->prepare("SELECT * FROM products WHERE color = '{$userData}'");

$tables->execute();

$products = $tables->fetchAll(PDO::FETCH_ASSOC)

?>
<!DOCTYPE html>
<html>
<head>
  <title>Products</title>
  <link rel="stylesheet" href="./lib/css/style.css">
</head>
<body>
  <table>
    <tr>
      <th>Product Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Color</th>
    </tr>
      <?php foreach($products as $product): ?>
    <tr>
      <td><?php echo $product[name];?></td>
      <td><?php echo $product[description];?></td>
      <td><?php echo $product[price];?></td>
      <td><?php echo $product[color];?></td>
    </tr>
    <?php
  endforeach;
      ?>
  </table>
</body>
</html>

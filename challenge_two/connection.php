<?php
$db = new PDO("mysql:host=localhost;dbname=mrobinson_challenge_two", "r2hstudent", "SbFaGzNgGIE8kfP");
$products = $db->query("SELECT * FROM products");
try {
  $products = $db->query("SELECT * FROM products");
} catch (Exception $e) {
  echo "Results not retrieved";
}

// echo "<pre>";
// var_dump($products->fetchAll(PDO::FETCH_ASSOC));
// echo "</pre>";
?>
<!-- $db = new PDO("mysql:host=localhost;dbname=mrobinson_challenge_one", "r2hstudent", "SbFaGzNgGIE8kfP"); -->

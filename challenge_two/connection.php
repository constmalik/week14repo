<?php
$db = new PDO("mysql:host=localhost;dbname=mrobinson_challenge_two", "r2hstudent", "SbFaGzNgGIE8kfP");
$colors = $db->query("SELECT * FROM products");

echo "<pre>";
var_dump($colors->fetchAll(PDO::FETCH_ASSOC));
echo "</pre>";
?>
<!-- $db = new PDO("mysql:host=localhost;dbname=mrobinson_challenge_one", "r2hstudent", "SbFaGzNgGIE8kfP"); -->

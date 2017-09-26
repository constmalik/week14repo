<?php
$db = new PDO("mysql:host=localhost;dbname=mrobinson_challenge_two", "r2hstudent", "SbFaGzNgGIE8kfp");
$colors = $db->query("SELECT * FROM products");
echo "<pre>";
var_dump($colors->fetchAll(PDO::FETCH_ASSOC));
echo "</pre>";
?>

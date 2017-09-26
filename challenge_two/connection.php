<?php
$db = new PDO("mysql:host=localhost;dbname=challenge_two;port=3306", "root", "root");
$colors = $db->query("SELECT * FROM products");
echo "<pre>";
var_dump($colors->fetchAll(PDO::FETCH_ASSOC));
echo "</pre>";
?>

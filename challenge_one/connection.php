<?php
$db = new PDO("mysql:host=localhost;dbname=challenge_one;port=3306","root","root");
try {
  $results = $db->query("SELECT * FROM states");
  $states = $results->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
  echo "Results not retrieved";
}
echo "<pre>";
// var_dump($states);
echo "</pre>";
?>

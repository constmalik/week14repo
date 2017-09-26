<?php
$db = new PDO("mysql:host=localhost;dbname=mrobinson_challenge_one", "r2hstudent", "SbFaGzNgGIE8kfP");
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

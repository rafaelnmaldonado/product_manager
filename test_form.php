<?php
$sku = $name = $price = $type = $size = $weight = $height = $width = $length = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sku = test_input($_POST["sku"]);
  $name = test_input($_POST["name"]);
  $price = test_input($_POST["price"]);
  $type = test_input($_POST["type"]);
  $size = test_input($_POST["size"]);
  $weight = test_input($_POST["weight"]);
  $height = test_input($_POST["height"]);
  $width = test_input($_POST["width"]);
  $length = test_input($_POST["length"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
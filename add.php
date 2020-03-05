<?php
include "db.php";

$name = $_GET["name"];
$quantity = $_GET["quantity"];
$position = $_GET["position"];

$sql = "INSERT INTO inventory (item_name, item_quant, item_position) VALUES('$name',$quantity,'$position')";
$conn->query($sql);
header('Location: http://localhost/stuff?s=1');
?>

<?php
include "db.php";
$id = $_GET["id"];
$name = $_GET["edit_name"];
$quantity = $_GET["edit_quantity"];
$position = $_GET["edit_position"];

$sql = "UPDATE inventory SET item_name='$name', item_quant='$quantity', item_position='$position' WHERE iid = $id";
$conn->query($sql);
header('Location: http://localhost/stuff?e=1');
?>

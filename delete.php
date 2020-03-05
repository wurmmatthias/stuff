<?php
include "db.php";

$item = $_GET["id"];

$sql = "DELETE FROM inventory WHERE iid = $item";
$conn->query($sql);
header('Location: http://localhost/stuff');
?>

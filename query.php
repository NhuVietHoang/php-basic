<?php
include "db-connect.php";
$query="SELECT * FROM products ORDER BY id";
$data=mysqli_query($conn, $query);

var_dump($data);
?>

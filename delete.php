<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that buku
$id = $_GET['id'];
 
// Delete book row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM buku WHERE id=$id") or die(mysqli_error($mysqli));
 
// After delete redirect to Home, so that latest book list will be displayed.
header("Location:index.php");
?>
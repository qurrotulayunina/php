<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'perpustakaan';
$databasebukuname = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databasebukuname, $databasePassword, $databaseName); 
 
?>
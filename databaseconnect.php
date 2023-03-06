<?php
 
// Create connection
 
$conn = new mysqli("localhost", "u212810000_programadmin", "hyn*PAF!ueu2kzu8nqt", "u212810000_Recipes");
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
?>
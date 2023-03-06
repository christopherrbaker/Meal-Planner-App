<?php

$conn = new mysqli("localhost", "u212810000_programadmin", "hyn*PAF!ueu2kzu8nqt", "u212810000_Recipes");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace "table_name" with the name of your table
$sql = "SELECT * FROM `recipes-short`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $recipe_name = $row["Name"];
        $link = $row["link"];
        // Generate the HTML link using the $link variable
        echo '<a href="'.$link.'">View Recipe</a><br>';
    }
} else {
    echo "0 results";
}

?>
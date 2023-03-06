<?php

$conn = new mysqli("localhost", "u212810000_programadmin", "hyn*PAF!ueu2kzu8nqt", "u212810000_Recipes");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace "table_name" with the name of your table
$sql = "SELECT * FROM `recipes-short`";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Start the HTML table
    echo "<table>";

    // Output the table header row
    echo "<thead>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Category</th>";
    echo "<th>Prep Time</th>";
    echo "<th>Cook Time</th>";
    echo "<th></th>";
    echo "</tr>";
    echo "</thead>";

    // Output the data for each row
    echo "<tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Category"] . "</td>";
        echo "<td>" . $row["Prep Time"] . "</td>";
        echo "<td>" . $row["Cook Time"] . "</td>";
        echo '<td><a href="' . $row["link"] . '">View Recipe</a></td>';
        echo "</tr>";
    }

    echo "</tbody>";

    // End the HTML table
    echo "</table>";
} else {
    // Output an error message if no rows were returned
    echo "<center>No recipes found.</center>";
    echo "<br><br>";
}

// Close the database connection
$conn->close();

?>
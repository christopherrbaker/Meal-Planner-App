<?php

$conn = new mysqli("localhost", "u212810000_programadmin", "hyn*PAF!ueu2kzu8nqt", "u212810000_Recipes");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validate input data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $prepTime = mysqli_real_escape_string($conn, $_POST['prep-time']);
    $cookTime = mysqli_real_escape_string($conn, $_POST['cook-time']);
    $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
    $instructions = mysqli_real_escape_string($conn, $_POST['instructions']);

    $dir = ($name);
    if (is_dir($dir)) {
        echo "Directory exists";
    }
    else {
        mkdir($dir);

        // insert data into the database
        $sql = "INSERT INTO `recipes-short` (`Name`, `Category`, `Prep Time`, `Cook Time`, `link`) 
                VALUES ('$name', '$category', '$prepTime', '$cookTime', '$dir')";

        if (mysqli_query($conn, $sql)) {
            echo "New recipe added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// close the database connection
mysqli_close($conn);

// send user back to /recipes page
$url = '/portfolio/MealPlannerApp/recipes/';
$message = "Recipe created successfully!";
$query = http_build_query(array('message' => $message));

header('Location: ' . $url . '?' . $query);

?>

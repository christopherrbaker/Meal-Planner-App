<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Recipes - Meal Planning App</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <header>
            <h1>Meal Planning App</h1>
            <nav>
                <ul>
                    <li><a href="../">Meal Plan</a></li>
                    <li><a href="#">Recipes</a></li>
                    <li><a href="#">More</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
                if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                    echo '<div class="alert alert-success">' . $message . '</div>';
                }
            ?>
            <h2>My Recipes</h2>
            <?php include '../show-recipes.php'; ?>
            <h2>Add New Recipe</h2>
            <form class="add-recipe" method="POST" action="../create-recipe.php">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category">
                </div>
                <div>
                    <label for="prep-time">Prep Time:</label>
                    <input type="text" id="prep-time" name="prep-time">
                </div>
                <div>
                    <label for="cook-time">Cook Time:</label>
                    <input type="text" id="cook-time" name="cook-time">
                </div>
                <div>
                    <label for="ingredients">Ingredients:</label>
                    <textarea id="ingredients" name="ingredients"></textarea>
                </div>
                <div>
                    <label for="instructions">Instructions:</label>
                    <textarea id="instructions" name="instructions"></textarea>
                </div>
                <div class="add-recipe-create-button">
                    <button type="submit">Create Recipe</button>
                </div>
            </form>



        </main>
    </body>
</html>

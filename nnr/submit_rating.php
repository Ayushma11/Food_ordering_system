<?php
// submit_rating.php

// Include your database connection code (e.g., _dbconnect.php)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pizzaId = $_POST['pizzaId'];
    $rating = $_POST['rating'];

    // Update the rating in the database
    $sql = "UPDATE pizza SET rating = $rating WHERE pizzaId = $pizzaId";

    if (mysqli_query($conn, $sql)) {
        header("Location: your_menu_page.php"); // Redirect back to the menu page
        exit;
    } else {
        echo "Error updating rating: " . mysqli_error($conn);
    }
}
?>

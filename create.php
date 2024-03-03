<?php
if (isset($_POST['add'])) {
    // Database connection
    include 'db.php';

    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Insert data into database
    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";
    mysqli_query($conn, $sql);

    // Close connection
    mysqli_close($conn);
}
?>

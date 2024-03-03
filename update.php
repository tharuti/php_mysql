<?php
if (isset($_POST['update'])) {
    // Database connection
    include 'db.php';

    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Update data in database
    $sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id='$id'";
    mysqli_query($conn, $sql);

    // Close connection
    mysqli_close($conn);
}
?>

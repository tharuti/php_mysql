<?php
if (isset($_GET['id'])) {
    // Database connection
    include 'db.php';

    // Get product ID
    $id = $_GET['id'];

    // Delete product from database
    $sql = "DELETE FROM products WHERE id='$id'";
    mysqli_query($conn, $sql);

    // Close connection
    mysqli_close($conn);

    // 
    header("Location: index.php");
}
?>

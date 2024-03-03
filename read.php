<?php
// Database connection
include 'db.php';

// Retrieve products from database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Display products in HTML table
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td><a href='#' onclick='populateForm(".$row['id'].", \"".$row['name']."\", \"".$row['description']."\", ".$row['price'].")'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
        echo "</tr>";
    }
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Product Management</h2>

<!-- Form for adding and editing products -->
<form action="process.php" method="post">
    <input type="hidden" name="id" value="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value=""><br>
    <label for="description">Description:</label><br>
    <textarea id="description" name="description"></textarea><br>
    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price" value=""><br><br>
    <button type="submit" name="add">Add Product</button>
    <button type="submit" name="update">Update Product</button>
</form>

<br>

<!-- Table to display products -->
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <?php include 'read.php'; ?>
</table>
<script>
    function populateForm(id, name, description, price) {
        document.querySelector('input[name="id"]').value = id;
        document.querySelector('input[name="name"]').value = name;
        document.querySelector('textarea[name="description"]').value = description;
        document.querySelector('input[name="price"]').value = price;
    }
</script>

</body>
</html>

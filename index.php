<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles can be added here */
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Product Management</h2>

    <!-- Form for adding and updating products -->
    <form action="process.php" method="post">
        <input type="hidden" name="id" value="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-primary" name="add">Add Product</button>
        <button type="submit" class="btn btn-success" name="update">Update Product</button>
    </form>

    <hr>

    <!-- Table to display products -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'read.php'; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script to populate form fields for updating -->
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

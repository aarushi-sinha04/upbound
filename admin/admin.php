

<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch product data from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Convert the result to an associative array
    $products = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($products);
} else {
    echo "No products found";
}

$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="admin-container">
        <h1>Product Management</h1>
        <div id="product-list"></div>
    </div>

    <!-- Modal for Editing Product -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Edit Product</h2>
            <form id="editForm">
                <!-- Form fields for editing product details -->
            </form>
            <button type="button" onclick="updateProduct()">Update Product</button>
        </div>
    </div>

    <script src="admin.js"></script>
</body>
</html>

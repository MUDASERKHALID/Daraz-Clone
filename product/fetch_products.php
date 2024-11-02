<?php
include("db_connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Showcase</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            overflow: hidden;
            width: 300px;
            background-color: #fff;
        }

        .product-card img {
            width: 100%;
            height: auto;
        }

        .product-details {
            padding: 15px;
            text-align: left;
        }

        .product-price {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Product Showcase</h1>
    </header>

    <div class="container-fluid product-container">
        <?php
        $query = "SELECT * FROM products";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card product-card'>";
                echo "<img src='" . $row['image'] . "' class='card-img-top' alt='Product Image'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
                echo "<p class='card-text product-details'>" . $row['description'] . "</p>";
                echo "<p class='card-text product-price'>Price: $" . $row['price'] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p class='text-center'>No products found.</p>";
        }
        ?>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>

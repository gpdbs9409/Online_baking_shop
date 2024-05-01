<?php
session_start(); // Start the session

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['customer_id'])) {
    header("Location: login.php");
    exit;
}

// Include the database connection
require 'database.php';

// Fetch the latest order for the logged-in customer
$sql = "SELECT order_id, special_request, price_total FROM Orders WHERE customer_id = ? ORDER BY order_id DESC LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_SESSION['customer_id']);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo "<h1>Order Confirmation</h1>";
    echo "<p>Order ID: " . $row['order_id'] . "</p>";
    echo "<p>Special Request: " . $row['special_request'] . "</p>";
    echo "<p>Total Price: $" . $row['price_total'] . "</p>";
} else {
    echo "<p>No recent orders found.</p>";
}
$stmt->close();
?>

<a href="logout.php">Logout</a>  <!-- Link to log out -->

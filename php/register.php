<?php include('header.php')?>
<?php
    include('files/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $username = htmlspecialchars($_POST['username']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $address = htmlspecialchars($_POST['address']);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect post variables
        $user_username = $_POST['username'];
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password before saving it to the database
        $user_address = $_POST['address'];
    
        $sql = "INSERT INTO customers (username, name, email, password, address) VALUES (?, ?, ?, ?, ?)";
    
        // Prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $user_username, $user_name, $user_email, $user_password, $user_address);
    
        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $stmt->close();
    }
    
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="register.php" method="post">
        Username: <input type="text" name="username" required><br>
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        Address: <input type="text" name="address" required><br>
        <input type="submit" value="Register">
    </form>
</body>
<?php include('footer.php')?>
</html>
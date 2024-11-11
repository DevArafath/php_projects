<?php
include '../includes/db.php';

// Define admin credentials
$username = 'admin';
$password = 'admin_password';

// Hash the password securely
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insert the admin user into the database
$stmt = $conn->prepare("INSERT INTO admin (username, password_hash) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password_hash);
if ($stmt->execute()) {
    echo "Admin user created successfully!";
} else {
    echo "Error creating admin user: " . $conn->error;
}
$stmt->close();
$conn->close();
?>

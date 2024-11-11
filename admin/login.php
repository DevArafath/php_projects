<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Admin Login</h1>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <?php
        include '../includes/db.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $conn->real_escape_string($_POST['username']);
            $password = $_POST['password'];

            // Prepare and execute the query to fetch the password hash
            $stmt = $conn->prepare("SELECT password_hash FROM admin WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($password_hash);
            $stmt->fetch();
            $stmt->close();

            // Check if the username exists and verify the password
            if ($password_hash && password_verify($password, $password_hash)) {
                session_start();
                $_SESSION['admin_logged_in'] = true;
                header('Location: index.php');
                exit();
            } else {
                echo "<p class='text-danger text-center'>Invalid credentials</p>";
            }
            
            $conn->close();
        }
        ?>
    </div>
</body>
</html>

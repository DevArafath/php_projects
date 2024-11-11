<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Edit Doctor</h1>
        <?php
        include '../includes/db.php';
        $id = $conn->real_escape_string($_GET['id']);
        $sql = "SELECT * FROM doctors WHERE id='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <form action="edit_doctor.php?id=<?php echo $id; ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label">Specialty</label>
                <input type="text" class="form-control" id="specialty" name="specialty" value="<?php echo htmlspecialchars($row['specialty'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact" value="<?php echo htmlspecialchars($row['contact'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Doctor</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $conn->real_escape_string($_POST['name']);
            $specialty = $conn->real_escape_string($_POST['specialty']);
            $contact = $conn->real_escape_string($_POST['contact']);

            $sql = "UPDATE doctors SET name='$name', specialty='$specialty', contact='$contact' WHERE id='$id'";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Doctor updated successfully</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>

<!-- admin/index.php -->
<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-12">
                <a href="add_doctor.php" class="btn btn-primary">Add Doctor</a>
                <a href="list_doctors.php" class="btn btn-secondary">View Doctors</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>

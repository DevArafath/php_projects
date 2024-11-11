<!-- admin/list_doctors.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Doctors</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Doctors List</h1>
        <table class="table table-bordered">
            
            <tbody>
            <?php
                include '../includes/db.php';
                $sql = "SELECT * FROM doctors";
                $result = $conn->query($sql);
                ?>

                <table class="table table-bordered table-hover table-striped text-center align-middle mt-4">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="col-1">Profile</th>
                            <th scope="col" class="col-3">Name</th>
                            <th scope="col" class="col-3">Specialty</th>
                            <th scope="col" class="col-2">Contact</th>
                            <th scope="col" class="col-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><img src='../images/{$row['image']}' alt='{$row['name']}' class='img-fluid rounded-circle' width='80'></td>";
                                echo "<td>{$row['name']}</td>";
                                echo "<td>{$row['specialty']}</td>";
                                echo "<td>{$row['contact']}</td>";
                                echo "<td>";
                                echo "<a href='edit_doctor.php?id={$row['id']}' class='btn btn-warning btn-sm me-2'>Edit</a>";
                                echo "<a href='delete_doctor.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No doctors found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <?php
                $conn->close();
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>

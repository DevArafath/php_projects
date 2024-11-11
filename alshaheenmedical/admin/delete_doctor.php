<!-- admin/delete_doctor.php -->
<?php
include '../includes/db.php';

$id = $conn->real_escape_string($_GET['id']);

$sql = "DELETE FROM doctors WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Doctor deleted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
header("Location: list_doctors.php");
exit();
?>

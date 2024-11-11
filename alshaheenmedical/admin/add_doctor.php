<?php
include '../includes/db.php';

// Function to crop and resize the uploaded image
function cropAndResizeImage($sourcePath, $destinationPath, $newWidth, $newHeight) {
    // Detect the image type
    $imageInfo = getimagesize($sourcePath);
    if (!$imageInfo) {
        echo "<p class='text-danger'>Unable to get image size</p>";
        return false;
    }

    $mime = $imageInfo['mime'];

    // Create an image resource based on the MIME type
    switch ($mime) {
        case 'image/jpeg':
            $src = imagecreatefromjpeg($sourcePath);
            break;
        case 'image/png':
            $src = imagecreatefrompng($sourcePath);
            break;
        case 'image/gif':
            $src = imagecreatefromgif($sourcePath);
            break;
        default:
            echo "<p class='text-danger'>Unsupported image type: $mime</p>";
            return false;
    }

    if (!$src) {
        echo "<p class='text-danger'>Failed to create image resource</p>";
        return false;
    }

    // Get original dimensions
    list($width, $height) = $imageInfo;

    // Calculate the crop size while maintaining the aspect ratio
    $cropWidth = $width;
    $cropHeight = ($width * $newHeight) / $newWidth;

    if ($cropHeight > $height) {
        $cropHeight = $height;
        $cropWidth = ($height * $newWidth) / $newHeight;
    }

    // Calculate the coordinates to crop the image from the center
    $xOffset = ($width - $cropWidth) / 2;
    $yOffset = ($height - $cropHeight) / 2;

    // Create a blank image with the desired dimensions
    $dst = imagecreatetruecolor($newWidth, $newHeight);

    // Preserve transparency for PNG and GIF
    if ($mime == 'image/png' || $mime == 'image/gif') {
        imagecolortransparent($dst, imagecolorallocatealpha($dst, 0, 0, 0, 127));
        imagealphablending($dst, false);
        imagesavealpha($dst, true);
    }

    // Crop and resize the image
    imagecopyresampled($dst, $src, 0, 0, $xOffset, $yOffset, $newWidth, $newHeight, $cropWidth, $cropHeight);

    // Save the cropped and resized image based on the MIME type
    switch ($mime) {
        case 'image/jpeg':
            imagejpeg($dst, $destinationPath, 90);
            break;
        case 'image/png':
            imagepng($dst, $destinationPath);
            break;
        case 'image/gif':
            imagegif($dst, $destinationPath);
            break;
    }

    // Free up memory
    imagedestroy($src);
    imagedestroy($dst);

    return true;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $specialty = $conn->real_escape_string($_POST['specialty']);
    $contact = $conn->real_escape_string($_POST['contact']);

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image']['tmp_name'];
        $timestamp = date("YmdHis");
        $imageName = 'doctor_' . $timestamp . '.jpg';
        $imagePath = "../images/" . $imageName;

        // Crop and resize the image
        if (cropAndResizeImage($image, $imagePath, 600, 400)) {
            // Insert into database
            $sql = "INSERT INTO doctors (name, specialty, contact, image) VALUES ('$name', '$specialty', '$contact', '$imageName')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='text-success'>New doctor added successfully</p>";
            } else {
                echo "<p class='text-danger'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        } else {
            echo "<p class='text-danger'>Image upload failed</p>";
        }
    } else {
        echo "<p class='text-danger'>Please upload a valid image file</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Add Doctor</h1>
        <form action="add_doctor.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label">Specialty</label>
                <input type="text" class="form-control" id="specialty" name="specialty" required>
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Doctor</button>
        </form>
    </div>
</body>
</html>

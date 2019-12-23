<?php
if (isset($_POST['submit'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // image file directory
    $target = "images/" . basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "Image uploaded successfully";
    } else {
        echo "Failed to upload image";
    }
}
?>
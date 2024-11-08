<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png");
    $max_size = 2 * 1024 * 1024; // 2 MB

    foreach ($_FILES['files']['name'] as $key => $file_name) {
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Check file extension
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "$file_name: Allowed file types are JPG, JPEG, and PNG.";
            continue;
        }

        // Check file size
        if ($file_size > $max_size) {
            $errors[] = "$file_name: File size should not exceed 2 MB.";
            continue;
        }

        // If no errors, move the file to the images directory
        if (empty($errors)) {
            $upload_directory = "images/";
            if (!file_exists($upload_directory)) {
                mkdir($upload_directory, 0755, true);
            }

            if (move_uploaded_file($file_tmp, $upload_directory . basename($file_name))) {
                echo "$file_name uploaded successfully.<br>";
            } else {
                echo "$file_name: Failed to upload.<br>";
            }
        }
    }

    // Display any errors
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>

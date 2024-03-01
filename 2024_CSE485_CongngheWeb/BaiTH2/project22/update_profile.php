<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // Handle avatar upload (similar to previous exercise)
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 5048576; // 5MB
    $targetDir = "uploads/"; // Adjust directory path
    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 5MB.";
        } else {
            $fileName = uniqid('', true) . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile; // Update avatar URL in array
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }
    if (empty($errors)) {
        // Update user profile in database or persistent storage (replace with your logic)
        echo "Profile updated successfully!";
    } else {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
?>

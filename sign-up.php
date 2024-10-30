<?php
include 'config.php';

// Check if a session is not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    
    // Check if email already exists
    $stmt = $conn->prepare("SELECT uid FROM user WHERE LOWER(uemail) = LOWER(?)");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script> alert('Email already exists');window.location='webp/sign-in.php';</script>";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO user (uname, uemail, upassword, uphone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $email, $password, $phone);
        if ($stmt->execute()) {
            echo "<script>alert('Registered successfully');window.location='webp/mainhome.php'</script>";
        } else {
            echo "<script>alert('Registration failed');window.location='webp/register12.php'</script>";
        }
    }

    $stmt->close();
}

$conn->close();
?>


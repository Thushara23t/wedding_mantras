<?php
include 'config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['sign-in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM user WHERE uemail = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any rows returned
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['upassword'])) {
            // Set session variable
            $_SESSION['email'] = $row['uemail'];
            echo "<script>alert('Login successful');window.location='webp/mainhome.php';</script>";
        } else {
            echo "<script>alert('Invalid email or password');window.location='webp/sign-in.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid email or password');window.location='webp/sign-in.php';</script>";
    }

    // Close statement
    $stmt->close();
}
?>
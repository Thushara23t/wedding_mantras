<?php
// Include your database configuration file
include('config.php');

// Check if the form is submitted
if(isset($_POST['submit'])){
    // Retrieve form data
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to insert data into your register table
    $sql = "INSERT INTO register (username, phone, email, password) VALUES ('$username', '$contact', '$email', '$password')";

    // Execute the query
    if(mysqli_query($conn, $sql)){
        echo "Registration successful!";
        header("Location: demologin.php");
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Mantras</title>
    <link rel="stylesheet" href="logincss.css">
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <center> <img src="logo1.jpg" alt="Logo" class="logo"></center>
        </div>	
        <nav>
            <ul>
                <li><a href="home.php">About US</a></li>
                <li><a href="about.php">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact us">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container1">
    <h2>Register here!!</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter Your Name">
        <label for="contact">Phone:</label>
        <input type="text" id="contact" name="contact" placeholder="Valid Phone Number">
        <label for="email">Email ID:</label>
        <input type="text" id="email" name="email" placeholder="Enter Your Email">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Your Valid Password">
        <input type="submit" name="submit" value="Register"><br><br>
    </form>
</div>
<footer>
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>
</body>
</html>

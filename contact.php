<?php
// Include your database configuration file
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['username'];
    $email = $_POST['mail'];
    $phone = $_POST['tel'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    // SQL query to insert data into the contact table
    $sql = "INSERT INTO contact (name, email, phone, city, message) VALUES ('$name', '$email', '$phone', '$city', '$message')";

    // Execute the query
    if(mysqli_query($conn, $sql)){
        echo '<script>alert("Form submitted successfully!");</script>';
    } else{
        echo '<script>alert("Error: ' . $sql . '\n' . mysqli_error($conn) . '");</script>';
    }
    }

    // Close the database connection
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Mantras</title>
    <link rel="stylesheet" href="maincss.css">
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <center> <img src="logo1.jpg" alt="Logo" class="logo"></center>
            </div>	
            <nav>
                <ul>
                <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container1">
        <center><h2>Contact Us</h2></center>
        <form action="" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="username" name="username" placeholder="Enter Your Name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="mail" name="mail" placeholder="Valid Email-ID" required><br><br>

            <label for="phone">Mobile:</label><br>
            <input type="tel" id="tel" name="tel" placeholder="Valid Number" required><br><br>

            <label for="city">City:</label><br>
            <input type="text" id="city" name="city" placeholder="Enter Your City" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="39" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

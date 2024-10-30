<?php
// Include your database configuration file
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['login'])) {
        // Login form submitted
        $email = $_POST['email'];
        $password = $_POST['password'];

        // SQL query to check login credentials against the register table
        $sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            // User credentials found in register table
            $row = mysqli_fetch_assoc($result);

            // Insert user credentials into the login table
            $insert_sql = "INSERT INTO login (email, password) VALUES ('" . $row['email'] . "', '" . $row['password'] . "')";

            if(mysqli_query($conn, $insert_sql)){
                echo "Login successful! .";
                // Redirect to another page after successful login
                header("Location: mainhome.php");
                exit();
            } else {
                echo "Error copying user credentials to login table: " . mysqli_error($conn);
            }
        } else {
            echo "Login failed. Invalid email or password.";
        }
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
    <title>Login Page</title>
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
                <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container1">
        <h2>Login Here!!</h2>
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"placeholder="Enter Your email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"placeholder="Your Valid password">
            <input type="submit" name="login" value="Login"><br><br>
            <br>
            <a href="register12.php">Sign Up</a>
        </form>
    </div>
    <footer>
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>
</body>
</html>

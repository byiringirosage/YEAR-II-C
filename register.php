<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioPro</title>
	
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#8d8a8a;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .switch-page {
            text-align: center;
            margin-top: 20px;
        }

        .switch-page a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
     <link rel="stylesheet" href="styele.css">
    </head>
	

<body>
<header>
    <div class="logo">
        <img src="pictures/log.jpeg" alt="PortfolioPro Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
       
            <li><a href="resume.php">Resume</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
    </nav>
    <a href="portifolio.php" class="cta-button">View Portfolio</a>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="register.php" class="cta-buttoni" >Register</a>
    <a href="login.php" class="cta-buttoni">Login</a>
</header>
    <div class="container">
        <h2>Signup</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Signup" name="send"><br>
            <i>Already have an account? <a href="login.php">Login here</a>.</i>
        </form>
        <div class="switch-page">
         
        </div>
    </div>

<?php
if(isset($_POST['send'])){

$conn=  mysqli_connect("localhost","root","","mydb");

$username = $_POST['username'];
$password = $_POST['password'];


//SQL query to insert data into the table
$sqli = "INSERT INTO user (username, passwords) VALUES ('$username', '$password')";
$query=mysqli_query($conn,$sqli);

// Execute query
if ($sqli) {
    echo "<script>
    alert('Registered successfull go to login');</script>";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();



}



?>

</body>

</html>
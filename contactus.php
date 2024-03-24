<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioPro</title>
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
<center><div class"company-info">
        <h1>Let's Do a great Work togehter! </h1>
        <h2>Contuct Us! Please Feel Free to Ask We are here to Help</h2>
        <p>Welcome to YearIIC! We are a team of passionate web designers and <br>developers dedicated to creating visually 
        appealing and functional web experiences. Our portfolio showcases our skills, projects,<br> and achievements 
        in web design and development. Feel free to reach out to us through this  contact form below.</p>
    </div></center>
    <div class="container">
        <h1>Please Fill This Form to Leave your Message</h1><br>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <input type="submit" value="Leave Message" name="leave">
        </form>
    </div>

    <div class="company-info">
        
            <i>YearIIC! We are a team of passionate web designers and developers dedicated to creating visually 
            appealing and functional web experiences. Our portfolio showcases our skills, projects, 
            and achievements in web design and development. Feel free to reach out to us through the contact form above.</i>
    </div>


    <?php
    if(isset($_POST['leave'])){
    $conn=mysqli_connect("localhost","root","","mydb");
    $tab = "CREATE TABLE visitor (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Names VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        messages varchar(100),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
$query=mysqli_query($conn,$tab);
/*if($tab){
    echo"created";
}else{
    echo"not created";
}*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sqli = "INSERT INTO visitor (Names, email,messages) VALUES ('$name','$email','$message')";
$query=mysqli_query($conn,$sqli);
/*if ($sqli){
    echo " inserted";
}else{
    echo "no ";
}*/


if ($query) {
    echo"<script>alert('Thank you for your message')</script>";
   
  }else{
    echo "no message sent";
  }


    }
    ?>

</body>

</html>
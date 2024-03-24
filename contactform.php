<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PortfolioPro</title>
	<style type="text/css">
		h2{
			font-family: cursive;
		}
		.f1{
			
			width: 30em;
			margin-top: 5em;
			border-radius: 0.5em;
			padding-bottom: 2em;
		}
		{
			font-family: comic sans ms;
			color: white;

		}
		
        textarea{
             	 background-color: white;
	      color: white;
	      	box-shadow: 3px 3px 3px;		
             }
		input{
	      transition: 2s;
	      background-color: white;
	      color: white;
	      	box-shadow: 3px 3px 3px;	
             }

textarea{
	      background-color: white;
	      color: white;
	      	box-shadow: 3px 3px 3px;	;
	
}
		input[type=submit]{
			color: black;
			width: 15em;
			height: 3.5em;
		}
		input[type=reset]{
			color: black;
			width: 14em;
			height: 3.5em;
		}
		input[type=text]{
			color: black;
			width: 22em;
			height: 2.5em;
			border-radius: 0.5em;
		}
		input[type=number]{
			color: black;
			width: 22em;
			height: 2.5em;
			border-radius: 0.5em;
		}
		input[type=email]{
			color: black;
			width: 22em;
			height: 2.5em;
			border-radius: 0.5em;
		}
		input[type=password]{
			color: black;
			width: 22em;
			height: 2.5em;
			border-radius: 0.5em;
		}
		textarea{
			color: black;
			width: 22em;
			height: 2.5em;
			border-radius: 0.5em;
		}
		.sbmt{
			padding-top: 0.7em;
			border-radius: 0.5em;
			box-shadow: 2px 2px 2px;	
		}


	</style>
</head>
<body bgcolor="black">
<header>
    <div class="logo">
        <img src="pictures/log.jpeg" alt="PortfolioPro Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
       
            <li><a href="resume.php">Resume</a></li>
            <li><a href="contactform.php">Contact Us</a></li>
        </ul>
    </nav>
    <a href="portifolio.php" class="cta-button">View Portfolio</a>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="register.php" class="cta-buttoni" >Register</a>
    <a href="login.php" class="cta-buttoni">Login</a>
</header>
     
    

         <form method="POST">
         	<center>
         	  <fieldset class="f1">
         	  	<h2>Contact Form</h2>
         	  	  <table border="0">

         	  	  	 <tr>
         	  	  	 	<td>First Name</td>
         	  	  	 	<td><input type="text" name="fn" required=""></td>
         	  	  	 </tr>

         	  	  	  <tr>
         	  	  	 	<td>Last Name</td>
         	  	  	 	<td><input type="text" name="fn" required=""></td>
         	  	  	 </tr>

         	  	  	 
         	  	  	  <tr>
         	  	  	 	<td>Email</td>
         	  	  	 	<td><input type="Email" name="fn" required=""></td>
         	  	  	 </tr>
         	  	  	
         	  	  	 
         	  	  	 <tr>
         	  	  	 	<td>Message</td>
         	  	  	 	<td><textarea required="" placeholder="describe Your Message Here"></textarea></td>
         	  	  	 </tr>

         	  	  	 <tr>
         	  	  	 	<td colspan="2" class="sbmt">
         	  	  	 		<input type="Reset"  value="Cancel">
         	  	  	 		<a href="login.html">
         	  	  	 			<input type="submit" name="save" value="Send Message"></a>
         	  	  	 		

         	  	  	 	</td>
         	  	  	 </tr>
         	  	  </table>
         	  </fieldset>
         	  </center>
         </form>
</body>
</html>
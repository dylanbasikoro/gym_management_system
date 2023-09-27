<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="main"> 
        <header>
            <div class="navbar">
                <div class="icon">

                    
                </div>
                <div class="menu">
                    <ul>

                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT </a></li>
                        
                    </ul>
                </div>
            </div>
        </header>
 
        <div class="content">
            <h1>Welcome to  the  <br><span>AU Gym Management System</span><br></h1>
            <p class="par"> Welcome to the Africa University Gym Management System regsitration platform. Feel free <br>to use this platform to enter your information if you are part<br> of university staff or student body.</p>

            <button class="cn"><a href="#">Visit Our Campus</a></button>
        </div>


        <form action=".php" method="post">
                    <div class="form">
                        
                        <h2> Enter Informataion</h2>
                        <input type="text" name="student_id" placeholder="student_id"><br>
                        <input type="password" name="password" placeholder="password" required><br>
                    
                        
                        <button class="btnn">Login</button>

                        <p class="link"> Not Registered<br>
                        <a href="registration.php">Register</a> Here</a></p>
                        <br>
                    </div>
        </form>
   </div>
</body>
</html>

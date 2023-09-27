<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AU Gym Management System</title>
    <script src="registration.js"></script>
</head>
<body>
<form>    
    <div class="main">
            <div class="form-2">
                
                <form action=".php" method="post">
                <h2> Enter Information</h2>
                <input type="text" name="fname" placeholder="First Name" required><br>
                <input type="text" name="lname" placeholder="Last Name" required><br>
                <input type="text" name="student_id" placeholder="Enter Student ID" required><br>
                <input type="email" name="email" placeholder="Enter Email" required><br>
                <label for="gender">Gender:</label>
                <input type="radio" value="Male">Male
                <input type="radio" value="Female">Female<br>
                <input type="text" name="contact" placeholder="Enter Number" required><br>
                <input type="password" name="password" placeholder="Enter Password" required><br>
                <!--<input type="password" name="confirm_password" placeholder="Confirm Password" required><br>-->

                <br>
                <button class="btnn"><a href="#">Register</a></button>
                
            </div>
         </div>
    </div>
</form>
</body>
</html>
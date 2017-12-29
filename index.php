<!DOCTYPE html>
<html>
<head>
    <title>Webchat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main">
       <div id="info">
         <h2>Login here</h2>

         <form action="login.php" method="post">
         <label><b>Username</b></label>
         <input type="text" name="uname" placeholder="User name"><br><br>
         <label><b>Password</b></label>
         <input type="password" name="pass" placeholder="Password"><br><br>
         <button type="submit"><b>Login</b>
         </button>
         </form>

         <form action="signup.php" method="post">
         <h2>Don't have an account? Sign up here!</h2>
         <label>Username</label>
         <input type="text" name="uname" placeholder="Username"><br>
         <br>
         <label>Email ID</label>
         <input type="text" name="Email" placeholder="Email"><br>
         <br>
         <label>Password</label>
         <input type="password" name="Password" placeholder="Password"><br>
         <br>
         <button type="submit"><b>Sign up</b>
         </button>
         </form>


         </div>

</div>
</body>
</html>
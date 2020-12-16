<?php
include('logincode.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Profile Page
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>:: Meri Phulwari | Login ::</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
	<style type="text/css">

	form {
    border: 3px solid #f1f1f1;
   }

   	body{
   		font-family: raleway;
   	}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer {
    text-align: center;
    margin: 40px 30px 12px 30px;
}

img.avatar {
    width: 15%;
    height: 15%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    margin:1% 7%;
}
span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}

	</style>

</head>
<body>

<form action="" method="post">
  <div class="imgcontainer">
    <img src="images/logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username/Email</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psassword"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

       <button name="submit" type="submit" value=" Login ">Login</button>
   <span><?php echo $error; ?></span>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  	<p>New To Meri-Phulwari? <a href="signup.html">Register</a></p>
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
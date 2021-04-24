
<!DOCTYPE HTML>  
<html>
<head>
<title>Registration</title>
</head>
<body>
  <div class="header">
<?php include 'header.php';?>
</div>
 
 <?php
$nameErr = $emailErr = $usernameErr = $passwordErr = "";
$name = $email =  $username= $password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Registration</h2>
<p><span class="error">* required field</span></p>
<form action="controller/createUser.php" method="POST" enctype="multipart/form-data">  
  Name: <input type="text" id="name" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" id="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Username: <input type="text" id="username" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="password" id="password" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <input type="file" name="image">
  <br><br>
  <button type="submit" name="createUser"> Submit </button>
  <input type="reset">

  <p>Already a user?<a href="login2.php"><b>Log In</b></a></p>

</form>
<?php include 'footer.php';?>
</body>
</html>
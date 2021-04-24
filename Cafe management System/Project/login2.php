<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="./login2.css">
</head>
<body>

<h2>Login Form</h2>

<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
  <div class="imgcontainer">
    <img class="avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" >
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" >
        
    <button type="submit">Login</button>
    <button type="submit" style="background-color:tomato;">Registration</button>
    <div id="msg"></div>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

  
  
</form>

<script>
  function validateForm() {
  var x = document.forms["myForm"]["uname"].value;
  var y = document.forms["myForm"]["psw"].value;

  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else if (y ==""){
    alert("Password Section must be filled out ");
    return false;
  }
}
</script>
</body>
</html>

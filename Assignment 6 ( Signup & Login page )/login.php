<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Animated Login Form - CSS</title>
  <link rel="stylesheet" href="login.css.css">
<script>
function togglePassword() {
  const passwordInput = document.getElementById("password");

  // Toggle between 'password' and 'text'
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}
</script>

</head>
<body>

<!-- partial:index.partial.html -->
<!--ring div starts here-->
<form action="login_next.php" method="post">
  <div class="ring">
  <i style="--clr:#00ff0a;"></i>
  <i style="--clr:#ff0057;"></i>
  <i style="--clr:#fffd44;"></i>

  <div class="login">
    <h2>Login</h2>
    <div class="inputBx">
      <input type="text" name="name" placeholder="Username">
    </div>

  <div class="inputBx password-box">
    <input type="password" id="password" name="password" placeholder="Password">
    <span class="toggle-eye" onclick="togglePassword()"><a>👁️</a></span>
  </div>

    <div class="inputBx">
      <input type="submit" name="submit" value="Sign in">
    </div>
    <div class="links">
      <a href="#">Forget Password</a>
      <a href="signup.php">Signup</a>
    </div>
  </div>
</div>
</form>
<!--ring div ends here-->
<!-- partial -->
  
</body>
</html>

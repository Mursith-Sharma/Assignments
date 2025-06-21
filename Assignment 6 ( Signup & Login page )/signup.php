<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Form - CSS</title>
  <link rel="stylesheet" href="signup css.css">
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

<!-- php with database connect-->


<!--ring div starts here-->
<div class="ring">
  <i style="--clr:#00ff0a;"></i>
  <i style="--clr:#ff0057;"></i>
  <i style="--clr:#fffd44;"></i>

  <div class="login">
    <h2>Signup</h2>
    <form action="signup_next.php" method="post">

      <div class="inputBx">
        <input type="text" name="username" placeholder="Username" required>
      </div>

      <div class="inputBx">
        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="inputBx password-box">
        <input type="password" id="password" name="password" placeholder="Password">
        <span class="toggle-eye" onclick="togglePassword()"><a>👁️</a></span>
      </div>

      <div class="inputBx">
        <input type="tel" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" title="Enter 10 digit mobile number" required>
      </div>

      <div class="inputBx">
        <input type="submit"  name="submit" value="Sign Up">
      </div>

    </form>

    <div class="links">
      <a href="#">Already have an account?</a>
      <a href="login.php">Login</a>
    </div>
  </div>
</div>
<!--ring div ends here-->

</body>
</html>

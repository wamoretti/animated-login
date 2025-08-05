<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Login Form Using PHP & CSS</title>
  <link rel="icon" href="login.png" type="image/x-icon">
  <link href="login.css" rel="stylesheet" />
</head>
<body>
<div class="container">
   <?php
    for ($i = 0; $i < 50; $i++) {
      echo '<span style="--i:'.$i.'"></span>';
    }
  ?>
  <div class="login-box">
    <form>
      <h2>Login</h2>
      <div class="input-box">
        <input type="text" name="email" id="email" require />
        <label for="email">Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="password" id="password" require />
        <label for="password">Password</label>
      </div>
      <div class="forgot-pass">
        <a href="#">Forgot your password?</a>
      </div>
      <div class="input-box">
        <button class="btn">Login</button>
      </div>
      <div class="signup-link">
        <a href="#" class="signup-link">Signup</a>
      </div>
    </form>
  </div>
</div>
</body>

</html>

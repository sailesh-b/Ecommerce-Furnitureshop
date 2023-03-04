<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>Register - Basco</title>
</head>
<body>
  <div class="cont">
    <div class="wrapper">
      <div class="title-text">

        <div class="title login" onclick="location.href = 'index.php';">Basco Interiors</div>
        <div class="title signup" onclick="location.href = 'index.php';">Basco Interiors</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="validate.php" class="login" method="post">
            <div class="field">
              <input type="text" placeholder="Email Address" name="email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
        
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="input" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form action="validate.php" class="signup" method="post">
            <div class="field">
              <input type="text" placeholder="Name" name="name" required>
            </div>
            <div class="field">
              <input type="number" placeholder="Mobile No" name="phone" required>
            </div>
            <div class="field">
              <input type="email" placeholder="Email Address" name="email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
          
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="input" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <script src="js/login.js"></script>
</body>
</html>
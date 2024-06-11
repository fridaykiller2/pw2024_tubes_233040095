<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">
        <?php

        include("config.php");
        if(isset($_POST['submit'])){
          $username = mysqli_real_escape_string($conn,$_POST['username']);
          $password = mysqli_real_escape_string($conn,$_POST['password']);

          $result = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password' ") or die("select error");
          $row = mysqli_fetch_assoc($result);

          if(is_array($row) && !empty($row)) {
            $_SESSION['valid'] = $row['username'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
          }else {
            echo "<div class='message'>
            <p>Wrong username or password</p>
            </div> <br>";
            echo "<a href='login.php'><button class='btn'>Go Back</button>";
          }
          if(isset($_SESSION['valid'])){
            header("Location: movie.php");
          }
        }else{

        ?>
        <header>Login</header>
        <form action="" method="post">
          <div class="field input">
            <label for="username">username</label>
            <input
              type="text"
              name="username"
              id="username"
              autocomplete="off"
              required
            />
          </div>

          <div class="field input">
            <label for="password">password</label>
            <input
              type="text"
              name="password"
              id="password"
              autocomplete="off"
              required
            />
          </div>

          <div class="field">
            <input
              type="submit"
              class="btn"
              name="submit"
              value="Login"
              required
            />
          </div>
          <div class="links">
            Don't have account? <a href="register.php">Sing Up Now</a>
          </div>
        </form>
      </div>
      <?php } ?>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>register</title>
  </head>
  <body>
    <div class="container">
      <div class="box form-box">

      <?php

      include("config.php");
      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //verifying the unique email

        $verify_query = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");
        
        if(mysqli_num_rows($verify_query) !=0 ){
          echo "<div class='message'>
                  <p>This username is used, Try another one please!</p>
                </div> <br>";
          echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }
        else{
          mysqli_query($conn, "INSERT INTO users(Username,Password) VALUES('$username','$password')") or die("error octure");
          echo "<div class='message'>
          <p>Registration successfully!</p>
        </div> <br>";
         echo "<a href='login.php'><button class='btn'>Login Now</button>";
        }

      }else {

      ?>  

        <header>Sing Up</header>
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
            <label for="username">username</label>
            <input
              type="text"
              name="usernmame"
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
            Already a member? <a href="login.php">Sing in</a>
          </div>
        </form>
      </div>
      <?php } ?>
    </div>
  </body>
</html>

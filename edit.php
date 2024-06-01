<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>change profile</title>
  </head>
  <body>
    <div class="nav">
      <div class="logo">
        <p><a href="home.php">Logo</a></p>
      </div>

      <div class="right-links">
        <a href="#">change profile</a>
        <a href="logout.php"> <button class="btn">log out</button></a>
      </div>
    </div>
    <div class="container">
      <div class="box form-box">
        <header>change profile</header>
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
            <label for="email">email</label>
            <input
              type="text"
              name="email"
              id="email"
              autocomplete="off"
              required
            />
          </div>

          <div class="field">
            <input
              type="submit"
              class="btn"
              name="submit"
              value="Update"
              required
            />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

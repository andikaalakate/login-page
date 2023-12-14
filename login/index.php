<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- <?php include 'config/koneksi.php'; ?> -->
</head>

<body>
  <!-- Transparent background overlay -->
  <div class="overlay"></div>

  <div class="container">
    <h2>Login</h2>
    <form id="loginForm" method="post" action="config/logina.php">

      <div class="input-container">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan username anda ..." required>
      </div>
      <div class="input-container">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan password anda ..." required>
      </div>
      <div class="ehe">
        <div class="kembali">
          <a href="../../index.php">Kembali</a>
        </div>
        <div class="forgot-password">
          <a href="forgot_password">Lupa Password?</a>
        </div>
      </div>
      <button type="submit">Login</button>
    </form>
    <p id="message"></p>
    <!-- <div id="errorPopup">
      <p id="errorText">Invalid username or password.</p>
      <span id="closeErrorPopup" onclick="closePopup()">&times;</span>
    </div> -->
  </div>
  <!-- <script src="js/script.js"></script> -->
</body>

</html>
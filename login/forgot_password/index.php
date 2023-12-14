<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <!-- Transparent background overlay -->
  <div class="overlay"></div>

  <div class="container">
    <h2>Forgot Password</h2>
    <form id="forgotPasswordForm" onsubmit="return sendResetLink()" method="post">
      <div class="input-container">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Masukkan alamat email anda ..." required>
      </div>
      <div class="ehe">
        <div class="kembali">
          <a href="../index.php">Kembali ke Login</a>
        </div>
      </div>
      <button type="submit">Kirim Permintaan Reset Password</button>
    </form>
    <p id="message"></p>
  </div>
  <!-- <script src="js/script.js"></script> -->
</body>
</html>

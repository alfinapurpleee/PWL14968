<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    .container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f0f0f0;
    }

    .login {
      background-color: #fff;
      padding: 3rem 5rem;
      border-radius: 20px;
      box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3);
    }

    .logo {
      margin-bottom: 1rem;
    }

    .logo h1 span {
      color: #c545d3;
    }

    .login-header {
      margin-bottom: 3rem;
      color: #333;
      text-align: center;
    }

    .login-header h1 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .input-group {
      display: flex;
      flex-direction: column;
      margin-bottom: 1.5rem;
    }

    .input-group label {
      margin-bottom: 0.5rem;
      color: #555;
      font-weight: 700;
    }

    input {
      width: 20rem;
      padding: .5rem 1rem;
      border: 1px solid #000;
      border-radius: 5px;
      font-size: 1rem;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
    }

    input:focus {
      outline: none;
      border-color: #c545d3;
      box-shadow: 3px 3px 10px rgba(149, 0, 255, 0.5);
    }

    button {
      width: 100%;
      /* display: block; */
      padding: 0.7rem 1rem;
      border: none;
      border-radius: 5px;
      background-color: #c545d3;
      color: #fff;
      font-size: 1rem;
      cursor: pointer;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="login">
      <div class="login-header">
        <div class="logo">
          <h1>Nonton<span>Movie</span></h1>
        </div>
        <h1>Login</h1>
        <p>Login untuk melanjutkan ke dashboard</p>
      </div>
      <form action="/" method="POST">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" value="<?= old('username') ?>" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" value="<?= old('password') ?>" required>
        </div>
        <button type="submit">Login</button>
      </form>
      <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>
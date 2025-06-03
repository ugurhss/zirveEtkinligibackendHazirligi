<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giriş Yap</title>
  <style>
    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .wrapper {
      background-color: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    .input-box {
      margin-bottom: 20px;
    }

    .input-box input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      outline: none;
      font-size: 16px;
    }

    .input-box input:focus {
      border-color: #667eea;
      box-shadow: 0 0 5px rgba(102, 126, 234, 0.5);
    }

    button {
      width: 100%;
      background-color: #667eea;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #556cd6;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="wrapper">
  <form action="/login" method="POST">
  @csrf

  <h1>Giriş Yap</h1>

  @error('email')
    <div class="error">{{ $message }}</div>
  @enderror
  <div class="input-box">
    <input type="text" name="email" placeholder="E-posta" value="{{ old('email') }}">
  </div>

  @error('password')
    <div class="error">{{ $message }}</div>
  @enderror
  <div class="input-box">
    <input type="password" name="password" placeholder="Şifre">
  </div>

  <button type="submit">Giriş Yap</button>
</form>

  </div>
</body>
</html>

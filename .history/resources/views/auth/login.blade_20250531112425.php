@extends('layouts.app')

@section('title', 'ANASAYFA SÜRDÜRÜLEBİLİRLİK
VE İNSAN ZİRVESİ
2025 | BURSA ')

@section('content')
  <div class="wrapper">
     <form action="{{ url('/login') }}" method="POST">
  @csrf
      <h1>Login</h1>
      @error('username')
            <div class="error">{{ $message }}</div>
        @enderror

      <div class="input-box">
        <input type="text" placeholder="Username">
        <i class='bx bxs-user'></i>
      </div>

      <div class="input-box">
        <input type="password" placeholder="Password">
        <i class='bx bxs-lock-alt'></i>
      </div>

      <div class="remember-forget">
        <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot password?</a>
      </div>

      <button type="submit" class="btn">Login</button>

      <div class="register-link">
        <p>Don't have an account? <br>
          <a href="#">Register</a>
        </p>
      </div>

    </form>

  </div>
<style>

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('https://i.postimg.cc/rmWWDgCp/background.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}

</style>

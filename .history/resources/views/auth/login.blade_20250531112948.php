@extends('auth.app')

@section('content')
  <div class="wrapper">
    <form action="{{ url('/login') }}" method="POST">
      @csrf

      <h1>Login</h1>

      @error('username')
        <div class="error">{{ $message }}</div>
      @enderror

      <div class="input-box">
        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
        <i class='bx bxs-user'></i>
      </div>

      @error('password')
        <div class="error">{{ $message }}</div>
      @enderror

      <div class="input-box">
        <input type="password" name="password" placeholder="Password">
        <i class='bx bxs-lock-alt'></i>
      </div>

      <div class="remember-forget">
        <label>
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember me
        </label>
        {{-- <a href="{{ route('password.request') }}">Forgot password?</a> --}}
      </div>

      <button type="submit" class="btn">Login</button>

      <div class="register-link">
        <p>Don't have an account? <br>
          {{-- <a href="{{ route('register') }}">Register</a> --}}
        </p>
      </div>
    </form>
  </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <title>Conference Room Booking Login</title>
</head>
<body>
  <div class="container">
    <div class="form-header">
      <h2>Welcome Back</h2>
      <p>Sign in to access your conference room bookings</p>
    </div>
    <div class="form-content">
     @if(session('error'))
             <div class="alert alert-danger">
                   {{ session('error') }}
            </div>
     @endif

      <form id="loginForm" action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="email">Email Address</label>
          <div class="input-wrapper">
            <span class="input-icon icon-email"></span>
            <input type="email" id="email" name="email" value ="{{old('email')}}"placeholder="example@company.com" required>
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-wrapper">
            <span class="input-icon icon-password"></span>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
          </div>
        </div>

        <div class="remember-forgot">
          <div class="remember-me">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember me</label>
          </div>
          <a href="/forgot-password" class="forgot-password">Forgot Password?</a>
        </div>

        <button type="submit">Sign In</button>

        <div class="form-footer">
          Don't have an account? <a href="/register">Sign up</a>
        </div>

        <div class="social-login">
          <div class="social-btn icon-google" title="Sign in with Google"></div>
          <div class="social-btn icon-apple" title="Sign in with Apple"></div>
          <div class="social-btn icon-microsoft" title="Sign in with Microsoft"></div>
        </div>
      </form>
    </div>
  </div>
<script src="../css/login.css"></script>
</body>
</html>

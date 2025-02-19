<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=".css">
  <title>Conference Room Booking Registration</title>
  </head>
<body>
  <div class="container">
    <div class="form-header">
      <h2>Conference Room Booking</h2>
      <p>Create your account to start booking conference rooms</p>
    </div>
    <div class="form-content">
      <form id="registrationForm" action="/register" method="post">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <div class="input-wrapper">
            <span class="input-icon icon-user"></span>
            <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
          </div>
        </div>

        <div class="form-group">
          <label for="lastName">Last Name</label>
          <div class="input-wrapper">
            <span class="input-icon icon-user"></span>
            <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
          </div>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <div class="input-wrapper">
            <span class="input-icon icon-phone"></span>
            <input type="tel" id="phone" name="phone" placeholder="+212      " required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <div class="input-wrapper">
            <span class="input-icon icon-email"></span>
            <input type="email" id="email" name="email" placeholder="example@company.com" required>
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-wrapper">
            <span class="input-icon icon-password"></span>
            <input type="password" id="password" name="password" placeholder="Create a strong password" required>
          </div>
        </div>

        <!-- Hidden field for role_id as requested -->
        <input type="hidden" id="role_id" name="role_id" value="2">

        <button type="submit">Create Account</button>

        <div class="form-footer">
          Already have an account? <a href="/login">Sign in</a>
        </div>
      </form>
    </div>
  </div>
  </body>
  </html>

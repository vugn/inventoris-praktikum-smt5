<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags for SEO and responsiveness -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login page for our application">
    <meta name="author" content="Your Company Name">
    <title>Login - Gusti Randa</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- Animate.css for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
      body {
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
        background-image: url('https://ccitraining.edu/wp-content/uploads/2023/12/Information-Technology.jpg');
        background-size: cover;
        background-attachment: fixed;
      }
      .login-container {
        display: flex;
        width: 100%;
        max-width: 900px;
        height: 80vh;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.8);
      }
      .login-image {
        background-image: url('https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_1280.jpg');
        background-size: cover;
        background-position: center;
        flex: 1;
      }
      .login-form {
        padding: 2rem;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .login-form .card {
        width: 100%;
        border: none;
      }
      .card-header {
        background-color: #0d6efd;
        color: white;
        border-radius: 10px 10px 0 0;
      }
      .card-body {
        padding: 2rem;
      }
      .btn-primary {
        background-color: #0d6efd;
        border: none;
      }
      .btn-primary:hover {
        background-color: #0b5ed7;
      }
      @media (max-width: 768px) {
        .login-container {
          flex-direction: column;
          height: auto;
        }
        .login-image {
          height: 200px;
        }
      }
    </style>
  </head>
  <body>
    <div class="login-container animate__animated animate__fadeIn">
      <!-- Image section -->
      <div class="login-image d-none d-md-block animate__animated animate__fadeInLeft"></div>

      <!-- Form section -->
      <div class="login-form animate__animated animate__fadeInRight">
        <div class="card">
          <div class="card-header text-center">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <!-- LoginForm class instance -->
            <form method="POST" class="LoginForm">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">@</span>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock"></i></span>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <div class="mb-3 text-end">
                <a href="/forgot-password" class="text-decoration-none">Forgot Password?</a>
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init();

      // LoginForm class to handle form logic
      class LoginForm {
        constructor() {
          this.emailInput = document.getElementById('email');
          this.passwordInput = document.getElementById('password');
        }

        validateForm() {
          return this.emailInput.value !== '' && this.passwordInput.value !== '';
        }
      }

      // Example usage
      const loginFormInstance = new LoginForm();
    </script>
  </body>
</html>
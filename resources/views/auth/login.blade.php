{{-- resources/views/auth/login.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>THE CRAZIES - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(to bottom right, #dc2626, #b91c1c); /* red gradient */
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-card {
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
      background: #ffffff;
      width: 100%;
      max-width: 500px;
    }

    .form-control {
      border-radius: 6px;
      padding: 0.75rem 1rem;
      font-size: 1rem;
    }

    /* .btn {
      border-radius: 6px !important;
      font-size: 1rem;
    } */

    .btn-primary {
      background-color: #567de7;
      border: none;
    }

    .btn-primary:hover {
      background-color: #436ad0;
    }

    .btn-secondary {
      background-color: #6c757d;
      border: none;
    }

    .btn-secondary:hover {
      background-color: #5a6268;
    }

    .logo-container {
      background-color: #1f1f1f;
      padding: 20px 0;
      text-align: center;
      margin: -1.5rem -1.5rem 1rem -1.5rem;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .logo-img {
      max-width: 120px;
      height: auto;
    }

    .site-title {
      font-weight: bold;
      font-size: 1.5rem;
      color: white;
    }

    .btn-group .btn {
      width: 50%;
    } 

    @media (max-width: 576px) {
      .btn-group {
        flex-direction: column;
      }

      .btn-group .btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="container px-3">
    <div class="row justify-content-center">
      <div class="login-card p-4">
        <div class="logo-container">
          <img src="{{ asset('images/logo.png') }}" alt="THE CRAZIES" class="logo-img" />
        </div>
        <div class="card-body">
          <h3 class="text-center mb-4">Welcome Back!</h3>

          @if (session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
          @endif

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
              <input
                type="email"
                name="email"
                class="form-control @error('email') is-invalid @enderror"
                placeholder="Enter Email Address..."
                value="{{ old('email') }}"
                required
                autofocus
              />
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <input
                type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                placeholder="Password"
                required
              />
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="btn-group d-flex" role="group">
              <button type="submit" class="btn btn-primary">Login</button>
              &nbsp;
              <a href="{{ url('/') }}" class="btn btn-secondary">Home</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

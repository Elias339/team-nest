<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TeamNest</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            min-height: 100vh;
        }
        .hero {
            color: #fff;
        }
        .hero h1 span {
            color: #ffc107;
        }
        .feature-card {
            border-radius: 16px;
            transition: 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        .navbar {
            background: transparent;
        }
        .btn-outline-light:hover {
            background: #fff;
            color: #0d6efd;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">TeamNest</a>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-light me-2">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</nav>

<!-- Hero Section -->
<section class="hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-5 fw-bold">Manage Your Team <span>Smarter</span></h1>
                <p class="lead mt-3">
                    TeamNest is a modern SaaS platform to manage employees, tasks, attendance, and productivity — all in one place.
                </p>
                <div class="mt-4">
                    <a href="register.html" class="btn btn-warning btn-lg me-3">Get Started</a>
                    <a href="#features" class="btn btn-outline-light btn-lg">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img src="https://cdn-icons-png.flaticon.com/512/921/921347.png" class="img-fluid" style="max-height: 350px;" alt="Team Management">
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section id="features" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose TeamNest?</h2>
            <p class="text-muted">Everything your team needs to grow faster</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4 text-center">
                    <h5 class="fw-bold">Employee Management</h5>
                    <p class="text-muted">Easily manage employees, roles, and permissions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4 text-center">
                    <h5 class="fw-bold">Task & Project Tracking</h5>
                    <p class="text-muted">Track tasks, deadlines, and team progress in real-time.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4 text-center">
                    <h5 class="fw-bold">Reports & Analytics</h5>
                    <p class="text-muted">Get smart insights to improve productivity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-3 text-center text-white" style="background:#00000050;">
    <small>© 2026 TeamNest. All Rights Reserved.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

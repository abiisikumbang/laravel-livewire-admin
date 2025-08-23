<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi E-Gudang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adminlte3/dist/css/adminlte.min.css') }}">

</head>

<body>

    <header class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo me-auto"><a href="#">BizLand<span>.</span></a></h1>
            <nav class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#">Home</a></li>
                    <li><a class="nav-link" href="#">About</a></li>
                    <li><a class="nav-link" href="#">Contact</a></li>
                    <li><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center">
            <h1>Selamat Datang<br>Aplikasi <span>E-Gudang</span></h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <div class="d-flex justify-content-center mt-4">
                <a href="{{ route('dashboard') }}" class="btn btn-primary rounded-pill px-4 me-3">Dashboard</a>
                <a href="https://www.youtube.com/" class="btn btn-outline-light rounded-pill px-4">
                    <i class="fas fa-play-circle me-2"></i>Watch Video
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>

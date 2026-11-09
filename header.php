<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Rental Mobil - Fathan</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navbar menggunakan warna custom indigo -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #4e73df;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">🚗 RentalMobil 016</a>
            <?php if(isset($_SESSION['email'])): ?>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-3">
                        <span class="text-white small">Halo, <b><?= $_SESSION['nama']; ?></b></span>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-light btn-sm text-primary fw-bold shadow-sm">Logout</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
    <div class="container py-4"></div></div>
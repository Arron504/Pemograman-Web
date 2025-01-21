<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Selamat Datang di Website Kami!</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="about.php">Tentang</a></li>
                    <li><a href="layanan.php">Layanan</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>Menghubungkan Anda dengan Layanan Terbaik</h2>
            <p>Jelajahi dunia digital dan temukan solusi untuk kebutuhan Anda.</p>
            <a href="#services" class="btn-primary">Jelajahi Layanan Kami</a>
        </div>
    </section>

    <!-- Main Content -->
    <main>
        <section class="intro">
            <div class="container">
                <h2>Mengenai Kami</h2>
                <p>Website ini memberikan berbagai informasi yang berguna bagi pengunjung. Kami menyediakan layanan terbaik di bidang kami.</p>
                <p>Jelajahi halaman-halaman di atas untuk mengetahui lebih lanjut tentang kami.</p>
            </div>
        </section>

        <section class="services" id="services">
            <div class="container">
                <h2>Layanan Kami</h2>
                <div class="service-list">
                    <div class="service-item">
                        <h3>Layanan 1</h3>
                        <p>Deskripsi layanan 1 yang menarik dan bermanfaat.</p>
                    </div>
                    <div class="service-item">
                        <h3>Layanan 2</h3>
                        <p>Deskripsi layanan 2 yang memberikan solusi praktis.</p>
                    </div>
                    <div class="service-item">
                        <h3>Layanan 3</h3>
                        <p>Deskripsi layanan 3 yang teruji dan terpercaya.</p>
                    </div>
                    <div class="service-item">
                        <h3>Layanan 4</h3>
                        <p>Deskripsi layanan 4 yang akan memenuhi kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Website Kami. Semua hak cipta dilindungi.</p>
        </div>
    </footer>
</body>
</html>
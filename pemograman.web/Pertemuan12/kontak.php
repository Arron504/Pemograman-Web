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
            <h1>Kontak Kami</h1>
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

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui formulir di bawah ini.</p>
            
            <form action="submit_contact.php" method="POST">
                <label for="name">Nama Anda:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email Anda:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Pesan Anda:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Website Kami. Semua hak cipta dilindungi.</p>
        </div>
    </footer>
</body>
</html>
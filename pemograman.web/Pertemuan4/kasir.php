<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kasir</title>
</head>
<body>
    <h2>Form Kasir</h2>
    <form method="post"action"">
        <label>Nama Barang :</label>
        <input type="text" name="nama barang" require><br><br> 
        <label>Jumlah :</label> 
        <input type="number" nama="jumlah" require><br><br> 
        <label>Harga Barang :</label>
        <input type="number" name="harga_barang" require><br><br>

        <input type="submit" name="submit" value="Hitung Total">
    </form>

    <?php 
    if(isset($_POST['submit'])){
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $harga_barang = $_POST['harga_barang'];

    // menghitung total bayar
    $total = $jumlah*$harga_barang;

    // code menghasilkan hasil 
    echo"<h3>Hasil Pembayaran </3>";
    echo"<Nama Barang : $nama_barang <br>";
    echo"Jumlah : &Jumlah <br>";
    echo"<NHarga Barang : $harga_barang <br>";
    echo"Total Pembelian : $total";

    }
    ?>

</body>
</html>
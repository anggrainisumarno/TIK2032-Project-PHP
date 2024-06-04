<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portoweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $sql = "SELECT * FROM gallery_photos";
    $result = mysqli_query($koneksi, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggikoo Personal Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Gambar/Profil.jpeg" type="image/x-icon">
    <link rel="icon" href="Gambar/Profil.jpeg" type="image/x-icon">
</head>
<body>
    <header class="header">
        <a href= "index.html" class="logo"><span>Anggraini </span>Sumarno</a>
        <nav class="navbar" id="navbar">
            <a href="index.html">Home</a>
            <a href="contact.html">Contact</a>
            <a href="blog.php">Blog</a>
            <a href="gallery.php" class="active">Gallery</a>
            <a href="#">
    </header>
    <div class="gallery">
        <?php include 'ambil_foto.php'; ?>
    </div>

    <footer style="text-align: center;">
        <p>Copyright &copy; 2024 Anggraini Dwi Putri Sumarno.</p>
    </footer>
    <hr>
</body>

</html>

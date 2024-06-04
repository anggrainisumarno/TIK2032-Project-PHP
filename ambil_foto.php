<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portoweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data foto dari tabel gallery_photos
$sql = "SELECT * FROM gallery_photos";
$result = $conn->query($sql);


// Cek apakah ada data
if ($result !== null && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="polaroid">';
        echo '<img src="' . $row["image_url"] . '" alt="' . $row["title"] . '">';
        echo '<div class="container">';
        echo '<p>' . $row["description"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Tidak ada data foto.";
}

?>

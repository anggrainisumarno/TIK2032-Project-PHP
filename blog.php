<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portoweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, content FROM blogs";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggi blog</title>
    <link rel="shortcut icon" href="gambar/Profil.jpeg" type="image/x-icon">
    <link rel="icon" href="gambar/Profil.jpeg" type="image/x-icon">
</head>

<body>
    <header>
        <a href="index.html" class="logo"><span>Anggraini</span> Sumarno</a>
        <nav class="navbar" id="navbar">
            <a href="index.html">Home</a>
            <a href="contact.html">Contact</a>
            <a href="blog.php" class="active">Blog</a>
            <a href="gallery.php">Gallery</a>
        </nav>
    </header>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: "Poppins", sans-serif;
}

:root {
    --bg-color: #fffffff1;
    --second-bg-color: #a21212;
    --text-color: white;
    --main-color: #ffd500fe;
}

html {
    font-size: 60%;
    overflow-x: hidden;
}

body {
    background: var(--bg-color);
    color: var(--text-color);
    font-size: 1.6rem; /* Added font size for body */
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 2rem 12%;
    background: rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(10px);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 5;
}

.logo {
    font-size: 3rem;
    color: var(--text-color);
    font-weight: 800;
    cursor: pointer;
    transition: 0.3s ease;
}

.logo:hover {
    transform: scale(1.1);
}

.logo span {
    text-shadow: 0 0 25px var(--main-color);
}

.navbar a {
    font-size: 1.8rem;
    color: var(--text-color);
    margin-left: 4rem;
    font-weight: 500;
    transition: 0.3s ease;
    border-bottom: 3px solid transparent;
}

.navbar a:hover,
.navbar a.active {
    color: var(--main-color);
    border-bottom: 3px solid var(--main-color);
}

section {
    padding: 2rem 12%;
    margin-top: 8rem; /* Adjusted margin top */
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

article {
    margin-bottom: 2rem;
}

article h2 {
    color: #333333;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

article p {
    color: #666666;
    font-size: 1.6rem;
    line-height: 1.8;
}

footer {
    text-align: center;
    padding: 1rem 0;
    background-color: rgba(0, 0, 0, 0.3);
    color: white;
}

        
    </style>

    <section>
    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<article>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["content"] . "</p>";
                echo "</article><hr>";
            }
        } else {
            echo "<p>No articles found</p>";
        }
        ?>
    </section>

    <footer>
        <p>Copyright &copy; 2024 Anggraini Dwi Putri Sumarno.</p>
    </footer>
</body>

</html>

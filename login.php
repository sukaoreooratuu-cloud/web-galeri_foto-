<?php

session_start();
require "koneksi.php";

$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    $stmt = $conn->prepare(
        "SELECT id, nama, username, password, role
         FROM users
         WHERE username = ?"
    );

    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        // Cek password
        if (password_verify($password, $user["password"])) {

            $_SESSION["login"] = true;
            $_SESSION["id"] = $user["id"];
            $_SESSION["nama"] = $user["nama"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["role"] = $user["role"];

            header("Location: index.php");
            exit;

        } else {

            $pesan = "Password salah!";
        }

    } else {

        $pesan = "Username tidak ditemukan!";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Galeri Foto</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="logo">
        <h1>GALERI FOTO</h1>
        <p>Bagikan momen terbaikmu</p>
    </div>

    <h2>Login</h2>

    <?php if ($pesan != ""): ?>

        <div class="error">
            <?= htmlspecialchars($pesan) ?>
        </div>

    <?php endif; ?>

    <form method="POST" action="proses_login.php">

        <div class="form-group">

            <label>Username</label>

            <input
                type="text"
                name="username"
                placeholder="Masukkan username"
                required
            >

        </div>

        <div class="form-group">

            <label>Password</label>

            <input
                type="password"
                name="password"
                placeholder="Masukkan password"
                required
            >

        </div>

        <button type="submit" class="btn">
            Login
        </button>

    </form>

    <div class="link">

        Belum punya akun?

        <a href="register.php">
            Daftar sekarang
        </a>

    </div>

</div>

</body>

</html>
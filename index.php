<?php

session_start();

if (!isset($_SESSION["login"])) {

    header("Location: login.php");

    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Galeri Foto</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="logo">

        <h1>GALERI FOTO</h1>

        <p>Selamat datang 👋</p>

    </div>


    <h2>
        Halo, <?= htmlspecialchars($_SESSION["nama"]) ?>!
    </h2>


    <p style="
        text-align:center;
        margin-bottom:20px;
        color:#888;
    ">

        Kamu berhasil login sebagai

        <strong>
            <?= htmlspecialchars($_SESSION["role"]) ?>
        </strong>

    </p>


    <a
        href="logout.php"
        class="btn"
        style="
            display:block;
            text-align:center;
            text-decoration:none;
        "
    >
        Logout
    </a>

</div>

</body>
</html>
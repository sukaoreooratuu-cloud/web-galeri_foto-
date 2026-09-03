<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Register | Galeri Foto </title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="logo">

        <h1>GALERI FOTO </h1>

        <p>Bagikan momen terbaikmu</p>

    </div>


    <h2>Daftar Akun</h2>



    <form method="POST" action="proses_register.php">

        <div class="form-group">

            <label for="nama">
                Nama Lengkap
            </label>

            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama lengkap"
                required
            >

        </div>


        <div class="form-group">

            <label for="username">
                Username
            </label>

            <input
                type="text"
                id="username"
                name="username"
                placeholder="Masukkan username"
                required
            >

        </div>


        <div class="form-group">

            <label for="password">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukkan password"
                required
            >

        </div>


        <button
            type="submit"
            class="btn"
        >
            Daftar Sekarang
        </button>

    </form>


    <div class="link">

        Sudah punya akun?

        <a href="login.php">
            Login di sini
        </a>

    </div>

</div>

</body>
</html>
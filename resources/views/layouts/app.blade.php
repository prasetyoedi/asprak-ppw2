<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Menggunakan yield untuk judul halaman -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Header Situs</h1>
    </header>

    <main>
        @yield('content') <!-- Yield untuk konten utama -->
    </main>

    <footer>
        <p>Footer Situs</p>
    </footer>
</body>

</html>
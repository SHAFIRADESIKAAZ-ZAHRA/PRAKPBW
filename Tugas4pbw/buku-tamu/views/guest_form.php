<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
<h2>Selamat Datang di Buku Tamu</h2>
<form action="index.php" method="post">
    <label for="name">Nama:</label><br>
    <input type="text" name="name" required><br><br>
    <label for="comment">Komentar:</label><br>
    <textarea name="comment" rows="5" required></textarea><br><br>
    <input type="submit" value="Kirim">
</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Penambahan Data Parkir</h1>
    <form action="simpan.php" method="POST">
        <label for="">plat_nomor</label>
        <input type="text" name="plat_nomor">
        <br>
        <label for="">jenis</label>
        <input type="text" name="jenis">
        <br>
        <label for="">merk</label>
        <input type="text" name="merk">
        <br>
        <label for="">warna</label>
        <input type="text" name="warna">
        <br>
        <button type="submit">Simpan</button>

    </form>
    
</body>
</html>
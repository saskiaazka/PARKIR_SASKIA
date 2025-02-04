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
        <label for="">id_parkir</label>
        <input type="text" name="id_parkir">
        <br>
        <label for="">jam_masuk</label>
        <input type="date" name="jam_masuk">
        <br>
        <label for="">tarif_perjam</label>
        <input type="number" name="tarif_perjam">
        <br>
        <label for="">nama_parkir</label>
        <input type="text" name="nama_parkir">
        <br>
        <button type="submit">Simpan</button>

    </form>
    
</body>
</html>
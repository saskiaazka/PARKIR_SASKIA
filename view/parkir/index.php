<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Parkiran</title>
</head>
<body>
    <h1>Data Parkiran Hari ini</h1>
    <a href="tambah.php">Penambahan Data Parkir</a>
    <table border="2">
        <tr>
           <th>no.</th>
           <th>id parkir</th>
           <th>jam masuk</th>
           <th>tarif perjam</th>
           <th>nama parkir</th>
           <th>aksi</th>
        </tr>

        <?php
        include '../../config/koneksi.php';
        $query=mysqli_query($conn,"SELECT * FROM parkir");
        $no =1;

        if(mysqli_num_rows($query) > 0){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_parkir'] ?></td>
                    <td><?php echo $result['jam_masuk'] ?></td>
                    <td><?php echo $result['tarif_perjam'] ?></td>
                    <td><?php echo $result['nama_parkir'] ?></td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Hapus</a>
                    </td>
                </tr>
            <?php
            $no++;
            }
        }else{
            echo "data kosong";
         }
        ?>
    </table>
</body>
</html>
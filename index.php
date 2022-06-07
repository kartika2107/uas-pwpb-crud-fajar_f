<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Belajar</title>
</head>
<body>
    <h2>Toko Ayang</h2>
    <br/>
    <a href="tambah.php">+Tambah Barang</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Id_Toko</th>
            <th>Alamat</th>
            <th>Barang</th>
           
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from user");
            while ($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['nama']?></td>
                    <td><?php echo $d['barang']?></td>
                    <td><?php echo $d['alamat']?></td>
                    
                    <td>
                    <a href="edit.php?id=<?php echo $d['id_user']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_user']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
      
    </table>
</body>
</html>
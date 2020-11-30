<!-- UTS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Reservasi Zoom</title>
</head>

<body>
    <header>
        <h1>Listing Reservasi Zoom Meeting Room FTP UB</h1>
    </header>

    <a href="form-tambah.php">Tambah Reservasi Baru</a>
    <br>
    <br>
    <table border="1" cellpadding="3%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Email</th>
            <th>Kegiatan</th>
            <th>Judul Kegiatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_zoom";
        $query = mysqli_query($db, $sql);

        while($zoom = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$zoom['id']."</td>";
            echo "<td>".$zoom['nama']."</td>";
            echo "<td>".$zoom['nomorhp']."</td>";
            echo "<td>".$zoom['email']."</td>";
            echo "<td>".$zoom['kegiatan']."</td>";
            echo "<td>".$zoom['nama_kegiatan']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$zoom['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$zoom['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total data reservasi sebanyak <?php echo mysqli_num_rows($query) ?> data.</p>
    
    </body>
</html>
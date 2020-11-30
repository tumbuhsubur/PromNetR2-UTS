<!-- UTS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Reservasi Zoom</title>
</head>

<body>
    <header>
        <h1>Tambah Data Reservasi Zoom Meeting Room FTP UB</h1>
    </header>

    <nav>
        <a href="index.php">Listing Data Reservasi</a>
    </nav>
    <br>

    <form action="proses-penambahan.php" method="POST">

        <fieldset>
            
            <table id="TambahData" border="0">
                <tr>
                    <td>Nama</td>
                    <td>Nomor HP</td>
                    <td>Email</td>
                    <td>Kegiatan</td>
                    <td>Judul Kegiatan</td>
                </tr>
                <tr>
                    <td><input type="text" name="nama" placeholder="nama lengkap" /></td>
                    <td><input type="text" name="nomorhp" placeholder="Nomor HP" /></td>
                    <td><input type="text" name="email" placeholder="Email@domain.com" /></td>
                    <td><select name="kegiatan">
                        <option>Kuliah</option>
                        <option>Ujian</option>
                        <option>Seminar</option>
                        </select></td>
                    <td><input type="text" name="nama_kegiatan" placeholder="Judul Kegiatan"/></td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td><input type="submit" value="Tambah" name="tambah" /></td>
                </tr>
            </table>
        
        </fieldset>
        <br>
        
    </form>

    </body>
</html>
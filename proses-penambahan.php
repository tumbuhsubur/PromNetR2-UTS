<!-- UTS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php

include("koneksi.php");

// cek tombol tambah sudah diklik atau belum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $nomorhp = $_POST['nomorhp'];
    $email = $_POST['email'];
    $kegiatan = $_POST['kegiatan'];
    $nama_kegiatan = $_POST['nama_kegiatan'];

    // membuat query
    $sql = "INSERT INTO data_zoom (nama, nomorhp, email, kegiatan, nama_kegiatan) VALUE ('$nama', '$nomorhp', '$email', '$kegiatan', '$nama_kegiatan')";
    $query = mysqli_query($db, $sql);

    // status query simpan
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>

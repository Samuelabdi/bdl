<?php
// koneksi kedalam database
include "koneksi.php";

// uji jika tombol disimpan di klik
if (isset($_POST['bubah'])) {
    $simpan = mysqli_query($koneksi, "UPDATE mahasiswa set
    nim = '$_POST[tnim]',
    nama = '$_POST[tnama]',
    alamat = '$_POST[talamat]',
    prodi = '$_POST[tprodi]'
    where id = '$_POST[id]'
    ");

    //membuat pengujian jika simpan data berhasil atau gagal
    if ($simpan) {
        echo "<script>
        alert ('ubah data sukses');
        document.location = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert ('ubah data gagal');
        document.location = 'index.php';
        </script>";
    }

}
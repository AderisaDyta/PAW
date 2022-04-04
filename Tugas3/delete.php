<?php
    include 'koneksi.php';
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];
        $hasil = mysqli_query($koneksi, "DELETE FROM `tbl_013` WHERE `NIM`='".$nim."'");
        if (!$hasil) {
            echo "<script>alert('Data tidak berhasil dihapus.');window.location='data.php'</script>";
        }
        else{
            echo "<script>alert('Data berhasil dihapus.');window.location='data.php'</script>";
        }
    }
?>
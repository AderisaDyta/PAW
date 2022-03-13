<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nomor 3</title>
</head>
<body>
    <b>
    <?php
    // membuat fungsi php
    //Fungsi dari Echo untuk menampilkan teks ke dalam layar.
    function hallo($nama, $umur, $mhs){
    echo "Hai guys,saya ".$nama."<br/>";
    echo "Saya berumur ".$umur."<br/>";
    echo "saya tinggal di daerah lamongan <br/>";
    echo "status saya sebagai ".$mhs."<br/>";
    }
    // memanggil fungsi
    hallo("Aderisa Dyta Okvianti", "20 tahun", "Mahasiswa Universitas Trunojoyo Madura");

    echo "<hr>"; #perintah membuat garis
    $nama1 = "Rosita Dwi Yulianti"; #inisialisasi variable nama1
    $umur1 = "19 tahun"; #inisialisasi variable umur1
    $status = "Pelajar SMAN 1 Ngimbang"; #inisialisasi variable status
    $status2 = "Mahasiswa Universitas Trunojoyo Madura";  #inisialisasi variable status2
    hallo($nama1, $umur1, $status); #memanggil fungsi

    echo "<hr>"; #perintah membuat garis
    $nama2 = "Thalita Olivia Floriesta Audisty"; #inisialisasi variable nama2
    $umur2 ="18 tahun"; #inisialisasi variable umur2
    hallo($nama2, $umur2, $status); #memanggil fungsi

    echo "<hr>"; #perintah membuat garis
    $nama3 = "Aditya Fahri Destyawan"; #inisialisasi variable nama3
    $umur3 ="21 tahun"; #inisialisasi variable umur3
    hallo($nama3, $umur3, $status2); #memanggil fungsi
    ?>
    </b>
    
</body>
</html>
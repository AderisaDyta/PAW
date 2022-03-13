<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nomor 2</title>
</head>
<body>
    <!--//Fungsi dari Echo untuk menampilkan teks ke dalam layar. -->
    <h3>Nama : <?php echo "Aderisa Dyta Okvianti";?><h3> 
    <h3>Nim : <?php echo "200411100013";?><h3>
    <h3>Mata Kuliah : <?php echo "Pemrograman Berbasis Web";?><h3>
    <?php
    //membuat inisialisasi 
    $A = 28; //inisialisasi Variable A yang bernilai 28 dengan tipe data integer
    $B = 2; //inisialisasi variable B yang bernilai 2 dengan tipe data integer
    $C = 20; //inisialisasi variable C yang bernilai 20 dengan tipe data integer

    //Pengoprasian
    $hasil1 = $A + $B; 
    $hasil2 = $B * $C;
    $hasil3 = $C - $B;
    $hasil4 = $A / $B;

    //Hasil
    echo"Hasil Operasi pertama adalah $hasil1 <br><hr>"; // hasil dari operasi 1
    echo"Hasil Operasi kedua adalah $hasil2 <br><hr>"; // hasil dari operasi 2
    echo"Hasil Operasi ketiga adalah $hasil3 <br><hr>"; // hasil dari operasi 3
    echo"Hasil Operasi keempat adalah $hasil4 <br><hr>"; // hasil dari operasi 4
    ?>
</body>
</html>
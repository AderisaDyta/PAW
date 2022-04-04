<?php
    include 'koneksi.php';
    if (isset($_POST['btambah'])) {
        $nim = $_POST['tnim'];
        $nama = $_POST['tnama'];
        $fak = $_POST['tfak'];
        $tgl = $_POST['ttanggal'];
        $sesi = $_POST['tsesi'];
        $hasil = mysqli_query($koneksi, "INSERT INTO `tbl_013`(`NIM`, `Nama`, `Fak`, `Sesi`, `Tanggal`) VALUES ('".$nim."','".$nama."','".$fak."','".$sesi."','".$tgl."')");
        if ($hasil) {
            echo "<script type='text/javascript'>alert('Data berhasil ditambahkan.');</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Data tidak berhasil ditambahkan.');</script>";
        }
    }
    if (isset($_POST['bedit'])) {
        $nim = $_POST['tnim'];
        $nama = $_POST['tnama'];
        $fak = $_POST['tfak'];
        $tgl = $_POST['ttanggal'];
        $sesi = $_POST['tsesi'];
        $hasil = mysqli_query($koneksi, "UPDATE `tbl_013` SET `Nama`='".$nama."',`Fak`='".$fak."',`Sesi`='".$sesi."',`Tanggal`='".$tgl."' WHERE NIM = '".$nim."'");
        if ($hasil) {
            echo "<script type='text/javascript'>alert('Data berhasil diedit.');</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Data tidak berhasil diedit.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Jadwal Pelaksanaan Wisuda XXXI Semester Ganjil </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h3><Center> Jadwal Pelaksanaan Wisuda XXXI <br> Semester Ganjil </center> </h3>
        <a href="tambahData.php"><button button type="Submit" class="btn btn-success" name="btambah">Tambah data</button> </a> 
    <div class="card mt-3">
            <div class="card-header bg-success text-white">
                Data MAHASISWA
        </div>
        <div class="card-body">
           <table class="table table-bordered table-striped">
               <tr>
                   <th>No</th>
                   <th>NIM</th>
                   <th>Nama</th>
                   <th>Fakultas</th>
                   <th>Tanggal</th>
                   <th>Sesi</th>
                   <th>Action</th>
                </tr>
            <?php
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_013 order by NIM desc");
                while($data=mysqli_fetch_array($tampil)) : 
            ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?php echo $data['NIM']?></td>
                <td><?php echo $data['Nama']?></td>
                <td><?php echo $data['Fak']?></td>
                <td><?php echo $data['Tanggal']?></td>
                <td><?php echo $data['Sesi']?></td>
                <td> 
                    <a href="edit.php?nim=<?php echo $data['NIM']?>" class="btn btn-warning"> Edit </a>
                    <a href="delete.php?nim=<?php echo $data['NIM']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin menghapus data?');"> Delete </a>
                </td>
            </tr>
        <?php endwhile; //penutup perulangan while ?> 
        </div>
    </div>
</body>
</html>
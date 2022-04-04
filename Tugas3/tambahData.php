<!DOCTYPE html>
<html>
    <head>
        <title> Jadwal Pelaksanaan Wisuda XXXI Semester Ganjil </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h3><Center> Jadwal Pelaksanaan Wisuda XXXI <br> Semester Ganjil </center> </h3>
    <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Tambah Data MAHASISWA
        </div>
        <div class="card-body">
            <form method="post" action="data.php" >
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="tnim" class="form-control" placeholder="Masukkan Nim anda" required>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama anda" required>
                </div>
                <div class="form-group">
                    <label>Fakultas</label>
                    <input type="text" name="tfak" class="form-control" placeholder="Masukkan Fakultas anda" required>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="ttanggal" class="form-control" placeholder="Masukkan Tanggal wisuda" required>
                </div>
                <div class="form-group">
                    <label>Sesi</label>
                    <select class="form-control" name="tsesi">
                        <option disabled>-- Pilih Sesi --</option>
                        <option value="Sesi I(08.30-09.45)">Selasa Sesi I(08.30-09.45)</option>
                        <option value="Sesi II(10.45-12.00)">Selasa Sesi II(10.45-12.00)</option>
                        <option value="Sesi III(08.30-09.45)">Rabu Sesi III(08.30-09.45)</option>
                        <option value="Sesi IV(10.45-12.00)">Rabu Sesi IV(10.45-12.00)</option>
                    </select>
                </div>
                <br>
                <button type="Submit" class="btn btn-success" name="btambah">Save</button>
                <button type="reset" class="btn btn-danger" name="breset">Reset</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
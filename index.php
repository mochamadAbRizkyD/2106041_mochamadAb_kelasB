<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Tiket Hotel</title>
    <link rel="stylesheet" href="ab.css">
</head>

<body>
    <div class="card">
        <h1>FORM PEMBELIAN TIKET HOTEL</h1>
        <form method="post" action="proses_input.php">
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" maxlength="20" class="form-input" required><br>

            <label for="nomor_kamar">Nomor Kamar :</label>
            <input type="number" name="nomor_kamar" id="nomor_kamar" maxlength="20" class="form-input" required><br>
            
            <label for="tanggal_pesan">Tanggal Pesan :</label>
            <input type="date" name="tanggal_pesan" id="tanggal_pesan" maxlength="20" class="form-input" required><br>
            

            <label for="waktu_checkin">waktu_checkin :</label>
            <input type="time" name="waktu_checkin" id="waktu_chekin" maxlength="20" class="form-input" required><br>

            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="number" name="nomor_telepon" id="nomor_telepon" maxlength="20" class="form-input" required><br>


            <button type="submit" id="btn-kirim">Kirim</button>
        </form>
    </div>

</body>

</html>
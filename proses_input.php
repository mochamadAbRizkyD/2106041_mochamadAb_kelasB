<?php 
    $db = mysqli_connect("localhost","root","","2106041_ab");
    if (!$db) {
        echo "<script>
                alert('database tidak terhubung')
            </script>";
    };

    $nama = $_POST['nama'];
    $nomor_kamar = $_POST['nomor_kamar'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $waktu_checkin = $_POST['waktu_checkin'];
    $nomor_telepon = $_POST['nomor_telepon'];



    $query = "INSERT INTO tikethotel VALUES(NULL,'$nama','$nomor_kamar','$tanggal_pesan','$waktu_checkin','$nomor_telepon')";
    mysqli_query($db,$query);
    echo "<script>alert('data berhasil ditambahkan')</script>";
    echo "<script>window.location='./index.php'</script>"
?>
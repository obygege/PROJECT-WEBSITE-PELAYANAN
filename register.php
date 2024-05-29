<?php

include('koneksi.php');

if (isset($POST['tombol-login'])) {
    $nik = $_POST['NIk'];
    $nama = $_POST['Nama'];
    $telpon = $_POST['Telpon'];
    $password = $_POST['Password'];

    $sql = "INSERT INTO tb_user (Nama, Nik, Telpon, Password) VALUES ('$nama', '$nik', '$telpon', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<?php
include 'koneksi.php';

if (isset($POST['tombol-login'])) {
    $nik_or_nama = $_POST['Nik_dan_Nama'];
    $password = $_POST['Password'];

    $sql = "SELECT * FROM tb_user WHERE Nik='$nik_or_nama' OR Nama='$nik_or_nama'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['Password'])) {
            echo "Login berhasil!";
            header("Location: protected_page.php"); 
        } else {
            echo "Password salah";
        }
    } else {
        echo "Pengguna tidak ditemukan dengan NIK atau Nama yang diberikan";
    }

    $conn->close();
}
?>

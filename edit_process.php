<?php
// Mengimpor file konfigurasi database
include('config.php');

// Menerima data dari formulir
$id = (int)$_GET['id'];
// $id = $_POST['id'];
$name = $_GET['name'];
// $name = $_POST['name'];
$address = $_GET['address'];
// $address = $_POST['address'];
$class = $_GET['class'];

// Mengeksekusi query untuk memperbarui data dalam database
$query = "UPDATE students SET name='$name', address='$address', class='$class' WHERE id='$id'";
$result = mysqli_query($con, $query);

// Memeriksa apakah data berhasil diperbarui atau tidak
if ($result) {
    // Jika berhasil, bisa melakukan tindakan tambahan (misalnya, menampilkan pesan sukses, mengalihkan pengguna ke halaman lain, dll.)
    echo "Data berhasil diperbarui!";
} else {
    // Jika gagal, bisa menampilkan pesan error atau mengambil tindakan lain yang sesuai
    echo "Terjadi kesalahan saat memperbarui data.";
}

<?php
// Mengimpor file konfigurasi database
include('config.php');

// Menerima data dari formulir
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];

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

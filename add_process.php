<?php
// Mengimpor file konfigurasi database
include('config.php');

// Menerima data dari formulir
$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];

// Mengeksekusi query untuk menambahkan data ke database
$query = "INSERT INTO students (name, address, class) VALUES ('$name', '$address', '$class')";
$result = mysqli_query($con, $query);

// Memeriksa apakah data berhasil ditambahkan atau tidak
if ($result) {
    // Jika berhasil, bisa melakukan tindakan tambahan (misalnya, menampilkan pesan sukses, mengalihkan pengguna ke halaman lain, dll.)
    echo "Data berhasil ditambahkan!";
} else {
    // Jika gagal, bisa menampilkan pesan error atau mengambil tindakan lain yang sesuai
    echo "Terjadi kesalahan saat menambahkan data.";
}

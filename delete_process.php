<?php
// Mengimpor file konfigurasi database
include('config.php');

// Menerima data dari formulir
$id = $_GET['id'];

// Mengeksekusi query untuk menambahkan data ke database
// $query = "INSERT INTO students (name, address, class) VALUES ('$name', '$address', '$class')";
$query = "DELETE from students WHERE id = $id";
$result = mysqli_query($con, $query);

// Memeriksa apakah data berhasil ditambahkan atau tidak
if ($result) {
    // Jika berhasil, bisa melakukan tindakan tambahan (misalnya, menampilkan pesan sukses, mengalihkan pengguna ke halaman lain, dll.)
    echo "Data berhasil dihapus!";
} else {
    // Jika gagal, bisa menampilkan pesan error atau mengambil tindakan lain yang sesuai
    echo "Terjadi kesalahan saat menghapus data.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/blk/alkautsar/manage_student.php">List students</a>

</body>

</html>
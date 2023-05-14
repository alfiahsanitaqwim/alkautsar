<?php
// Mengimpor file konfigurasi database
include('config.php');

// Menerima data dari formulir
$id = $_GET['id'];

// Mengeksekusi query untuk menambahkan data ke database
// $query = "INSERT INTO students (name, address, class) VALUES ('$name', '$address', '$class')";
$query = "SELECT * from students WHERE id = $id";
$result = mysqli_query($con, $query);
// Memeriksa apakah baris data ditemukan
if (mysqli_num_rows($result) > 0) {
    // Mendapatkan baris data sebagai array asosiatif
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $address = $row['address'];
    $class = $row['class'];
} else {
    echo "No data found.";
}

// Menutup koneksi database
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student</title>
</head>

<body>
    <form method="POST" action="edit_process.php">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $name ?>" required>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?= $address ?>" required>
        <label for="class">Class:</label>
        <input type="number" id="class" name="class" value="<?= $class ?>" required>
        <button type="submit">Save Change</button>
    </form>

</body>

</html>
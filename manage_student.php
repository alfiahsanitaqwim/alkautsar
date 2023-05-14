<?php
session_start();
error_reporting(0);
include('config.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:mydb.php');
} else {


    // if (isset($_GET['del'])) {
    //     $studentid = $_GET['id'];
    //     // $action = $_GET['del'];
    //     mysqli_query($con, "delete from students where id ='$studentid'");
    //     $_SESSION['msg'] = "data deleted !";
    // }

    // manage_student.php

    if (isset($_GET['del']) && $_GET['del'] == 'delete' && isset($_GET['id'])) {
        $id = $_GET['id'];

        // Lakukan operasi penghapusan berdasarkan ID yang diterima.
        // Anda dapat menggunakan pernyataan SQL DELETE atau metode lain sesuai dengan preferensi Anda.

        // Contoh:
        $query = "DELETE FROM students WHERE id = '$id'";
        // Eksekusi query penghapusan menggunakan metode yang sesuai, seperti mysqli_query atau PDO.

        // Setelah penghapusan selesai, Anda dapat melakukan pengalihan ke halaman lain atau melakukan tindakan lain yang diperlukan.
        // Misalnya, Anda dapat mengalihkan pengguna kembali ke halaman daftar setelah penghapusan selesai:
        header("Location: manage_student.php");
        exit(); // Penting untuk menghentikan eksekusi skrip setelah pengalihan header.
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Manage Student</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
    </head>

    <body>
        <div class="main-content">
            <div class="wrap-content container">
                <section>
                    <div class="row">
                        <div class="col-sm-8 mt-3">
                            <h1><i class="fa-solid fa-book"></i>Manage Book </h1>
                        </div>
                    </div>
                </section>
                <div class="container-fluid bg-warning">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="color:red;"><?php echo htmlentities($_SESSION['msg']); ?>
                                <?php echo htmlentities($_SESSION['msg'] = ""); ?></p>
                            <table class="table table-hover" style="border-radius:6px;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "select * from students");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($sql)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $cnt; ?>.</td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['class']; ?></td>
                                            <td>
                                                <div>
                                                    <!-- Menambah icon dari font awesome -->
                                                    <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <?php echo $row['id'] ?>
                                                    <a href="delete_process.php?id=<?php echo $row['id'] ?>" title="Delete" onClick="return confirm('Are you sure you want to delete?')" class="btn"><i class="fa fa-times fa fa-white"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                        $cnt = $cnt + 1;
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row text-end">
                        <a href="add_student.php" class="btn">
                            <i class="fa-solid fa-circle-plus fa-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php } ?>
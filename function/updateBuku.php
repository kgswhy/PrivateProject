<?php
include "../config/dbConnect.php";
if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $nama = $_POST['namaBuku'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $author = $_POST['author'];
    $stok = $_POST['stok'];
    # disini ganti dari insert ke ID bgst

    // kalo lu ga apal ambil aja dari phpmyadmin
    $sql = "INSERT INTO `buku`(`nama`,`jenis`, `harga`, `author`, `stok`) VALUES ('$nama','$jenis','$harga','$harga','$stok')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../view/user/index.php?msg=edited");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

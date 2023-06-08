<?php
include "../config/dbConnect.php";
$id = $_GET["id"];
$sql = "DELETE FROM `buku` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("location: ../view/user/index.php?msg=deleted");
} else {
  echo "Failed: " . mysqli_error($conn);
}

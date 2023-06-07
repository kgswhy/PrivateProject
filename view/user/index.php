<?php
session_start();

require '../../config/dbConnect.php'
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container cashier-navbar">
            <a class="navbar-brand" href="#">Latihan UKK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Teacher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a href="../../controller/Logout.php"><button class="btn btn-secondary">Log Out</button></a>
                </ul>
            </div>
        </div>
    </nav>
    <section class="header mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 CopyWriting  align-self-center">
                    <div class="badge mb-10">
                        <img src="" class="icon" alt="">
                        <p class="small-copy">
                            Mari Melihat Data buku Dan Guru
                        </p>
                    </div>
                    <h1 class="big-header mb-10">
                        Data Guru <br> dan Data buku
                    </h1>
                    <p class="primary-copy mb-30">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Quisquam, voluptatum. Quisquam, voluptatum.
                    </p>
                    <a href="#" class="btn btn-primary mr-10">Lebih Lanjut</a>
                    <a href="#" class="btn btn-secondary">Tentang Kami</a>
                </div>
                <div class="col-lg-7">
                    <img src="../../assets/Banner-header.svg" class="img-banner img-fluid" alt="">
                </div>
            </div>te
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h3 class="medium-header mb-10">
                            Dipercayai oleh Sekolah dan Organisasi
                        </h3>
                        <p class="primary-copy mb-30">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel mb-20">
                <div class="carousel-wrapper">
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (1).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (2).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (3).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (4).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (5).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (6).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (7).png" class="logo" alt="">
                    </div>
                </div>
                <div class="carousel-wrapper">
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (1).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (2).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (3).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (4).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (5).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (6).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (7).png" class="logo" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-left">
                <div class="carousel-wrapper-left">
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (1).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (2).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (3).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (4).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (5).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (6).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (7).png" class="logo" alt="">
                    </div>
                </div>
                <div class="carousel-wrapper-left">
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (1).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (2).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (3).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (4).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (5).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (6).png" class="logo" alt="">
                    </div>
                    <div class="card-brand mr-30">
                        <img src="../../assets/Logo (7).png" class="logo" alt="">
                    </div>
                </div>
            </div>
    </section>

    <section class="main mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="medium-header mb-10 text-center">
                        Data Buku
                    </h3>
                    <p class="primary-copy mb-30 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <?php
                    if (isset($_POST["submit"])) {
                        $id = $_POST['id'];
                        $nama = $_POST['namaBuku'];
                        $jenis = $_POST['jenis'];
                        $harga = $_POST['harga'];
                        $author = $_POST['author'];
                        $stok = $_POST['stok'];
                        # disini ganti dari insert ke ID bgst

                        // kalo lu ga apal ambil aja dari phpmyadmin
                        $sql = "UPDATE `buku` SET 
                        `nama`='$nama',
                        `jenis`='$jenis',
                        `harga`='$harga',
                        `author`='$author',
                        `stok`='$stok'
                        WHERE `id` = '$id'";

                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo "ke apdet";
                        } else {
                            echo "Failed: " . mysqli_error($conn);
                        }
                    }
                    ?>
                    <!-- Modal Edit -->

                    <div class="modal fade" id="Register" aria-hidden="true" aria-labelledby="RegisterLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="--bs-modal-border-radius: 26px;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="RegisterLabel">Edit buku</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="../../function/updateBuku.php">

                                        <input type="text" id="idbuku" class="form-control" name="id" value="" hidden />
                                        <div class="mb-3">
                                            <label for="Nis" class="form-label">Nama Buku</label>
                                            <input type="text" class="form-control" name="namaBuku" placeholder="Masukkan Nis buku" id="InputNisbuku" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="Namabuku" class="form-label">Jenis Buku</label>
                                            <select class="form-select" name="jenis" aria-label="Select Kelas buku">
                                                <option selected>Pilih kelas</option>
                                                <option value="Novel" name="jenis">Novel</option>
                                                <option value="Komik" name="jenis">Komik</option>
                                                <option value="Antologi" name="jenis">Antologi</option>
                                                <option value="Biografi" name="jenis">Biografi</option>
                                                <option value="Dongeng" name="jenis">Dongeng</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="HargaBuku" class="form-label">Harga Buku</label>
                                            <input type="Number" class="form-control" name="harga" placeholder="Masukkan Harga Buku" id="InputBuku" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="AuthorBuku" class="form-label">Author</label>
                                            <input type="text" class="form-control" name="author" placeholder="Masukkan Nama Author" id="InputAuthor" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="StokBuku" class="form-label">Stok Buku</label>
                                            <input type="Number" class="form-control" name="stok" placeholder="Masukkan Harga Buku" id="InputBuku" required />
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Register Modal -->
                    <div class="modal fade" id="Register" aria-hidden="true" aria-labelledby="RegisterLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="--bs-modal-border-radius: 26px;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="RegisterLabel">Tambah buku</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="">
                                        <div class="mb-3">
                                            <label for="Nis" class="form-label">Nama Buku</label>
                                            <input type="text" class="form-control" name="namaBuku" placeholder="Masukkan Nis buku" id="InputNisbuku" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="Namabuku" class="form-label">Jenis Buku</label>
                                            <select class="form-select" name="jenis" aria-label="Select Kelas buku">
                                                <option selected>Pilih kelas</option>
                                                <option value="Novel" name="jenis">Novel</option>
                                                <option value="Komik" name="jenis">Komik</option>
                                                <option value="Antologi" name="jenis">Antologi</option>
                                                <option value="Biografi" name="jenis">Biografi</option>
                                                <option value="Dongeng" name="jenis">Dongeng</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="HargaBuku" class="form-label">Harga Buku</label>
                                            <input type="Number" class="form-control" name="harga" placeholder="Masukkan Harga Buku" id="InputBuku" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="AuthorBuku" class="form-label">Author</label>
                                            <input type="text" class="form-control" name="author" placeholder="Masukkan Nama Author" id="InputAuthor" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="StokBuku" class="form-label">Stok Buku</label>
                                            <input type="Number" class="form-control" name="stok" placeholder="Masukkan Harga Buku" id="InputBuku" required />
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary mb-10" data-bs-target="#Register" data-bs-toggle="modal">Tambah Data buku</button>
                    <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == "success") {
                            echo "<div class='alert alert-success' role='alert'>Data berhasil ditambahkan</div>";
                        } else if ($_GET['msg'] == "failed") {
                            echo "<div class='alert alert-danger' role='alert'>Data gagal ditambahkan</div>";
                        } else if ($_GET['msg'] == "deleted") {
                            echo "<div class='alert alert-danger' role='alert'>Data berhasil dihapus</div>";
                        } else if ($_GET['msg'] == "edited") {
                            echo "<div class='alert alert-warning' role='alert'>Data berhasil diubah</div>";
                        }
                    }
                    ?>
                    <table class="table table-hover text-center">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Jenis Buku</th>
                                <th scope="col">Harga Buku</th>
                                <th scope="col">Author Buku</th>
                                <th scope="col">Stok Buku</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = "SELECT * FROM `buku`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row["nama"] ?></td>
                                    <td><?php echo $row["jenis"] ?></td>
                                    <td><?php echo "Rp" . $row["harga"] ?></td>
                                    <td><?php echo $row["author"] ?></td>
                                    <td><?php echo $row["stok"] ?></td>

                                    <td>
                                        <a href="id=<?php echo $row["id"] ?>" data-bukuid="<?php echo $row["id"] ?>" class="link-dark set_data_edit" data-bs-target="#Register" data-bs-toggle="modal"><i data-bukuid="aaa" class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                        <a data-bukuid="<?php echo $row["id"] ?>" class="link-dark set_data_delete"><i class="fa-solid fa-trash fs-5"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        // disini di set javascript buat set data edit
        // Kasih event listener buat class set_data_edit , jadi tiap dia di pencet
        $(".set_data_edit").click((e) => {
            // Baris dibawah ini ke trigger
            // 1. Ini buat set value bukuid ke element input yang pake id idbuku
            // ctrl f aja id="idbuku" 
            $("#idbuku").val(e.currentTarget.dataset.bukuid);
        });
        // e itu element nya, yang tanda pensil itu, dia kan <a><i> gini, pake currentTarget biar keambil element <a>
        // .dataset itu buat ngambil attribute data-x
        // jadi .dataset.bukuid itu buat ambil attribute data-x
        // e.currentTarget.dataset.bukuid itu sama aja kayak ngambil attribute data-bukuid dari element <a>
        // kalo ambil data-bukuid dari element <i> nya, pake e.target.dataset.bukuid (Karena yang lu klik kan <i> nya)

        // Yang disini juga sama aja
        $(".set_data_delete").click((e) => {

            var result = confirm("Are you sure you want to proceed?");
            if (result === true) {
                // User clicked "Yes"
                // Perform desired action here
                location.href = '../../function/Deletebuku.php?id=' + e.currentTarget.dataset.bukuid;
            }
        });

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
    </script>
</body>

</html>
<?php
    include './fungsi.php';
    $id = $_POST['id'];
    $guestbook = query_single("SELECT * FROM guestbook WHERE id='$id'");


    if(isset($_POST["submit"])){
        if(edit_data($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Diedit');
                    document.location.href = 'tampil.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal diedit');
                    document.location.href = 'tampil.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord Admin</title>

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


</head>

<body>

<section id="penjualan">
    <div class="row">
        <div class="col-3 dashbordKiri">
            <h2><a href="index.php">Dashbord</a></h2><br>
            <div class="menu">
                <a href="input.php"><i class="bi bi-bag-plus"></i>Input Guestbook</a><br></br>
                <a href="tampil.php"><i class="bi bi-bag-check"></i>Lihat Guestbook</a><br></br>
                <a href="logout.php"><i class="bi bi-box-arrow-left"></i>Log Out</a>
            </div>
        </div>
        <div class="col-9 dashbordKanan mt-5">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="posted" class="form-label">Posted</label>
                    <input id="posted" type="date" name="posted" class="form-control" placeholder="masukkan posted"
                        value="<?= $guestbook['posted'];?>" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="masukkan name"
                        value="<?= $guestbook['name'];?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input id="email" type="text" name="email" class="form-control" placeholder="masukkan email"
                        value="<?= $guestbook['email'];?>" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">address</label>
                    <input id="address" type="text" name="address" class="form-control" placeholder="masukkan address"
                        value="<?= $guestbook['address'];?>" required>
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label">city</label>
                    <input id="city" type="text" name="city" class="form-control" placeholder="masukkan city"
                        value="<?= $guestbook['city'];?>" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">message</label>
                    <input id="message" type="text" name="message" class="form-control" placeholder="masukkan message"
                        value="<?= $guestbook['message'];?>" required>
                </div>
               
                <button type="submit" name="submit" class="btn btn-primary mb-2">Kirim</button>
                <div>
                    <a name="kembali" class="btn btn-danger" href="tampil.php">Kembali</a>
                </div>


            </form>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
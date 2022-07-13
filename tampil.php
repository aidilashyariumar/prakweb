<?php

    include './fungsi.php';

    $guestbook = query("SELECT * FROM guestbook");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
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
    
        <div class="col-9 dashbordKanan">
            <header>
                <h2>
                    Tampilan Data Guestbook
                </h2>
            </header>
        <table border=1 class="main-content mt-5 p-5">
            <div class="container">
                <tr>
                    <td class="p-3">NO. </td>
                    <td class="p-3">Posted</td>
                    <td class="p-3">Name </td>
                    <td class="p-3">Email </td>
                    <td class="p-3">Addres </td>
                    <td class="p-3">City </td>
                    <td class="p-3">Message</td>
                </tr>
            </div>
<section
            <?php 
            $i = 1;
            foreach($guestbook as $book):
            ?>
            <tr>
                <td class="p-3"><?= $i; ?></td>
                <td class="p-3"><?= $book['posted']; ?></td>
                <td class="p-3"><?= $book['name']; ?></td>
                <td class="p-3"><?= $book['email']; ?></td>
                <td class="p-3"><?= $book['address']; ?></td>
                <td class="p-3"><?= $book['city']; ?></td>
                <td class="p-3"><?= $book['message']; ?></td>
                <td>
                    <form action=" edit.php" method="post">
                        <input type="hidden" name="id" value="<?= $book['id']; ?>">
                        <button type="submit" class="btn btn-success">EDIT</button>
                    </form>
                    <br>
                    <form action="hapus.php?id=<?= $book['id']; ?>" method="post">
                        <input type="hidden" name="id" value="<?= $book['id']; ?>">
                        <button type="submit" name="hapus" class="btn btn-danger mb-3">HAPUS</button>
                    </form>
                </td>
            </tr>
            <?php
            $i++;
            endforeach;
        ?>
        </table>
    </div>  
    </section>  

</body>

</html>
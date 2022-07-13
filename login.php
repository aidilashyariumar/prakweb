<?php

    include './fungsi.php';

    if(isset($_POST["login"])){
        session_start();

        $username = $_POST["username"];
        $password = $_POST["password"];


        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        
        //cek username
        if(mysqli_num_rows($result) === 1){
            
            //cek password
            $row = mysqli_fetch_assoc($result);
            // if(password_verify($password, $row["password"])){
            //     $id = $row["id"];
            //         header("Location: ./index.php");
            //     exit;
            // }
            echo $row["username"];
            $_SESSION['user'] = $row["username"];
            header("Location:index.php");
        }
        $error = true;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--bootsrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<section class="vh-100">
    <h2 class="text-center mt-5 mb-5">Halaman Login</h2>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="img/programmer.jpg" class="img-fluid" alt="Sample image" width="400px">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <?php
                if(isset ($error)) : ?>
                <h5 class="text-danger">Username / Password Salah !!</h5>
                <?php endif; ?>

                <h3>Login Terlebih Dahulu!</h3>
                <form action="login.php" method="post" class="shadow p-4">
                    <!-- Useraname -->
                    <div class="form-outline mb-4">
                        <label for="username">USERNAME : </label>
                        <input type="text" name="username" id="username"><br>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label for="password">PASSWORD : </label>
                        <input type="password" name="password" id="password"><br>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">

                        <button type="submit" name="login" class="btn btn-success">LOGIN</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Apakah anda belum memiliki akun? <a href="regis.php"
                                class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

    </div>
</section>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</body>

</html>
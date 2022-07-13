<?php
    include 'fungsi.php';

    if(isset($_POST["kirim"])){
        if(regis($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil ditambahkan');
                    document.location.href = 'login.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal ditambahkan');
                    document.location.href = 'regis.php';
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
    <title>Form Registrasi</title>

    <link rel="stylesheet" href="regis.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--bootsrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

</head>
<body>

    <section id="regis">
        <h2 class="text-center mt-5 mb-5">FORM REGISTRASI</h2>
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="img/background_regis.jpg" class="img-fluid" alt="Sample image" width="400px">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post" class="shadow p-4">
                        <div class="form-outline mb-4">
                            <label for="username" class="me-4">Username: </label>
                            <input type="text" name="username" id="username" placeholder="Masukkan username anda" required></br>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password" class="me-4">Password : </label>
                            <input type="password" name="password" id="password" placeholder="Masukkan Password"
                            required></br>
                        </div>

                        <button type="submit" name="kirim" class="btn btn-danger">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>





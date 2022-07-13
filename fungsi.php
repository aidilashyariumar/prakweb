<?php

    $conn= mysqli_connect('localhost','root','','website');
    if(mysqli_connect_errno()){
        echo"Gagal :" . mysqli_connect_error();
    }

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function query_single($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        return $data = mysqli_fetch_assoc($result);
    }


    //registrasi
    function regis($data){
        global $conn;

        $username = stripslashes($data["username"]);
        $password = $data["password"];
        
        //cek username sudah ada atau belum
        $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username sudah terdaftar')
                </script>
            ";

            return false;
        }


        //tambahkan user password ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username','$password')");

        return mysqli_affected_rows($conn);

    }

    //tambah data
    function tambah($data){
    global $conn;

        $posted = htmlspecialchars($data["posted"]);
        $name = htmlspecialchars($data["name"]);
        $email = htmlspecialchars($data["email"]);
        $address = htmlspecialchars($data["address"]);
        $city = htmlspecialchars($data["city"]);
        $message = htmlspecialchars($data["message"]);

        mysqli_query($conn, "INSERT INTO guestbook VALUES ('', '$posted','$name','$email','$address','$city', '$message')");

        return mysqli_affected_rows($conn);
    }

    //edit data
    function edit_data($post){
        global $conn;
        $id = $post["id"];
        $posted = $post["posted"];
        $name = $post["name"];
        $email = $post["email"];
        $address = $post["address"];
        $city = $post["city"];
        $message = $post["message"];
       


        $query = "UPDATE guestbook SET posted='$posted', name='$name', email='$email', address='$address', city='$city', message='$message' WHERE id='$id'";

        mysqli_query($conn, $query);

        if(mysqli_affected_rows($conn) > 0){
            header("location:tampil.php?sukses-edit=3");
        }

        else{
            header("location:tampil.php?sukses-edit=0");
        }
    }

    
?>
<?php

function cek_data($data){
    if(isset($_POST[$data]) == true){
        if($_POST[$data] == NULL){
            return 0;
        }else{
            return $_POST[$data];
        }
    }else{
        return 0;
    }
}
function db(){
    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "root",//jika anda menggunakan xampp, kosongkan ""
        "fesnuk_db"
    );
    if($koneksi->connect_errno == 1){
        return $koneksi->connect_error;
    }else{
        return $koneksi;
    }
}
function registrasi($user,$pass){
    $query = "INSERT INTO user VALUES(NULL,'$user','$pass','pengguna')";
    mysqli_query(db(),$query);
    ?>
    <script>
        alert("Akun telah ditambah!!");
    </script>
    <?php
}
function login($user,$pass){
    $query = "SELECT * FROM user WHERE username = $user 
    AND password = $pass";
    $data = mysqli_query(db(),$query);
    $cek = mysqli_num_rows($data);
    if($cek > 0){
        header("Location:admin/index.php");
    }else{
        header("Location:user/index.php");
    }
}

if(cek_data("dor") == "Registrasi"){
    registrasi(cek_data("username"),cek_data("password"));
}else if(cek_data("dor") == "Login"){
    login(cek_data("username"), cek_data("password"));
}

?>
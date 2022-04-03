<?php
    include 'config.php';
    include 'index.html';
    if( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' &&$_POST["repassword"] != ''){
        $username =$_POST["username"];
        $password =$_POST["password"];
        $repassword =$_POST["repassword"];
        $level = 0;
        if( $password != $repassword) {
            header("locaion:resiter.php");
        }
        $sql = "SELECT * FROM user WHERE username='$username' ";
        $old = mysqli_query($conn,$sql);
        $password = md5($password);
        if( mysqli_num_rows($old)>0){
            header("location:register.php");
        }
        $sql = "INSERT INTO user (username,password,level) VALUES('$username','$password','$level')";
        mysqli_query($conn,$sql);
        echo "Đã đăng ký thành công";
        header("location:index.php");
    }else {
        header("location:index.php");
    }
?>
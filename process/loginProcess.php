<?php
    require ('../db.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email = '$email'";
    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) == 0 ){
        echo '<script>
            alert("Email tidak terdaftar");
            window.history.back();
            </script>';
    }else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            if($user['is_verified']==1){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
    
                header("location: ../page/dashboardPage.php");
            }else {
                echo '<script>
                alert("Email belum diverif");
                window.history.back();
                </script>';
            }
        }else {
            echo '<script>
            alert("Password Anda Salah");
            window.history.back();
            </script>';
        }
    }
?>
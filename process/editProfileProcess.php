<?php
    if(isset($_POST['edit'])){

        include('../db.php');

        $id = $_GET['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $telp = $_POST['telp'];
        $query = mysqli_query($con,
            "UPDATE users
                SET
                    username = '$username',
                    nama = '$name',
                    telp = '$telp'
                WHERE id = '$id'")
                or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Update Success"); window.location = "../page/editProfilePage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Update Failed");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
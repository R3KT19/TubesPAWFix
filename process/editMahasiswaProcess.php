<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['edit'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        $id = $_GET['id'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $npm = $_POST['npm'];
        $prodi = $_POST['prodi'];

        $query = mysqli_query($con,
            "UPDATE users
                SET
                    username = '$username',
                    password = '$password',
                    name = '$name',
                    npm = '$npm',
                    prodi = '$prodi'
                WHERE id = '$id'")
                or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Update Success"); window.location = "../page/listMahasiswaPage.php"
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
<?php
    if(isset($_POST['edit'])){

        include('../db.php');

        $id = $_GET['id'];
        $nama_jasa = $_POST['nama_jasa'];
        $alamat = $_POST['alamat'];
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $query = mysqli_query($con,
            "UPDATE jasa
                SET
                    nama_jasa = '$nama_jasa',
                    alamat = '$alamat',
                    tanggal = '$tanggal',
                    jam = '$jam'
                WHERE id = '$id'")
                or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Update Success"); window.location = "../page/listJasaPage.php"
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
<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['add'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $nama_jasa = $_POST['nama_jasa'];
        $alamat = $_POST['alamat'];
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $id = $_GET['id'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO jasa(nama_jasa, alamat, tanggal, jam, usersID)
                VALUES
            ('$nama_jasa', '$alamat', '$tanggal', '$jam', '$id')")
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo
                '<script>
                alert("Add Success"); window.location = "../page/listJasaPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Add Failed");
                </script>';
        }

        }else{
            echo
                '<script>
                window.history.back()
                </script>';
        }
?>
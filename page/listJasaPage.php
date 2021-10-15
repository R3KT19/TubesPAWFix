<?php 
   include '../component/sidebar.php' 
  
?> 
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #0b0d1a; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
        <h4 >DAFTAR JASA</h4> 
        <hr> 
            <table class="table "> 
            <thead> 
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Jasa</th> 
                    <th scope="col">Alamat Rumah</th> 
                    <th scope="col">Tanggal Pemesanan</th> 
                    <th scope="col">Lama Sesi Service</th> 
                    <th scope="col">Aksi</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php
                $id = $_SESSION['user']['id'];
                $query = mysqli_query($con, "SELECT * FROM jasa WHERE usersID = '$id'") or die(mysqli_error($con)); 
                 
                if (mysqli_num_rows($query) == 0) { 
                    echo '<tr> <td colspan="6" style="text-align: center"> Tidak ada data </td> </tr>'; 
                }else{ 
                    $no = 1; 
                    while($data = mysqli_fetch_assoc($query)){ 
                    echo' 
                        <tr> 
                            <th scope="row">'.$no.'</th> 
                            <td>'.$data['nama_jasa'].'</td> 
                            <td>'.$data['alamat'].'</td> 
                            <td>'.$data['tanggal'].'</td> 
                            <td>'.$data['jam'].' Jam</td>
                            <td> 
 
                                <a href="./editJasa.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a> 
                                <a href="../process/deleteJasaProcess.php?id='.$data['id'].'"  
                                    onClick="return confirm ( \'Yakin?\')"> 
                                    <i style="color: red" class="fa fa-trash"></i> 
                                </a> 
                            </td> 
                        </tr>'; 
                    $no++; 
                    } 
                } 
            ?> 
            </tbody> 
            </table> 
    </div> 
    </aside> 
    <!-- Option 1: Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body> 
</html> 
<?php
    include '../component/sidebar.php';
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM jasa WHERE id = '$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
    $nama_jasa = $data['nama_jasa'];
    $jam = $data['jam'];
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #0b0d1a; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <h4 >TAMBAH MAHASISWA</h4>
    <hr>
    <?='<form onsubmit="return validationForm()" action="../process/editJasaProcess.php?id='.$data['id'].'" method="post">'?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Jasa</label>
            <select class="form-select" aria-label="Default select example" name="nama_jasa" id="nama_jasa">
                <option value="Home Clean">Home Clean</option>
                <option value="Cuci Mobil">Cuci Mobil</option>
                <option value="Cuci AC">Cuci AC</option>
                <option value="Jasa Taman">Jasa Taman</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" <?= 'value = "'.$data['alamat'].'"'?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Reservasi</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp" <?= 'value ="'.$data['tanggal'].'"'?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lama Sesi Service</label>
            <select class="form-select" aria-label="Default select example" name="jam" id="jam">
                <option value="2">2 Jam</option>
                <option value="3">3 Jam</option>
                <option value="4">4 Jam</option>
                <option value="5">5 Jam</option>
                <option value="6">6 Jam</option>
            </select>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="edit">Edit Jasa</button>
        </div>

    </form>
    </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script>
    var nama_jasa = '<?= $nama_jasa?>'
    var jam = '<?= $jam?>'
    document.getElementById('nama_jasa').value = nama_jasa;
    document.getElementById('jam').value = jam;
 </script>
 <script src="../script/validation.js"></script>
</body>
</html>
<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <h4 >TAMBAH JASA</h4>
    <hr>
    <?='<form name="formAdd" action="../process/createJasaProcess.php?id='.$_SESSION['user']['id'].'" onSubmit="return validationForm()" method="post">'?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Jasa</label>
            <select class="form-select" aria-label="Default select example" name="nama_jasa" id="nama_jasa">
                <option selected disabled value="">Pilih Jasa</option>
                <option value="Home Clean">Home Clean</option>
                <option value="Cuci Mobil">Cuci Mobil</option>
                <option value="Cuci AC">Cuci AC</option>
                <option value="Jasa Taman">Jasa Taman</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Reservasi</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lama Sesi Service</label>
            <select class="form-select" aria-label="Default select example" name="jam" id="jam">
                <option selected disabled value="">Pilih Jam</option>
                <option value="2">2 Jam</option>
                <option value="3">3 Jam</option>
                <option value="4">4 Jam</option>
                <option value="5">5 Jam</option>
                <option value="6">6 Jam</option>
            </select>
        </div>

        <div class="d-grid gap-2">
            <button type="Submit" class="btn btn-primary" name="add">Tambah Jasa</button>
        </div>

    </form>
    </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="../script/validation.js"></script>
</body>
</html>
<?php
    include '../component/sidebar.php';
    $id = $_SESSION['user']['id'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #4682B4; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" > 
    <h4 >PROFILE</h4>
    <hr>
    <div class="position-relative">
        <div class="position-absolute top-0 end-0">
            <div class="d-grid">
                <button class="btn btn-warning" name="enabled" style="bottom: 5px" id="enable">Enable Edit</button>
            </div>
        </div>
    </div>
    <br>
    <?='<form onsubmit="return validationForm()" action="../process/editProfileProcess.php?id='.$id.'" method="post">'?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Change Username</label>
            <input class="form-control" id="username" name="username" aria-describedby="emailHelp" <?= 'value = "'.$data['username'].'"'?> disabled>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Change Name</label>
            <input class="form-control" id="name" name="name" aria-describedby="emailHelp" <?= 'value = "'.$data['nama'].'"'?> disabled>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Change No Hp</label>
            <input class="form-control" id="telp" name="telp" aria-describedby="emailHelp" <?= 'value = "'.$data['telp'].'"'?> disabled>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="edit">Confirm</button>
        </div>

    </form>
    </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="../script/validationProfile.js"></script>
</body>
</html>
function validationForm(){
    const nama_jasa = document.getElementById('nama_jasa');
    const alamat = document.getElementById('alamat');
    const tanggal = document.getElementById('tanggal');
    const jam = document.getElementById('jam');

    const nama_jasaValue = nama_jasa.value.trim();
    const alamatValue = alamat.value.trim();
    const tanggalValue = tanggal.value.trim();
    const jamValue = jam.value.trim();
    var error = [];
    var counter = 0;
    if (nama_jasaValue == "")
    {
        error[counter] = "Invalid Jasa";
        counter++;
    }

    if (alamatValue == "")
    {
        error[counter] = "Invalid alamat";
        counter++;
    }

    if (tanggalValue == ""){
        error[counter] = "Invalid date";
        counter++;
    }

    if (jamValue == ""){
        error[counter] = "Invalid jam"
        counter++;
    }

    if(error.length)
    {
        alert(error);
        return false;
    }
}
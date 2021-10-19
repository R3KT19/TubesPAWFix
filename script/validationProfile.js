document.getElementById('enable').onclick = function() {
    var disabledUsername = document.getElementById("username").disabled;
    var disabledName = document.getElementById("name").disabled;
    var disabledTelp = document.getElementById("telp").disabled;
    if (disabledUsername) {
        document.getElementById("username").disabled = false;
    }
    else {
        document.getElementById("username").disabled = true;
    }
    if (disabledUsername) {
        document.getElementById("name").disabled = false;
    }
    else {
        document.getElementById("name").disabled = true;
    }
    if (disabledUsername) {
        document.getElementById("telp").disabled = false;
    }
    else {
        document.getElementById("telp").disabled = true;
    }
}
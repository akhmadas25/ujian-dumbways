<!DOCTYPE html>
<html>

<head>
    <title>Form Validasi</title>
</head>

<body>
    <div id="info"></div>
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="text" name="email" id="email" placeholder="Alamat E-mail">
    <input type="text" name="password" id="password" placeholder="Password">

    <button onclick="formValidasi()">Cek</button>
</body>
<script type="text/javascript">
    function formValidasi() {
        var username = document.getElementById("username").value // mengambil isi inputan usernmae
        var ceku = /^[a-z]+$/ // inputan wajib huruf kecil
        var email = document.getElementById("email").value // mengambil isi inputan email
        var et = email.indexOf("@") // mencari simbol '@' pada inputan email
        var dot = email.indexOf(".") // mencari simbol '.' pada inputan email
        var password = document.getElementById("password").value
        var cekpswd = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/ //Minimal delapan karakter, setidaknya satu huruf besar, satu huruf kecil dan satu nomor
        if (username == "" || email == "" || password == "") { // jika inputan ada yang tidak diisi
            document.getElementById("info").innerHTML = "Data Harus Diisi !"
        } else if (!Boolean(username.match(ceku))) { // jika inputan username bukan huruf kecil
            document.getElementById("info").innerHTML = "Username Harus Huruf Kecil"
        } else if (et < 1 || dot < 1 || email != email.toLowerCase()) { // jika inputan email tidak valid
            console.log(et)
            document.getElementById("info").innerHTML = "E-mail Tidak Valid"
        } else if (!Boolean(username.match(cekpswd))) { // jika inputan password tidak sesuai
            document.getElementById("info").innerHTML = "Minimal delapan karakter, setidaknya satu huruf besar, satu huruf kecil dan satu nomor"
        } else { // jika inputan valid
            document.getElementById("info").innerHTML = "Data Input Benar :)"
        }
    }
</script>

</html>
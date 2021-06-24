<form class="modal-content animate" method="POST" action="fungsiregistrasi.php">

    <div class="imgcontainer">
        <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="<?php echo base_url('assets/img/2.png') ?>" alt="Avatar" class="avatar">
        <h1 style="text-align:center">Registrasi Siswa</h1>
    </div>

    <div class="container">
        <input type="text" placeholder="Enter Username" name="username">
        <input type="text" placeholder="Enter Email" name="email">
        <input type="password" placeholder="Enter Password" name="password">
        <input type="password" placeholder="Enter Password" name="password2">
        <!-- <input type="checkbox" style="margin:26px 30px;" name="rememberme" id="rememberme"> Remember Me -->
        <button type="submit">Registrasi</button>
    </div>
</form>
<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "berhasil") {
        echo "<script>
              alert('berhasil registrasi');
          </script>";
    }
} ?>
<form class="modal-content animate" method="POST" action="lupapassword.php">

    <div class="imgcontainer">
        <span onclick="document.getElementById('modal-wrapper3').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="<?php echo base_url('assets/img/2.png') ?>" alt="Avatar" class="avatar">
        <h1 style="text-align:center">Ganti Password</h1>
    </div>

    <div class="container">
        <input type="text" placeholder="Enter Email" name="email">
        <input type="password" placeholder="Enter Password" name="password">
        <input type="password" placeholder="Enter Password" name="password2">
        <!-- <input type="checkbox" style="margin:26px 30px;" name="rememberme" id="rememberme"> Remember Me -->
        <button type="submit">Ganti Password</button>
    </div>
</form>
<?php
if (isset($_GET['lupa'])) {
    if ($_GET['lupa'] == "pwtidaksama") {
        echo "<script>
alert('Kata Sanditidaksama');

</script>";
    } else if ($_GET['lupa'] == "berhasil") {
        echo "<script>
alert('berhasil ganti Password');
</script>";
    } else {
        echo "<script>
alert('Email salah');
</script>";
    }
} ?>
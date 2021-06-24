<form class="modal-content animate" method="POST" action="<?php echo base_url('Login/cek_log')  ?>">
    <div class="imgcontainer">
        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="<?php echo base_url('assets/img/2.png') ?>" alt="Avatar" class="avatar">
        <h1 style="text-align:center">Login</h1>
    </div>
    <div class="container">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
        <!-- <input type="checkbox" id="checkbox">Show Password -->
        <input type="checkbox" style="margin:26px 30px;" name="rememberme" id="rememberme"> Remember Me
        <a href="#" onclick="document.getElementById('modal-wrapper3').style.display='block'; document.getElementById('modal-wrapper').style.display='none';" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
        <button type="submit">Login</button>
    </div>
</form>
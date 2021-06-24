<div class="container text-white">
    <div class="row" style="margin:100px auto;">
        <div class="col-sm-10 offset-sm-1" style="background-color: goldenrod;">
            <form class="setting mx-auto" style="width: 800px;" method="POST" action="update_akun.php">
                <h3 class="text-center mt-2">Settings Akun</h3>
                <div class="form-group row mt-5">
                    <label for="username" class="col-sm-2 col-form-label"><i class="fas fa-user"></i> Username</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="id" name="id" value="">
                        <input type="text" class="form-control" id="username" name="username" value="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label"><i class="far fa-envelope"></i> Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label"><i class="fas fa-unlock-alt"></i> Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <input type="checkbox" id="checkbox">Show Password
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 text-center mt-5">
                        <button onclick="return confirm('Apakah anda yakin ingin merubah akun???')" href="" type="submit" class="btn btn-dark">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
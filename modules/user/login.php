<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <div class="card">
                <form action="..\modules\user\check_login.php" method="POST">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="userpassword">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" name="submit" class="btn btn-success" value="Login">
                    </div>
            </div>
        </div>
    </div>
</div>

</form>

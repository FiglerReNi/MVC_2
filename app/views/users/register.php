<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Create an Account</h2>
                <p>Please fill out this form to register with us</p>
                <form action="<?= URLROOT; ?>/users/register" method="post">
                    <div class="form-group">
                        <label for="name" class="col-lg">Name: <sup>*</sup>
                            <input type="text" name="name" class="form-control form-control-lg <?= (!empty($data['name_err'])) ? 'is-invalid' :  ''; ?>" value="<?= $data['name']; ?>"/>
                            <span class="invalid-feedback"><?= $data['name_err'] ?></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg">Email: <sup>*</sup>
                            <input type="email" name="email" class="form-control form-control-lg <?= (!empty($data['email_err'])) ? 'is-invalid' :  ''; ?>" value="<?= $data['email']; ?>"/>
                            <span class="invalid-feedback"><?= $data['email_err'] ?></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-lg">Password: <sup>*</sup>
                            <input type="password" name="password" class="form-control form-control-lg <?= (!empty($data['password_err'])) ? 'is-invalid' :  ''; ?>" value="<?= $data['password']; ?>"/>
                            <span class="invalid-feedback"><?= $data['password_err'] ?></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password" class="col-lg">Confirm Password: <sup>*</sup>
                            <input type="text" name="confirm_password" class="form-control form-control-lg <?= (!empty($data['confirm_password_err'])) ? 'is-invalid' :  ''; ?>" value="<?= $data['confirm_password']; ?>"/>
                            <span class="invalid-feedback"><?= $data['confirm_password_err'] ?></span>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Register" class="btn btn-success btn-block">
                        </div>
                        <div class="col">
                            <a href="<?= URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>